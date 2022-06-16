<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function profileUser(User $user){

        // $payment = DB::talbe('payment')
        // ->join('tour', 'payment.tour_id', '=', 'tour.id')
        // ->join('user', 'payment.user_id', '=', 'user.id')
        // ->get();
        // dd($payment);
        

        return view('user.user-profile', compact('user'));
    }

    public function edit(User $user){
        // $this->authorize('update', $user);

        return view('user.user-edit', compact('user'));
    }
    
    public function update(User $user){

        $data = request()->validate([
            'name' => 'required',
            'avatar' => 'required|image',

        ]);
        $imagePath = request('avatar')->store('img/user', 'public');

        $user->update([
            'name' => $data['name'],
            'avatar' => $imagePath,
        ]);
        
        // dd($imagePath);

        return redirect(Route('profile_user', $user->id));
    }
}
