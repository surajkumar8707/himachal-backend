<?php

namespace Database\Seeders;

use App\Models\PefectTourPackages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PefectTourPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Fascinating Uttarakhand Honeymoon Package',
                'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                'images' => 'assets/frontend/img/packages/package1.jpg',
                'price' => 20000,
                'duration' => '5 Nights/6 Days',
                'itinerary' => 'Itinerary for Package 1',
                'accommodations' => 'Accommodations for Package 1',
                'meals' => 'Meals for Package 1',
                'transportation' => 'Transportation for Package 1',
                'tour_guides' => 'Tour guides for Package 1',
                'status' => 1,
            ],
            [
                'name' => 'Jim Corbett Wilderness Tour Package',
                'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                'images' => 'assets/frontend/img/packages/package2.jpg',
                'price' => 5250,
                'duration' => '1 Night/2 Days',
                'itinerary' => 'Itinerary for Package 2',
                'accommodations' => 'Accommodations for Package 2',
                'meals' => 'Meals for Package 2',
                'transportation' => 'Transportation for Package 2',
                'tour_guides' => 'Tour guides for Package 2',
                'status' => 1,
            ],
            [
                'name' => 'An Adventurous Family Trip To Jim Corbett National Park',
                'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                'images' => 'assets/frontend/img/packages/package3.jpg',
                'price' => 7219,
                'duration' => '1 Night/2 Days',
                'itinerary' => 'Itinerary for Package 3',
                'accommodations' => 'Accommodations for Package 3',
                'meals' => 'Meals for Package 3',
                'transportation' => 'Transportation for Package 3',
                'tour_guides' => 'Tour guides for Package 3',
                'status' => 1,
            ],
            [
                'name' => 'Discover Our Exquisite 5 Nights 6 Days Mussoorie Honeymoon Tour Packages',
                'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                'images' => 'assets/frontend/img/packages/package4.jpg',
                'price' => 22000,
                'duration' => '5 Nights/6 Days',
                'itinerary' => 'Itinerary for Package 4',
                'accommodations' => 'Accommodations for Package 4',
                'meals' => 'Meals for Package 4',
                'transportation' => 'Transportation for Package 4',
                'tour_guides' => 'Tour guides for Package 4',
                'status' => 1,
            ],
            [
                'name' => 'Exciting Jim Corbett National Park Tour Package',
                'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                'images' => 'assets/frontend/img/packages/package5.jpg',
                'price' => 5050,
                'duration' => '1 Night/2 Days',
                'itinerary' => 'Itinerary for Package 5',
                'accommodations' => 'Accommodations for Package 5',
                'meals' => 'Meals for Package 5',
                'transportation' => 'Transportation for Package 5',
                'tour_guides' => 'Tour guides for Package 5',
                'status' => 1,
            ],
            [
                'name' => 'Best Selling Jim Corbett Packages For A Refreshing Getaway',
                'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                'images' => 'assets/frontend/img/packages/package6.jpg',
                'price' => 12900,
                'duration' => '2 Nights/3 Days',
                'itinerary' => 'Itinerary for Package 6',
                'accommodations' => 'Accommodations for Package 6',
                'meals' => 'Meals for Package 6',
                'transportation' => 'Transportation for Package 6',
                'tour_guides' => 'Tour guides for Package 6',
                'status' => 1,
            ],
            [
                'name' => 'Delightful Uttarakhand Family Tour Package',
                'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                'images' => 'assets/frontend/img/packages/package7.jpg',
                'price' => 40950,
                'duration' => '10 Nights/11 Days',
                'itinerary' => 'Itinerary for Package 7',
                'accommodations' => 'Accommodations for Package 7',
                'meals' => 'Meals for Package 7',
                'transportation' => 'Transportation for Package 7',
                'tour_guides' => 'Tour guides for Package 7',
                'status' => 1,
            ],
            // Add more packages as needed
        ];

        foreach ($packages as $package) {
            PefectTourPackages::create($package);
        }
    }
}
