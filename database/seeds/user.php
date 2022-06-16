<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class user extends Seeder
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
                'name' => 'Nguyễn Văn A',
                'avatar' => 'img/user/default-profile.png',       
                'user' => 'nguyenvan2',
                'email' => 'nhan@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Nguyễn Văn A',
                'avatar' => 'img/user/default-profile.png',   
                'user' => 'nguyenvan',
                'email' => 'nhanmin@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Nguyễn Văn A',
                'avatar' => 'img/user/default-profile.png', 
                'user' => 'nguyenvan3',
                'email' => 'nhanin@gmail.com',
                'password' => bcrypt('12345'),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
