<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';
    protected $guarded = [];

    protected $fillable  = [
        'id','tour_name','price','quantity','status',
    ];

    public function tourInfo(){
        return $this->hasOne(TourInfo::class);
    }

    public function favoriteInfo(){
        return $this->hasOne(FavoriteTour::class);
    }

}
