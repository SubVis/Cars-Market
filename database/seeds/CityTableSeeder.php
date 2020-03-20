<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'القاهرة'],
            ['city' => 'الجيزة'],
            ['city' => 'القليوبية'],
            ['city' => 'المنوفية'],
            ['city' => 'الشرقية'],
            ['city' => 'الاسكندرية'],
            ['city' => 'الغربية'],
            ['city' => 'الدقهلية'],
            ['city' => 'البحر الاحمر'],
            ['city' => 'الفيوم'],
            ['city' => 'بني سويف'],
            ['city' => 'اسوان'],
            ['city' => 'الاقصر'],
            ['city' => 'البحيرة'],
            ['city' => 'سيناء'],
            ['city' => 'السويس'],
            ['city' => 'المنيا'],
            ['city' => 'بورسعيد'],
            ['city' => 'دمياط'],
            ['city' => 'الاسماعيلية'],
            ['city' => 'سوهاج'],
            ['city' => 'اسيوط'],
            ['city' => 'مطروح'],
            ['city' => 'الوادي الجديد'],
            ['city' => 'قنا'],
            ['city' => 'كفر الشيخ'],
        ]);
       
    }
}
