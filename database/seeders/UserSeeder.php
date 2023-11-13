<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([

            'email' =>'admin@gmail.com',
            // 'password'=> 'password',
            'password' => Hash::make('password'),
            // 'role_id' => 1,
        ]);

        // DB::table('users')->insert([

        //     'email' =>'khady@gmail.com',
        //     'password' => Hash::make('password'),
        //     // 'role_id' => 1,
        // ]);

        // DB::table('users')->insert([

        //     'email' =>'medecin@gmail.com',
        //     'password' => Hash::make('password'),
        //     'role_id' => 2,
        // ]);
    }
}
