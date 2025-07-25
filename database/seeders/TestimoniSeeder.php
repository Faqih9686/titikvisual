<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimoni;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimoni::insert([
            'name' => 'Mas Amba',
            'position' => 'CEO',
            'comment' => 'bagus',
            'rating' => 5,
        ],
        [
            'name' => 'Mas Amba',
            'position' => 'CEO',
            'comment' => 'bagus',
            'rating' => 5,
        ],
        [
            'name' => 'Mas Amba',
            'position' => 'CEO',
            'comment' => 'bagus',
            'rating' => 5,
        ],[
            'name' => 'Mas Amba',
            'position' => 'CEO',
            'comment' => 'bagus',
            'rating' => 5,
        ]);
    }
}
