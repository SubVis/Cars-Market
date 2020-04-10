<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            DriverTableSeeder::class,
            FuelTableSeeder::class,
            BrandTableSeeder::class,
            ModelTableSeeder::class,
            ModelYearTableSeeder::class,
            CityTableSeeder::class,
            ColorTableSeeder::class,
          //  UsersTableSeeder::class,
           // VoyagerDatabaseSeeder::class,
        ]);
    }
}
