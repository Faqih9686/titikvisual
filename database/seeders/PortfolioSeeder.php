<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use App\Models\Category;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $categories = Category::all();

        if ($categories->isEmpty()) {
            $categories = Category::factory()->count(3)->create();
        }

        $dummyData = [
            [
                'title' => 'E-Commerce Mobile App',
                'description' => 'Aplikasi mobile untuk belanja online lengkap dengan fitur cart, wishlist dan pembayaran digital.',
                'client' => 'Tokoku',
                'year' => '2023',
                'thumbnail' => 'portfolio/ecommerce.jpg',
                'is_featured' => true,
            ],
            [
                'title' => 'SaaS Dashboard Design',
                'description' => 'Desain UI/UX dashboard modern untuk platform SaaS manajemen keuangan.',
                'client' => 'Fintrack',
                'year' => '2022',
                'thumbnail' => 'portfolio/saas.jpg',
                'is_featured' => true,
            ],
            [
                'title' => 'Brand Identity Package',
                'description' => 'Desain logo, warna dan font untuk brand startup teknologi.',
                'client' => 'NextGen',
                'year' => '2021',
                'thumbnail' => 'portfolio/branding.jpg',
                'is_featured' => false,
            ],
            [
                'title' => 'Website Company Profile',
                'description' => 'Website profil perusahaan untuk PT Abadi Teknologi.',
                'client' => 'Abadi Teknologi',
                'year' => '2024',
                'thumbnail' => 'portfolio/company.jpg',
                'is_featured' => false,
            ],
        ];

        foreach ($dummyData as $data) {
            Portfolio::create([
                'category_id' => $categories->random()->id,
                'title' => $data['title'],
                'slug' => Str::slug($data['title']),
                'description' => $data['description'],
                'client' => $data['client'],
                'year' => $data['year'],
                'thumbnail' => $data['thumbnail'],
                'is_featured' => $data['is_featured'],
            ]);
        }
    }
}
