<?php

use Illuminate\Database\Seeder;

class DriverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
          DB::table('drivers')->insert([
            ['driver' => 'مانيوال',],
            ['driver' => 'أتوماتيك'],
        ]);

    }
}
