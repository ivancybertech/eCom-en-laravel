<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([[
            'name'=>'ivan filomene',
            'email'=>'ivan@test.com',
            'password'=>Hash::make('1234')],
            [
            'name'=>'glen',
            'email'=>'glen@test.com',
            'password'=>Hash::make('1234')
        ]]);
    }
}
