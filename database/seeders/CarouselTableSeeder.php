<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarouselTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = ['1663577371_spring_flowers.jpg', '1663575535_technology.jpg', '1663574852_apple_black_products-wallpaper-1920x1080.jpg'];

        foreach ($images as $image) {
            Carousel::create([
                'title' => 'Carousel title',
                'description' => 'Carousel description',
                'image' => $image
            ]);
        }
    }
}
