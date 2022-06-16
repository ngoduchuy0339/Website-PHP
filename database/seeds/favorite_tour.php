<?php

use Illuminate\Database\Seeder;

class favorite_tour extends Seeder
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
                'tour_id' => '4',
            ],
            [
                'user_id' => '3',
                'tour_id' => '3',
            ],
        ];
        DB::table('favorite_tour')->insert($data);
    }
}
