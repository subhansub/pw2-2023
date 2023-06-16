<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movie' => 'Naruto',
            'user' => 'Jumharis',
            'rating' => 8.5,
            'comment' => 'Ngak pernah bosan nontonya',
            'tanggal' => 29-05-2023,
        ]);

        Review::create([
            'movie' => 'Pengabdi setan',
            'user' => 'Furkan',
            'rating' => 7.2,
            'comment' => 'Filmn cukup seram',
            'tanggal' => 9-06-2023,
        ]);

        Review::create([
            'movie' => 'Hangout',
            'user' => 'Fathullah',
            'rating' => 8.5,
            'comment' => 'Komedinya dapat horornyapun dapat',
            'tanggal' => 11-06-2023,
        ]);

        Review::create([
            'movie' => 'OUR BLUES',
            'user' => 'Dudin',
            'rating' => 9.0,
            'comment' => 'filmnya bagus buat nonton besama keluarga',
            'tanggal' => 30-05-2023,
        ]);

        Review::create([
            'movie' => 'Killers',
            'user' => 'ahmadin',
            'rating' => 6.0,
            'comment' => 'seru nontonya',
            'tanggal' => 8-06-2023,
        ]);
    }
}
