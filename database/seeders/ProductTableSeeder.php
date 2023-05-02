<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            (object) [
                'name' => 'Mack book',
                'description' => 'Mack book',
                'category' => 'Laptop',
                'image' => '1663574852_apple_black_products-wallpaper-1920x1080.jpg',
                'price' => 500.5,
                'rating' => 5.5,
                'count' => 10,
            ],
            (object) [
                'name' => 'Ipad',
                'description' => 'Ipad 10.5 inches',
                'category' => 'tablet',
                'image' => '1663575535_technology.jpg',
                'price' => 1500,
                'rating' => 5.5,
                'count' => 10,
            ],
            (object) [
                'name' => 'flower',
                'description' => 'spring flowers',
                'category' => 'plants',
                'image' => '1663577371_spring_flowers.jpg',
                'price' => 200,
                'rating' => 5.5,
                'count' => 10,
            ],
            (object) [
                'name' => 'Mack book',
                'description' => 'Mack book',
                'category' => 'Laptop',
                'image' => '1663574852_apple_black_products-wallpaper-1920x1080.jpg',
                'price' => 500.5,
                'rating' => 5.5,
                'count' => 10,
            ],
            (object) [
                'name' => 'Ipad',
                'description' => 'Ipad 10.5 inches',
                'category' => 'tablet',
                'image' => '1663575535_technology.jpg',
                'price' => 1500,
                'rating' => 5.5,
                'count' => 10,
            ],
        ];

        foreach($products as $product){
            Product::create([
                'name' => $product->name,
                'description' => $product->description,
                'category' => $product->category,
                'image' => $product->image,
                'price' => $product->price,
                'rating' => $product->rating,
                'count' => $product->count,
            ]);
        }

    }
}
