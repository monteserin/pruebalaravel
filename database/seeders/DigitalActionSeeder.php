<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DigitalActions;

class DigitalActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DigitalActions::create(
            [
                'name' => 'Facebook',
                'logo' => 'facebook.png'
            ]
        );

        DigitalActions::create(
            [
                'name' => 'Ecommerce',
                'logo' => 'shopping-cart.png'
            ]
        );

        DigitalActions::create(
            [
                'name' => 'Página web',
                'logo' => 'browser.png'
            ]
        );
    }
}
