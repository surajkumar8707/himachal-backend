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
                'title' => 'Home Page 1',
                'image' => "uploads/home_page_carousel/1.jpg",
                'status' => 1,
                'is_default' => 1,
                'display_order' => 1,
            ],

            [
                'title' => 'Home Page 2',
                'image' => "uploads/home_page_carousel/2.jpeg",
                'status' => 1,
                'is_default' => 1,
                'display_order' => 2,
            ],

            [
                'title' => 'Home Page 3',
                'image' => "uploads/home_page_carousel/3.jpeg",
                'status' => 1,
                'is_default' => 1,
                'display_order' => 3,
            ],

            [
                'title' => 'Home Page 4',
                'image' => "uploads/home_page_carousel/4.jpeg",
                'status' => 1,
                'is_default' => 1,
                'display_order' => 4,
            ],

        );

        if(count($default_carousels) > 0){
            foreach($default_carousels as $carousel){
                HomePageCarousel::create($carousel);
            }
        }
    }
}
