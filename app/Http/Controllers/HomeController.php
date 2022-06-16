<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $tour = DB::table('tour')
        ->join('tour_info', 'tour.id', '=', 'tour_info.tour_id')
        ->skip(0)->take(4)->get();
        
        $tours = DB::table('tour')->join('tour_info', 'tour.id', '=', 'tour_info.tour_id')
        // ->orderBy('create_at', 'DESC')
        ->paginate(3);
        // $data = json_decode($tour);

        return view('index', compact(
            'tour',
            'tours',
        ));
        // dd($tours);
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect(route('home'));
    }
}
