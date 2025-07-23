<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ServiceSeeder::class,
            PortfolioSeeder::class,
            TestimoniSeeder::class,
            PackageSeeder::class,
            TeamSeeder::class,
        ]);
    }
}
