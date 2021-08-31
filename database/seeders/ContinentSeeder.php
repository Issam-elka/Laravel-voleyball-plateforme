<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            [
                'nom_continent' => 'Europe',
            ],
            [
                'nom_continent' => 'Afrique',
            ],
            [
                'nom_continent' => 'Asie',
            ],
            [
                'nom_continent' => 'Amerique',
            ],
            [
                'nom_continent' => 'Oceanie',
            ]
        ]);
    }
}
