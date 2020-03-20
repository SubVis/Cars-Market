<?php

use Illuminate\Database\Seeder;

class FuelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fuels')->insert([
            ['fuel' => 'البنزين'],
            ['fuel' => 'ديزل'],
             ['fuel' => 'غاز طبيعي'],
             ['fuel' => ' كهربائي'],
             ['fuel' => 'هجيبن'],
           
        ]);
    }
}
