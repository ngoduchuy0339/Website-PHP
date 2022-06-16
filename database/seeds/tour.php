<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class tour extends Seeder
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
                'tour_name' => 'DU LỊCH HẠ LONG',
                'price' => '3000000',
                'quantity' => '5',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'tour_name' => 'DU LỊCH ĐÀ NẴNG',
                'price' => '2500000',
                'quantity' => '5',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tour_name' => 'DU LỊCH HẠ LONG',
                'price' => '3000000',
                'quantity' => '5',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tour_name' => 'DU LỊCH SAPA',
                'price' => '4000000',
                'quantity' => '5',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tour_name' => 'BIỂN HẠ LONG',
                'price' => '5000000',
                'quantity' => '3',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tour_name' => 'DU LỊCH HÀ NỘI',
                'price' => '3500000',
                'quantity' => '5',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tour_name' => 'CÙ LAO CHÀM',
                'price' => '5500000',
                'quantity' => '5',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tour_name' => 'DU LỊCH BÀ NÀ',
                'price' => '2500000',
                'quantity' => '5',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('tour')->insert($data);
    }
}
