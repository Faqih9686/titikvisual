<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::insert([
            [
                'name' => 'Ahmad Fauzi',
                'position' => 'UI/UX Designer',
                'photo' => 'team/ahmad.jpg', // simpan gambar di storage/app/public/team
                'description' => 'Ahmad memiliki pengalaman 5 tahun dalam desain UI/UX, berfokus pada pengalaman pengguna yang intuitif.',
                'social_links' => json_encode([
                    'linkedin' => 'https://linkedin.com/in/ahmadfauzi',
                    'instagram' => 'https://instagram.com/ahmadfauzi'
                ]),
            ],
            [
                'name' => 'Siti Rahma',
                'position' => 'Branding Specialist',
                'photo' => 'team/siti.jpg',
                'description' => 'Siti membantu perusahaan membangun identitas brand yang kuat dan menarik.',
                'social_links' => json_encode([
                    'linkedin' => 'https://linkedin.com/in/sitirahma',
                    'instagram' => 'https://instagram.com/sitirahma'
                ]),
            ],
            [
                'name' => 'Budi Santoso',
                'position' => 'Full Stack Developer',
                'photo' => 'team/budi.jpg',
                'description' => 'Budi mengembangkan website dengan performa tinggi dan fitur sesuai kebutuhan klien.',
                'social_links' => json_encode([
                    'linkedin' => 'https://linkedin.com/in/budisantoso',
                    'instagram' => 'https://instagram.com/budisantoso'
                ]),
            ]
        ]);
    }
}
