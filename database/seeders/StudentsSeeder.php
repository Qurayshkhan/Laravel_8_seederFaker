<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('seedstable')->insert([
        //     // 'name'=>'Hassan',
        //     // 'email'=>'Hassan@gmail.com',
        //     // 'password'=>Hash::make('11223'), 
        //     'name'=>Str::random(10),
        //     'email'=>Str::random(10),
        //     'password'=>Hash::make(Str::random(10)), 

        // ]);
        foreach(range(1,10) as $value){
DB::table('seedstable')->insert([
    'name'=>Str::random(10),
    'email'=>Str::random(10),
    'password'=>Hash::make(Str::random(10)), 
]);
        }
    }
}
