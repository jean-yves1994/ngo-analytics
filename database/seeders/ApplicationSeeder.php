<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

       /*  for($i=0;$i<4;$i++){
            DB::table('applications')->insert([
                'ngo_name'=>Str::random(10),
                'email'=>Str::random(10).'@gmail.com',
                'phone_number'=>random_int(12342342,324234234),
                'budget'=>random_int(10000000,50000000),
                'duration'=>random_int(1,48),
                'location'=>Str::random(10),
                'document'=>Str::random(10),
                'status'=>'accepted',
                'user_id'=>2,
            ]);
        } */
       
    }
}

