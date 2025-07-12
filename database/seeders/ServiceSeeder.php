<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Category;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catId = Category::first()->id;
    Service::create([
        'category_id' => $catId,
        'name' => 'Website Personal',
        'slug' => 'website-personal',
        'description' => 'Website profil untuk personal branding.',
        'thumbnail' => 'service1.jpg',
        'price' => 750000,
        'features' => json_encode([
            'Desain responsif',
            'Kontak Form',
            'Portofolio',
        ]),
        'is_featured' => true,
    ]);
    }
}
