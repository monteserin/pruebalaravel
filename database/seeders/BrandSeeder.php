<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brands;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Brands::truncate();
        Brands::create(
            [
                'name' => 'F.C. Barcelona',
                'logo' => 'fcbarcelona-square.png'
            ]
        );

        Brands::create(
            [
                'name' => 'Real Madrid',
                'logo' => 'realmadrid-square.png'
            ]
        );

        Brands::create(
            [
                'name' => 'Kantox',
                'logo' => 'kantox-square.png'
            ]
        );
    }
}
