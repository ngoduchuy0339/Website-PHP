<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class tour_info extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'tour_id' => '1',	
                'tour_info' => 'Tour Đà Nẵng',	
                'tour_img' => 'img/tour/tour_1.jpg',	
                'city_start' => 'Đà Nẵng',
                'date_start' => Carbon::parse('2020-01-01'),
                'date_duration' => '6',	
            ],
            [
                'tour_id' => '2',	
                'tour_info' => 'Tour xuất phát ở Đà Nẵng',	
                'tour_img' => 'img/tour/tour_2.jpg',	
                'city_start' => 'Đà Nẵng',
                'date_start' => Carbon::parse('2020-01-01'),
                'date_duration' => 6,	
            ],
            [
                'tour_id' => '3',	
                'tour_info' => 'Tour xuất phát ở Huế',	
                'tour_img' => 'img/tour/tour_3.jpg',	
                'city_start' => 'Huế',
                'date_start' => Carbon::parse('2020-01-01'),
                'date_duration' => 6,	
            ],
            [
                'tour_id' => '4',	
                'tour_info' => 'Tour xuất phát ở Đà Nẵng',	
                'tour_img' => 'img/tour/tour_4.jpg',	
                'city_start' => 'Đà Nẵng',
                'date_start' => Carbon::parse('2020-01-01'),
                'date_duration' => 6,	
            ],
            [
                'tour_id' => '5',	
                'tour_info' => 'Tour xuất phát ở Đà Nẵng',	
                'tour_img' => 'img/tour/tour_5.jpg',	
                'city_start' => 'Đà Nẵng',
                'date_start' => Carbon::parse('2020-01-01'),
                'date_duration' => 6,	
            ],
            [
                'tour_id' => '6',	
                'tour_info' => 'DU LỊCH HÀ NỘI',	
                'tour_img' => 'img/tour/tour_6.jpg',	
                'city_start' => 'Đà Nẵng',
                'date_start' => Carbon::parse('2020-01-01'),
                'date_duration' => 6,	
            ],
            [
                'tour_id' => '7',	
                'tour_info' => 'TOUR CÙ LAO CHÀM',	
                'tour_img' => 'img/tour/tour_7.jpg',	
                'city_start' => 'Đà Nẵng',
                'date_start' => Carbon::parse('2020-01-01'),
                'date_duration' => 6,	
            ],
            [
                'tour_id' => '8',	
                'tour_info' => 'DU LỊCH BÀ NÀ',	
                'tour_img' => 'img/tour/tour_8.jpg',	
                'city_start' => 'Huế',
                'date_start' => Carbon::parse('2020-01-01'),
                'date_duration' => 6,	
            ],
        ];
        DB::table('tour_info')->insert($data);
    }
}
