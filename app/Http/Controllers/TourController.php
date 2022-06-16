<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Tour;
use App\TourInfo;
use DB;

class TourController extends Controller
{       
    public function tourInfo(Tour $tour){

        return view('tour-info', compact('tour'));
    }
    
    public function find(){
        return view('find-tour');
    }

    public function findTour(Request $request)
    {   
        $search_string = $request->search;
        $result = DB::table('tour')
        ->join('tour_info', 'tour.id', '=', 'tour_info.tour_id')
        ->where('tour_name','like', "%{$search_string}%")
        ->get();
        // ->paginate(3);
        // dd($result);
        return view('find-tour',compact('result'));

    }

    public function tourBooking(User $user)
    {
        $data = request()->validate([
            // 'user_id' => 'required',
            // 'price' => 'required',
            'tour_id' => 'required',
        ]);   

        // $payment = new Payment;
        // $payment->user_id = $data['user_id'];
        // $payment->price = $data['price'];
        // $payment->tour_id = $data['tour_id'];
        dd($data['tour_id']);

        // $payment->save();
        // return redirect(route('admin_table_tour'));

    }
        
}

    


