<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('brands')->insert([
                ['name' => 'أستون مارتن'],
                ['name' => 'ألفاروميو'],
                ['name' => 'أوبل'],
                ['name' => 'أودي'],
                ['name' => 'اسبيرانزا'],
                ['name' => 'ام جى'],
                ['name' => 'انفنتي'],
                ['name' => 'ايسوزو'],
                ['name' => 'بروتون'],
                ['name' => 'بريليانس'],
                ['name' => 'بنتلي'],
                ['name' => 'بورش'],
                ['name' => 'بي إم دبليو'],
                ['name' => 'بي واي دي'],
                ['name' => 'بيجو'],
                ['name' => 'تويوتا'],
                ['name' => 'جاجوار'],
                ['name' => 'جاك'],
                ['name' => 'جريتوول'],
                ['name' => 'جي إم سي'],
                ['name' => 'جيب'],
                ['name' => 'جيلي'],
                ['name' => 'دايهاتسو'],
                ['name' => 'دايو'],
                ['name' => 'دودج'],
                ['name' => 'رولز رويس'],
                ['name' => 'رينو'],
                ['name' => 'زوتى'],
                ['name' => 'سانج يونغ'],
                ['name' => 'ستروين'],
                ['name' => 'سكودا'],
                ['name' => 'سوبارو'],
                ['name' => 'سوزوكي'],
                ['name' => 'سيات'],
                ['name' => 'سينوفا'],
                ['name' => 'شانا'],
                ['name' => 'شانجان'],
                ['name' => 'شاهين'],
                ['name' => 'شيري'],
                ['name' => 'شيفروليه'],
                ['name' => 'فورد'],
                ['name' => 'فولفو'],
                ['name' => 'فولكس فاجن'],
                ['name' => 'فيات'],
                ['name' => 'فيراري'],
                ['name' => 'كاديلاك'],
                ['name' => 'كرايسلر'],
                ['name' => 'كيا'],
                ['name' => 'لادا'],
                ['name' => 'لامبورغيني'],
                ['name' => 'لاند روفر'],
                ['name' => 'لانشيا'],
                ['name' => 'لكزس'],
                ['name' => 'لنكولن'],
                ['name' => 'مازدا'],
                ['name' => 'مازيراتي'],
                ['name' => 'ماهيندرا'],
                ['name' => 'مرسيدس'],
                ['name' => 'ميتسوبيشي'],
                ['name' => 'ميركري'],
                ['name' => 'ميني'],
                ['name' => 'نيسان'],
                ['name' => 'هامر'],
                ['name' => 'هوندا'],

            ]);
    }
}
