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
        DB::table('store_categories')->insert([
            'name' => 'Supermercato',
            'icon' => 'shopping-cart'
        ]);

        DB::table('store_categories')->insert(
        [
            'name' => 'Macelleria',
            'icon' => 'drumstick-bite'
        ]);

        DB::table('store_categories')->insert(
        [
            'name' => 'Panificio',
            'icon' => 'bread-slice'
        ]);

        DB::table('store_categories')->insert(
        [
            'name' => 'Pasticceria',
            'icon' => 'candy-cane'
        ]);

        DB::table('store_categories')->insert(
        [
            'name' => 'Casilinghi',
            'icon' => 'home'
        ]);

        DB::table('store_categories')->insert(
        [
            'name' => 'Fruttivendolo',
            'icon' => 'carrot'
        ]);
    }
}
