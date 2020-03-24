<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(['id' => 1, 'name' => 'Piemonte', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 2, 'name' => 'Valle D\'Aosta', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 7, 'name' => 'Liguria', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 3, 'name' => 'Lombardia', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 4, 'name' => 'Trentino Alto Adige', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 5, 'name' => 'Veneto', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 6, 'name' => 'Friuli Venezia Giulia', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 8, 'name' => 'Emilia Romagna', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 11, 'name' => 'Marche', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 9, 'name' => 'Toscana', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 10, 'name' => 'Umbria', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 12, 'name' => 'Lazio', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 15, 'name' => 'Campania', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 13, 'name' => 'Abruzzo', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 14, 'name' => 'Molise', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 16, 'name' => 'Puglia', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 17, 'name' => 'Basilicata', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 18, 'name' => 'Calabria', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 19, 'name' => 'Sicilia', 'country' => 'IT']);
        DB::table('regions')->insert(['id' => 20, 'name' => 'Sardegna', 'country' => 'IT']);
    }
}
