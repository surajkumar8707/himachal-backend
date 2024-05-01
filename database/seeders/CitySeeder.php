<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::truncate();

        // Get the contents of the cities.json file
        $citiesJson = file_get_contents(database_path('json/cities.json'));

        // Decode the JSON string into an associative array
        $cities = json_decode($citiesJson, true);

        // Insert data in chunks
        foreach (array_chunk($cities, 10) as $chunk) {
            \App\Models\City::insert($chunk);
        }
    }
}
