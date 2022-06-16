<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteTour extends Model
{
    public function userFavorite(){
        return $this->belongsToMany(User::class);
    }

    public function userFavoriteInfo(){
        return $this->belongsTo(Tour::class);
    }

    protected $table = 'favorite_tour';

}
