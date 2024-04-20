<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomTypes = [
            ['name' => 'Standard', 'season_rate' => 1200, 'image' => 'assets/images/room_type/standard.jpg', 'display_order' => 1],
            ['name' => 'Delux', 'season_rate' => 1500, 'image' => 'assets/images/room_type/standard.jpg', 'display_order' => 2],
            ['name' => 'Super Delux', 'season_rate' => 1800, 'image' => 'assets/images/room_type/standard.jpg', 'display_order' => 3],
            ['name' => 'Family Room', 'season_rate' => 2200, 'image' => 'assets/images/room_type/standard.jpg', 'display_order' => 4],
        ];

        foreach ($roomTypes as $key => $roomType) {
            RoomType::create($roomType);
        }
    }
}
