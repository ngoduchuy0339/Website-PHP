<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(admin::class);
        $this->call(favorite_tour::class);
        $this->call(payment::class);
        $this->call(tour_info::class);
        $this->call(tour::class);
        $this->call(user::class);
    }

    // public function run(){
    //     $files_arr = scandir( dirname(__FILE__) ); //store filenames into $files_array
    //     foreach ($files as $key => $file){
    //         if ($file !== 'DatabaseSeeder.php' && $file[0] !== "." ){
    //             $this->call( explode('.', $file)[0] );
    //         }
    //     }
    // }
}
