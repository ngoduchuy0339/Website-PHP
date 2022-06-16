<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
use Auth;

use Illuminate\Http\Request;
use App\Tour;
use App\TourInfo;
use App\User;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function tableUser(){
        $users = DB::table('users')->paginate(3);
        return view('admin-web.table-user'
        ,compact('users')
        );
    }

    public function tablePayment(){
        $payments = DB::table('payment')->paginate(3);
        return view('admin-web.table-payment', compact('payments'));
    }

    public function tableTour(){
        $tours = DB::table('tour')
        ->join('tour_info', 'tour.id', '=', 'tour_info.tour_id')
        ->paginate(3);

        $lastTours = DB::table('tour')
        ->join('tour_info', 'tour.id', '=', 'tour_info.tour_id')
        ->orderBy('updated_at','desc')
        // ->latest()
        ->take(3)->get();
        return view('admin-web.table-tour'
        ,compact(
            'tours',
            'lastTours'
        ));
        // dd($lastTours);
    }

    // Edit
    public function tableTourEdit(Tour $tour){

        return view('admin-web.table-tour-edit',compact('tour'));
        // dd($tour);
    }

    public function tableTourEditPost(Tour $tour){

        $data = request()->validate([

            'tour_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'status' => 'required',
            'tour_info' => 'required',
            'tour_img' => 'image',
            'city_start' => 'required',
            'date_start' => 'required',
            'date_duration' => 'required',

        ]);

        $tour->update([
            'tour_name' => $data['tour_name'],
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'status' => $data['status'],
        ]);
        
        $tour->tourInfo->timestamps = false;
        if (request('tour_img')){
            $imageTour = request('tour_img')->store('img/tour', 'public');

            $tour->tourInfo->update([
                'tour_info' => $data['tour_info'],
                'city_start' => $data['city_start'],
                'date_start' => $data['date_start'],
                'date_duration' => $data['date_duration'],
                'tour_img' => $imageTour,
            ]);
        } else {
            $tour->tourInfo->update([
                'tour_info' => $data['tour_info'],
                'city_start' => $data['city_start'],
                'date_start' => $data['date_start'],
                'date_duration' => $data['date_duration'],
            ]);
        }
        // dd($tour.$tour->tourInfo);
    
        return redirect(Route('admin_table_tour'));
    }

    public function tableTourAdd(){
        return view('admin-web.table-tour-add');
    }

    public function tableTourAddPost(Tour $tour){

        $data = request()->validate([
            'tour_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'status' => 'required',
            'tour_info' => 'required',
            'tour_img' => 'required|image',
            'city_start' => 'required',
            'date_start' => 'required',
            'date_duration' => 'required',
        ]);   

        $imageTour = request('tour_img')->store('img/tour', 'public');
        
        $tour = new Tour;
        $tour->tour_name = $data['tour_name'];
        $tour->price = $data['price'];
        $tour->quantity = $data['quantity'];
        $tour->status = $data['status'];
        
        $tour->save();
        
        $tourInfo = new TourInfo; 
        $tourInfo->tour_info = $data['tour_info'];
        $tourInfo->city_start = $data['city_start'];
        $tourInfo->date_start = $data['date_start'];
        $tourInfo->date_duration = $data['date_duration'];
        $tourInfo->tour_img = $imageTour;
        $tour->tourInfo()->save($tourInfo);

        // dd($tourInfo);
        
        return redirect(route('admin_table_tour'));
    }


    public function index(){
        $admin = Auth::guard('admin')->user();
        return view('admin-web.index',compact('admin',));
    }
    
    public function getLogin(){
        if (Auth::guard('admin')->check()) {
            return redirect()->route("admin_index");
        }else return view('auth.login-ad');
    }

    public function postLogin(Request $request){
        $admin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }

        if (Auth::guard('admin')->attempt($admin)) {

            // dd($admin['email'].$admin['password']);
            return redirect()->route('admin_index',compact('admin'));
        }
         else {
            // return redirect()->route('admin_index',compact('admin'));

            dd('tài khoản và mật khẩu chưa chính xác'. $request->email. $request->password);
        }

    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }
    

    public function store(){
        $data = request()->validate([
            'another' => '',
            'tour_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'status' => 'required',
            // 'tour_img' => 'required|image',
        ]);
        
        // $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        // $imagePath = request('image')->store('img/tour', 'public'); 

        // tour()->tourInfo()->create([
        //     'another' => '',
        //     'tour_name' => $data['tour_name'],
        //     'price' => $data['price'],
        //     'quantity' => $data['quantity'],
        //     'image'=> $imagePath
        // ]);
        
        // tour()->tourInfo()->create($data);
        \App\Tour::create($data);

        dd(request()->all());
        // return redirect('/user/'. auth()->user()->id);
    }
}
