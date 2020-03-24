<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(['name' => 'Torino',  'code' => 'TO', 'region_id' => 1]);
        DB::table('provinces')->insert(['name' => 'Vercelli',  'code' => 'VC', 'region_id' => 1]);
        DB::table('provinces')->insert(['name' => 'Novara',  'code' => 'NO', 'region_id' => 1]);
        DB::table('provinces')->insert(['name' => 'Cuneo',  'code' => 'CN', 'region_id' => 1]);
        DB::table('provinces')->insert(['name' => 'Asti',  'code' => 'AT', 'region_id' => 1]);
        DB::table('provinces')->insert(['name' => 'Alessandria',  'code' => 'AL', 'region_id' => 1]);
        DB::table('provinces')->insert(['name' => 'Aosta - Aoste',  'code' => 'AO', 'region_id' => 2]);
        DB::table('provinces')->insert(['name' => 'Imperia',  'code' => 'IM', 'region_id' => 7]);
        DB::table('provinces')->insert(['name' => 'Savona',  'code' => 'SV', 'region_id' => 7]);
        DB::table('provinces')->insert(['name' => 'Genova',  'code' => 'GE', 'region_id' => 7]);
        DB::table('provinces')->insert(['name' => 'La Spezia',  'code' => 'SP', 'region_id' => 7]);
        DB::table('provinces')->insert(['name' => 'Varese',  'code' => 'VA', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Como',  'code' => 'CO', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Sondrio',  'code' => 'SO', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Milano',  'code' => 'MI', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Bergamo',  'code' => 'BG', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Brescia',  'code' => 'BS', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Pavia',  'code' => 'PV', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Cremona',  'code' => 'CR', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Mantova',  'code' => 'MN', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Bolzano - Bozen',  'code' => 'BZ', 'region_id' => 4]);
        DB::table('provinces')->insert(['name' => 'Trento',  'code' => 'TN', 'region_id' => 4]);
        DB::table('provinces')->insert(['name' => 'Verona',  'code' => 'VR', 'region_id' => 5]);
        DB::table('provinces')->insert(['name' => 'Vicenza',  'code' => 'VI', 'region_id' => 5]);
        DB::table('provinces')->insert(['name' => 'Belluno',  'code' => 'BL', 'region_id' => 5]);
        DB::table('provinces')->insert(['name' => 'Treviso',  'code' => 'TV', 'region_id' => 5]);
        DB::table('provinces')->insert(['name' => 'Venezia',  'code' => 'VE', 'region_id' => 5]);
        DB::table('provinces')->insert(['name' => 'Padova',  'code' => 'PD', 'region_id' => 5]);
        DB::table('provinces')->insert(['name' => 'Rovigo',  'code' => 'RO', 'region_id' => 5]);
        DB::table('provinces')->insert(['name' => 'Udine',  'code' => 'UD', 'region_id' => 6]);
        DB::table('provinces')->insert(['name' => 'Gorizia',  'code' => 'GO', 'region_id' => 6]);
        DB::table('provinces')->insert(['name' => 'Trieste',  'code' => 'TS', 'region_id' => 6]);
        DB::table('provinces')->insert(['name' => 'Piacenza',  'code' => 'PC', 'region_id' => 8]);
        DB::table('provinces')->insert(['name' => 'Parma',  'code' => 'PR', 'region_id' => 8]);
        DB::table('provinces')->insert(['name' => 'Reggio Nell\'Emilia',  'code' => 'RE', 'region_id' => 8]);
        DB::table('provinces')->insert(['name' => 'Modena',  'code' => 'MO', 'region_id' => 8]);
        DB::table('provinces')->insert(['name' => 'Bologna',  'code' => 'BO', 'region_id' => 8]);
        DB::table('provinces')->insert(['name' => 'Ferrara',  'code' => 'FE', 'region_id' => 8]);
        DB::table('provinces')->insert(['name' => 'Ravenna',  'code' => 'RA', 'region_id' => 8]);
        DB::table('provinces')->insert(['name' => 'Forli\'-Cesena',  'code' => 'FC', 'region_id' => 8]);
        DB::table('provinces')->insert(['name' => 'Pesaro E Urbino',  'code' => 'PU', 'region_id' => 11]);
        DB::table('provinces')->insert(['name' => 'Ancona',  'code' => 'AN', 'region_id' => 11]);
        DB::table('provinces')->insert(['name' => 'Macerata',  'code' => 'MC', 'region_id' => 11]);
        DB::table('provinces')->insert(['name' => 'Ascoli Piceno',  'code' => 'AP', 'region_id' => 11]);
        DB::table('provinces')->insert(['name' => 'Massa-Carrara',  'code' => 'MS', 'region_id' => 9]);
        DB::table('provinces')->insert(['name' => 'Lucca',  'code' => 'LU', 'region_id' => 9]);
        DB::table('provinces')->insert(['name' => 'Pistoia',  'code' => 'PT', 'region_id' => 9]);
        DB::table('provinces')->insert(['name' => 'Firenze',  'code' => 'FI', 'region_id' => 9]);
        DB::table('provinces')->insert(['name' => 'Livorno',  'code' => 'LI', 'region_id' => 9]);
        DB::table('provinces')->insert(['name' => 'Pisa',  'code' => 'PI', 'region_id' => 9]);
        DB::table('provinces')->insert(['name' => 'Arezzo',  'code' => 'AR', 'region_id' => 9]);
        DB::table('provinces')->insert(['name' => 'Siena',  'code' => 'SI', 'region_id' => 9]);
        DB::table('provinces')->insert(['name' => 'Grosseto',  'code' => 'GR', 'region_id' => 9]);
        DB::table('provinces')->insert(['name' => 'Perugia',  'code' => 'PG', 'region_id' => 10]);
        DB::table('provinces')->insert(['name' => 'Terni',  'code' => 'TR', 'region_id' => 10]);
        DB::table('provinces')->insert(['name' => 'Viterbo',  'code' => 'VT', 'region_id' => 12]);
        DB::table('provinces')->insert(['name' => 'Rieti',  'code' => 'RI', 'region_id' => 12]);
        DB::table('provinces')->insert(['name' => 'Roma',  'code' => 'RM', 'region_id' => 12]);
        DB::table('provinces')->insert(['name' => 'Latina',  'code' => 'LT', 'region_id' => 12]);
        DB::table('provinces')->insert(['name' => 'Frosinone',  'code' => 'FR', 'region_id' => 12]);
        DB::table('provinces')->insert(['name' => 'Caserta',  'code' => 'CE', 'region_id' => 15]);
        DB::table('provinces')->insert(['name' => 'Benevento',  'code' => 'BN', 'region_id' => 15]);
        DB::table('provinces')->insert(['name' => 'Napoli',  'code' => 'NA', 'region_id' => 15]);
        DB::table('provinces')->insert(['name' => 'Avellino',  'code' => 'AV', 'region_id' => 15]);
        DB::table('provinces')->insert(['name' => 'Salerno',  'code' => 'SA', 'region_id' => 15]);
        DB::table('provinces')->insert(['name' => 'L\'Aquila',  'code' => 'AQ', 'region_id' => 13]);
        DB::table('provinces')->insert(['name' => 'Teramo',  'code' => 'TE', 'region_id' => 13]);
        DB::table('provinces')->insert(['name' => 'Pescara',  'code' => 'PE', 'region_id' => 13]);
        DB::table('provinces')->insert(['name' => 'Chieti',  'code' => 'CH', 'region_id' => 13]);
        DB::table('provinces')->insert(['name' => 'Campobasso',  'code' => 'CB', 'region_id' => 14]);
        DB::table('provinces')->insert(['name' => 'Foggia',  'code' => 'FG', 'region_id' => 16]);
        DB::table('provinces')->insert(['name' => 'Bari',  'code' => 'BA', 'region_id' => 16]);
        DB::table('provinces')->insert(['name' => 'Taranto',  'code' => 'TA', 'region_id' => 16]);
        DB::table('provinces')->insert(['name' => 'Brindisi',  'code' => 'BR', 'region_id' => 16]);
        DB::table('provinces')->insert(['name' => 'Lecce',  'code' => 'LE', 'region_id' => 16]);
        DB::table('provinces')->insert(['name' => 'Potenza',  'code' => 'PZ', 'region_id' => 17]);
        DB::table('provinces')->insert(['name' => 'Matera',  'code' => 'MT', 'region_id' => 17]);
        DB::table('provinces')->insert(['name' => 'Cosenza',  'code' => 'CS', 'region_id' => 18]);
        DB::table('provinces')->insert(['name' => 'Catanzaro',  'code' => 'CZ', 'region_id' => 18]);
        DB::table('provinces')->insert(['name' => 'Reggio Di Calabria',  'code' => 'RC', 'region_id' => 18]);
        DB::table('provinces')->insert(['name' => 'Trapani',  'code' => 'TP', 'region_id' => 19]);
        DB::table('provinces')->insert(['name' => 'Palermo',  'code' => 'PA', 'region_id' => 19]);
        DB::table('provinces')->insert(['name' => 'Messina',  'code' => 'ME', 'region_id' => 19]);
        DB::table('provinces')->insert(['name' => 'Agrigento',  'code' => 'AG', 'region_id' => 19]);
        DB::table('provinces')->insert(['name' => 'Caltanissetta',  'code' => 'CL', 'region_id' => 19]);
        DB::table('provinces')->insert(['name' => 'Enna',  'code' => 'EN', 'region_id' => 19]);
        DB::table('provinces')->insert(['name' => 'Catania',  'code' => 'CT', 'region_id' => 19]);
        DB::table('provinces')->insert(['name' => 'Ragusa',  'code' => 'RG', 'region_id' => 19]);
        DB::table('provinces')->insert(['name' => 'Siracusa',  'code' => 'SR', 'region_id' => 19]);
        DB::table('provinces')->insert(['name' => 'Sassari',  'code' => 'SS', 'region_id' => 20]);
        DB::table('provinces')->insert(['name' => 'Nuoro',  'code' => 'NU', 'region_id' => 20]);
        DB::table('provinces')->insert(['name' => 'Cagliari',  'code' => 'CA', 'region_id' => 20]);
        DB::table('provinces')->insert(['name' => 'Pordenone',  'code' => 'PN', 'region_id' => 6]);
        DB::table('provinces')->insert(['name' => 'Isernia',  'code' => 'IS', 'region_id' => 14]);
        DB::table('provinces')->insert(['name' => 'Oristano',  'code' => 'OR', 'region_id' => 20]);
        DB::table('provinces')->insert(['name' => 'Biella',  'code' => 'BI', 'region_id' => 1]);
        DB::table('provinces')->insert(['name' => 'Lecco',  'code' => 'LC', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Lodi',  'code' => 'LO', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Rimini',  'code' => 'RN', 'region_id' => 8]);
        DB::table('provinces')->insert(['name' => 'Prato',  'code' => 'PO', 'region_id' => 9]);
        DB::table('provinces')->insert(['name' => 'Crotone',  'code' => 'KR', 'region_id' => 18]);
        DB::table('provinces')->insert(['name' => 'Vibo Valentia',  'code' => 'VV', 'region_id' => 18]);
        DB::table('provinces')->insert(['name' => 'Verbano-Cusio-Ossola',  'code' => 'VB', 'region_id' => 1]);
        DB::table('provinces')->insert(['name' => 'Monza E Della Brianza',  'code' => 'MB', 'region_id' => 3]);
        DB::table('provinces')->insert(['name' => 'Fermo',  'code' => 'FM', 'region_id' => 11]);
        DB::table('provinces')->insert(['name' => 'Barletta-Andria-Trani',  'code' => 'BT', 'region_id' => 16]);
        DB::table('provinces')->insert(['name' => 'Sud Sardegna',  'code' => 'SU', 'region_id' => 20]);
    }
}
