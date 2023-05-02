<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\Carousel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public  function run()
    {
        $this->call(CarouselTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'Osama Abdalla',
            'email' => 'osama200949@gmail.com',
            'password' => bcrypt('123456') ,
            'role' => 1,
        ]);
    }

    public function test($id){
        // echo 'test';
        $product = DB::table('products')->where('id', $id)->get();
        echo $product;
        
    }

}
