<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
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
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'email' => 'notadmin@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'email' => 'isadmin@gmail.com',
                'password' => bcrypt('12345'),
            ],
        ];
        DB::table('admin')->insert($data);
    }
}
