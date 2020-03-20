<?php

use Illuminate\Database\Seeder;

class ModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars_models')->insert([
            ['brand_id' => 1,
            'name' => 'سيراتو', ],
        ]);
    }
}
