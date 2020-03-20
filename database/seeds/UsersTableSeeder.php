<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            ['name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345'),
            'phone' => 934987402,
            'city' => 'القاهرة',

        ],
           
        ]);
    }
}
