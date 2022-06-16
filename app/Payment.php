<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';

    // protected $fillable  = [
    //     'id','tour_name','price','quantity','status',
    // ];
    
    public function userPayment(){
        return $this->belongsTo(User::class);
    }


}
