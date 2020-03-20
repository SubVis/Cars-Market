<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('colors')->insert([
                ['color'=>'احمر'],
                ['color'=>'أخضر'],
                ['color'=>'ذهبي'],
                ['color'=>'فضي'],
                ['color'=>'أبيض'] ,
                ['color'=>'أسود'],
                ['color'=>'أزرق' ],
                ['color'=>'برونزي'],
                ['color'=>'رمادي'],
                ['color'=>'احمر غامق'],
                ['color'=>'الأزرق الداكنفسجي'],
                ['color'=>'اخضر غامق'],
                ['color'=>'بني'],
                ['color'=>'زيتوني'] ,
                ['color'=>'اصفر'],
                ['color'=>'برتقالى'],
                ['color'=>'سماوى'],
                ['color'=>'بيج'],
                ['color'=>'موكا'],
                ['color'=>'فيراني'],
                ['color'=>'شمبان'],
                ['color'=>'بترولي'],
                ['color'=>'باذنجاني'],
        ]);
    }
}
