    <!-- Start photos form -->
    <form enctype="multipart/form-data" method="post" action="
			{{route('storeCars2')}}" id='storeForm2'>
        {{csrf_field()}}
        <div class="px-4">
            <h2 class="text-xl text-black font-semibold text-center my-4"> بكل سهولة هتقدر تعلن عن عربيتك ببلاش</h2>
            <p class="header">الصور</p>
            @include('components.ImagesSelection')

            <!-- Start capapilties section -->
            <div class="mt-12">
                <p class="header">التجهيزات</p>
                <div class="flex flex-wrap">
                    <!-- start comfort input -->
                    <div class="one w-full my-2 px-2">
                        <div class="w-full my-2 px-2">
                            <label class="font-bold text-xl color inline-block mb-2" for="comfort">وسائل
                                الراحة</label>
                            <div data-wrapper="comfort">
                                <select class="w-full  multiSelect" name="comfort[]" id="comfort" multiple="multiple">
                                    <option>وسائل الراحة</option>
                                    <option>المكيف</option>
                                    <option> ريموت كنترول</option>
                                    <option> فتحة سقف</option>
                                    <option> مرايات كهرباء</option>
                                    <option> مرايات ضم, غلق</option>
                                    <option> فرش جلد</option>
                                    <option>فرش قماش</option>
                                    <option>باور</option>
                                    <option> النظام الذكي لركن السيارات</option>
                                </select>
                            </div>
                            <p class="help-block help"> </p>
                        </div>
                    </div>
                    <!-- End comfort input -->

                    <!-- Start windows input -->
                    <div class="two w-full my-2 px-2">
                        <div class="w-full my-2 px-2">
                            <label class="font-bold text-xl color inline-block mb-2" for="windows">نوافذ</label>
                            <div data-wrapper="windows">
                                <select class="w-full  multiSelect" name="windows[]" id="windows" multiple="multiple">
                                    <option>نوافذ</option>
                                    <option>نوافذ كهربائية أمامية</option>
                                    <option>ريموت نوافذ كهربائية خلفية</option>
                                    <option>زجاج فاميه</option>
                                </select>
                            </div>
                            <p class="help-block help"> </p>
                        </div>
                    </div>
                    <!-- End windows input -->

                    <!-- Start soundSys input -->
                    <div class="three w-full my-2 px-2">
                        <div class="w-full my-2 px-2">
                            <label class="font-bold text-xl color inline-block mb-2" for="soundSys">نظام
                                الصوت</label>
                            <div data-wrapper="soundSys">
                                <select class="w-full  multiSelect" name="soundSys[]" id="soundSys" multiple="multiple">
                                    <option>نظام الصوت</option>
                                    <option>راديو كاسيت</option>
                                    <option>مبدل أقراص</option>
                                    <option>مشغل دي في دي</option>
                                    <option>مشغل اسطوانات</option>
                                    <option>مدخل AUX</option>
                                    <option>مدخل USB</option>
                                    <option>بلوتوث</option>
                                    <option>نظام تحكم في الطارة</option>
                                </select>
                            </div>
                            <p class="help-block help"> </p>
                        </div>
                    </div>
                    <!-- End soundSys input -->

                    <!-- Start security input -->
                    <div class="four w-full my-2 px-2">
                        <div class="w-full my-2 px-2">
                            <label class="font-bold text-xl color inline-block mb-2" for="security">وسائل
                                الأمان</label>
                            <div data-wrapper="security">
                                <select class="w-full  multiSelect" name="security[]" id="security" multiple="multiple">
                                    <option>وسائل الأمان</option>
                                    <option>نظام الفرامل المانع للإنزلاق-ABS</option>
                                    <option>وسادة هوائية للسائق</option>
                                    <option>وسادة هوائية للركاب</option>
                                    <option>وسادة هوائية جانبية</option>
                                    <option>نظام توزيع قوى الفرامل EBD</option>
                                    <option>حساسات</option>
                                    <option>ESP</option>
                                    <option>حساسات أمامية</option>
                                    <option>حساسات خلفية</option>
                                    <option>نظام ايموبليزر ضد السرقة</option>
                                </select>
                            </div>
                            <p class="help-block help"> </p>
                        </div>
                    </div>
                    <!-- End security input -->

                    <!-- Start others input -->
                    <div class="five w-full my-2 px-2">
                        <div class="w-full my-2 px-2">
                            <label class="font-bold text-xl color inline-block mb-2" for="others">مميزات
                                أخرى</label>
                            <div data-wrapper="others">
                                <select class="w-full  multiSelect" name="others[]" id="others" multiple="multiple">
                                    <option>مميزات أخرى</option>
                                    <option>جنوط</option>
                                    <option>مقاعد كهربائية</option>
                                    <option>إنذار</option>
                                    <option>كشافات ضباب</option>
                                    <option>كاميرا خلفية</option>
                                    <option>GPS</option>
                                    <option>مثبت السرعة</option>
                                    <option>قفل مركزي للابواب</option>
                                    <option> سبويلر خلفي</option>
                                </select>
                            </div>
                            <p class="help-block help"> </p>
                        </div>
                    </div>
                    <!-- End others input -->

                    <button class="indigo mx-auto my-8 px-16 mx-auto" type="submit" id="car-store2">خلاص</button>
                </div>
            </div>
            <!-- End capapilties section -->

        </div>
    </form>
    <!-- End photos form -->