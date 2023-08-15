<?php

namespace Database\Seeders;

use App\Models\BrandsDigitalActions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsDigitalActionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BrandsDigitalActions::create(
            [
                'brand_id' => 1,
                'digitalAction_id' => 3,
                'url' => 'https://store.fcbarcelona.com/es'
            ],
        );
        BrandsDigitalActions::create(
            [
                'brand_id' => 2,
                'digitalAction_id' => 3,
                'url' => 'https://shop.realmadrid.com/'
            ]
        );

        BrandsDigitalActions::create(
            [
                'brand_id' => 1,
                'digitalAction_id' => 3,
                'url' => 'https://www.fcbarcelona.es/es/'
            ]
        );

        BrandsDigitalActions::create(
            [
                'brand_id' => 2,
                'digitalAction_id' => 3,
                'url' => 'https://www.realmadrid.com/'
            ]
        );


        BrandsDigitalActions::create(
            [
                'brand_id' => 3,
                'digitalAction_id' => 3,
                'url' => 'https://www.kantox.com/es/'
            ]
        );
    }
}
