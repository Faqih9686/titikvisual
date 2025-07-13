<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pack;
use App\Models\Service;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = Service::where('slug', 'ui-ux-design')->first(); // sesuaikan slug

        if (!$service) {
            $service = Service::create([
                'title' => 'UI/UX Design',
                'slug'  => 'ui-ux-design',
                'description' => 'Layanan desain UI/UX profesional untuk kebutuhan digital Anda.',
            ]);
        }

        $packages = [
            [
                'name' => 'Paket Basic',
                'price' => 2000000,
                'features' => [
                    '3 Screen Design',
                    '1x Revisi',
                    'Handoff ke Developer',
                ]
            ],
            [
                'name' => 'Paket Pro',
                'price' => 5000000,
                'features' => [
                    '8 Screen Design',
                    '3x Revisi',
                    'Figma Source File',
                    'Prototype Interaktif',
                ]
            ],
            [
                'name' => 'Paket Premium',
                'price' => 10000000,
                'features' => [
                    'Unlimited Screen',
                    'Unlimited Revisi',
                    'UX Research',
                    'Wireframe + High Fidelity',
                    'Handoff ke Developer',
                ]
            ],
        ];

        foreach ($packages as $data) {
            Pack::create([
                'service_id' => $service->id,
                'name'       => $data['name'],
                'price'      => $data['price'],
                'features'   => $data['features'],
            ]);
        }
    }
}
