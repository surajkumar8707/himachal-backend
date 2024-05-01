<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // remove all city data before instering
        Country::truncate();

        // Get the contents of the countries.json file
        $countriesJson = file_get_contents(database_path('json/countries.json'));

        // Decode the JSON string into an associative array
        $countries = json_decode($countriesJson, true);

        // Insert data in chunks
        foreach (array_chunk($countries, 10) as $chunk) {
            Country::insert($chunk);
        }
    }
}
