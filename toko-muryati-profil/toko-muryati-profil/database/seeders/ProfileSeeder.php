<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile; // Ensure Profile model is imported
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::truncate(); // Clears the table for a fresh seed

        Profile::create([
            'store_name'        => 'Toko Muryati',
            'address'           => 'Jl. Kenangan No. 123, Kota Bahagia',
            'phone_number'      => '081234567890',
            'email'             => 'info@tokomuryati.com',
            'description'       => 'Toko Muryati menyediakan berbagai kebutuhan pokok dan sehari-hari dengan kualitas terbaik dan harga terjangkau.',
            'logo_path'         => null,
            'operating_hours'   => 'Senin - Sabtu: 08:00 - 20:00, Minggu: Tutup',
            'google_maps_link'  => 'https://maps.google.com/?q=TokoMuryatiBahagia',
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
