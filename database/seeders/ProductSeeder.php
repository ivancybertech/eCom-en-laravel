<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('products')->insert([
            [
            'name'=>'LG Mobile',
            'price'=>'200',
            'category'=>'Mobile',
            'description'=>'A smartphone with 4gb RAM and much more storage',
            'gallery'=>'https://www.coolmuster.com/uploads/image/20200507/lg-mobile-switch-not-working.jpg',
            ],  
            [
            'name'=>'Oppo Mobile',
            'price'=>'150',
            'category'=>'Mobile',
            'description'=>'Brighter Camera',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/51dcbt2%2B-JL._SL1000_.jpg',
            ],  
            [
            'name'=>'Panasonic TV',
            'price'=>'400',
            'category'=>'TV',
            'description'=>'A smart TV',
            'gallery'=>'https://www.sentinelassam.com/wp-content/uploads/2018/06/pannna-1.jpg',
            ],  
            [
            'name'=>'Sony',
            'price'=>'500',
            'category'=>'TV',
            'description'=>'Durable TV',
            'gallery'=>'https://www.sony.com.ph/image/bc620636d89ba27a1e8ec9fda59cd66a?fmt=pjpeg&bgcolor=FFFFFF&bgc=FFFFFF&wid=2515&hei=1320',
            ],  
            [
            'name'=>'LG Fridge',
            'price'=>'500',
            'category'=>'Fridge',
            'description'=>'A frige with much more feature',
            'gallery'=>'https://www.lg.com/ph/images/refrigerators/md06011137/md06011137-260x260.jpg',
            ]  
            
           ]);
    }
}
