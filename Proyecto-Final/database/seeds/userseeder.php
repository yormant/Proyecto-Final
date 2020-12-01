<?php

use Illuminate\Database\Seeder;
use App\User;
use App\categories;
use Illuminate\Support\Facades\Hash;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name'=>"Casimiro",
            'email'=>"Casimiro@admin.com",
            'email_verified_at'=>"2020-05-24 00:33:12",
            'password'=>Hash::make('Casimiro'),
        ]);

      
        DB::table('users')->insert([
            'name'=>"Stiven",
            'email'=>"Stiven@admin.com",
            'email_verified_at'=>"2020-05-23 00:39:12",
            'password'=>Hash::make('yormitan'),
        ]);

        DB::table('categories')->insert([
            'name'=>"Elegant",
            'description'=>"Those that are used for 
            business and meetings.",
            'priority'=>"5",
        ]);
        DB::table('categories')->insert([
            'name'=>"Casual",
            'description'=>"T
            For everyday life.",
            'priority'=>"5",
        ]);
        DB::table('products')->insert([
            'bag_name'=>"Morral Negro",
            'bag_description'=>"Color neutral negro $20000",
            'bag_material'=>"Sintético",
            'filename'=>"php69F4.tmp.jpg",
            'mime'=>"image/jpeg",
            'original_filename'=>"1.jpg",
            'id_category'=>"1",
          
        ]);
        DB::table('products')->insert([
            'bag_name'=>"Morral Blanco",
            'bag_description'=>"Color neutral Blanco $20000",
            'bag_material'=>"Sintético",
            'filename'=>"phpB0DD.tmp.jpg",
            'mime'=>"image/jpeg",
            'original_filename'=>"2.jpg",
            'id_category'=>"1",
          
        ]);
        DB::table('products')->insert([
            'bag_name'=>"Morral Amarillo",
            'bag_description'=>"Perfecto para a los que les gusta resaltar  $20000",
            'bag_material'=>"Sintético",
            'filename'=>"php6E1E.tmp.jpg",
            'mime'=>"image/jpeg",
            'original_filename'=>"1.jpg",
            'id_category'=>"2",
          
        ]);
        DB::table('products')->insert([
            'bag_name'=>"Morral Rosa",
            'bag_description'=>"Para aquellas que aman ser femeninas  $20000",
            'bag_material'=>"Sintético",
            'filename'=>"php6773.tmp.jpg",
            'mime'=>"image/jpeg",
            'original_filename'=>"2.jpg",
            'id_category'=>"2",
          
        ]);
    }
}
