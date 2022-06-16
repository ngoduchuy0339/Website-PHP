<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourInfo extends Model
{
    public $timestamps = false;
    protected $table = 'tour_info';

    protected $fillable  = [
        'tour_id','tour_info','tour_img','city_start','date_start','date_duration',
    ];

    public function tour(){
        return $this->belongsTo(Tour::class);
    }
    
}
