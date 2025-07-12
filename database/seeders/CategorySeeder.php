<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'UI/UX Design',
            'icon' => 'bx bx-layout',
            'description' => 'Desain antarmuka aplikasi dan website.',
            'is_main' => true,
        ]);
        Category::create([
            'name' => 'Web Development',
            'icon' => 'bx bx-code-alt',
            'description' => 'Pembuatan website responsive dan dinamis.',
            'is_main' => true,
        ]);
    }
}
