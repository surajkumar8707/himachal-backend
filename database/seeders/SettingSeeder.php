<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'Hotel Trehan',
            'email' => 'hoteltrehan@gmail.com',
            'whatsapp' => '+91 8707633860',
            'contact' => '+91 8707633860',
            'address' => 'Lucknow, India',
            'header_image' => 'assets/images/header-logo.png',
        ]);
    }
}
