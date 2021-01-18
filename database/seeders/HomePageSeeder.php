<?php

namespace Database\Seeders;

use App\Models\HomePage;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomePage::create([
            'youtube_url' => 'https://www.youtube.com/embed/NpZgAtCTjMA?start=15',
            'profile_section' => 'FIK-Laboratorium UPN Veteran Jakarta|Fakultas Ilmu Komputer UPN Veteran Jakarta memiliki fasilitas berupa laboratorium komputer dan laboratorium riset.'
        ]);
    }
}
