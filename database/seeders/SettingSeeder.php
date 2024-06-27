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
            'email' => 'Trehanhotel@gmail.com',
            'whatsapp' => '+91 9459287605',
            'contact' => '+91 9459287605',
            'address' => 'VPO – Sarahan Bushahr, TEH – Rampur, Distt – Shimla, Himachal Pradesh, Pin – 172102',
            'header_image' => 'assets/images/header-logo.png',
        ]);
    }
}
