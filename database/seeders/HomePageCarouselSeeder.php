<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomePageCarousel;

class HomePageCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_carousels = array(
            [
                'title' => 'Home Page',
                'image' => "uploads/home_page_carousel/1.jpeg",
                'status' => 1,
            ],

            [
                'title' => 'Home Page',
                'image' => "uploads/home_page_carousel/2.jpeg",
                'status' => 1,
            ],

            [
                'title' => 'Home Page',
                'image' => "uploads/home_page_carousel/3.jpeg",
                'status' => 1,
            ],

            [
                'title' => 'Home Page',
                'image' => "uploads/home_page_carousel/4.jpeg",
                'status' => 1,
            ],

        );

        if(count($default_carousels) > 0){
            foreach($default_carousels as $carousel){
                HomePageCarousel::create(array(
                    'title' => $carousel['title'],
                    'image' => $carousel['image'],
                    'status' => $carousel['status'],
                ));
            }
        }
    }
}
