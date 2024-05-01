<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::truncate();

        // Get the contents of the states.json file
        $statesJson = file_get_contents(database_path('json/states.json'));

        // Decode the JSON string into an associative array
        $states = json_decode($statesJson, true);

        // Insert data in chunks
        foreach (array_chunk($states, 10) as $chunk) {
            State::insert($chunk);
        }
    }
}
