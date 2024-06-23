<?php

namespace Database\Seeders;

use App\Models\SocialMediaLink;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialMediaLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        SocialMediaLink::truncate();

        // Seed new data
        SocialMediaLink::create([
            'youTube' => '',
            'instagram' => 'https://www.instagram.com/hoteltrehans?igsh=ZTk0bmpybmI1bWx5&utm_source=qr',
            'facebook' => 'https://www.facebook.com/HotelTrehans2110?mibextid=LQQJ4d',
            'linkedin' => '',
            'twitter' => '',
        ]);
    }
}
