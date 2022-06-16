<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class payment extends Seeder
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
                'user_id' => '3',
                'price' => '4000000',
                'tour_id' => '4',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => '3',
                'price' => '3000000',
                'tour_id' => '3',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => '2',
                'price' => '3000000',
                'tour_id' => '3',
                'created_at' => Carbon::now(),
            ],
        ];
        DB::table('payment')->insert($data);
    }
}
