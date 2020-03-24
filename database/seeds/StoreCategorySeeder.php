<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_categories')->delete();

        DB::table('store_categories')->insert([
            'name' => 'Supermercato',
            'icon' => 'shopping-cart'
        ]);

        DB::table('store_categories')->insert(
            [
                'name' => 'Macelleria',
                'icon' => 'drumstick-bite'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Panificio',
                'icon' => 'bread-slice'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Pasticceria',
                'icon' => 'candy-cane'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Casilinghi',
                'icon' => 'home'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Fruttivendolo',
                'icon' => 'carrot'
            ]
        );

        DB::table('store_categories')->insert([
            'name' => 'Ristorante',
            'icon' => 'utensils'
        ]);

        DB::table('store_categories')->insert([
            'name' => 'Pizzeria',
            'icon' => 'pizza-slice'
        ]);

        DB::table('store_categories')->insert(
            [
                'name' => 'Pub',
                'icon' => 'beer'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Gelateria',
                'icon' => 'ice-cream'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Salumeria',
                'icon' => 'bacon'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Latteria',
                'icon' => 'cheese'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Copisteria',
                'icon' => 'copy'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Paninoteca-Hamburgeria',
                'icon' => 'hamburger'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Altro',
                'icon' => 'building'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Pescheria',
                'icon' => 'fish'
            ]
        );

        DB::table('store_categories')->insert(
            [
                'name' => 'Prodotti naturali',
                'icon' => 'leaf'
            ]
        );
    }
}
