@extends('market.index')
@section('title', 'عاملة كام؟')
@push('css')

@push('js')
@endpush
@section('content')
<div class="container mx-auto">
    <p class="header">المعلومات الأساسية</p>
    <!-- Start Form 1 -->
    <div class="flex flex-wrap px-2" id="form1">
        <!-- start Form -->
        <form class="w-full -mx-2" id="storeForm" action="{{route('storeCars2')}}" method="post">
            {{csrf_field()}}
            <div class="flex flex-wrap w-full px-2 inputs">
                <!-- Start title input -->
                <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3 ">
                    <p class="my-2 font-bold title m-2">عنوان الإعلان:</p>
                    <div class="x flex-grow">
                        <input type="text" name="title" placeholder="مثال: فيات 98 بحالة ممتازة" />
                        <p class="help-block help" data-validation="title"></p>
                    </div>
                </div>
                <!-- End title input -->

                <!-- Start brand input -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="brand">الماركة:</label>
                    <div data-wrapper="brand">
                        <select class="w-full  singleSelect" name="brand" id="brand">
                            <option>-- اختر -- </option>
                            <option value="1">1</option>
                            <option value="5">2</option>
                            <option value="6">3</option>
                            <option value="7">4</option>
                            <option value="8">سنة</option>
                        </select>
                    </div>
                    <p class="help-block help" data-validation="brand"> </p>
                </div>
                <!-- End brand input -->

                <!-- Start model input -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="model">موديل:</label>
                    <div data-wrapper="model">
                        <select class="w-full  singleSelect" name="model" id="model">
                            <option disabled>اختر الموديل </option>
                            <option value="4">1</option>
                            <option value="6">2</option>
                            <option value="7">3</option>
                            <option value="8">4</option>
                            <option value="9">سنة</option>
                        </select>
                    </div>
                    <p class="help-block help" data-validation="model"> </p>
                </div>
                <!-- End model input -->

                <!-- Start town input -->

                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="town">المدينة:</label>
                    <div data-wrapper="town">
                        <select class="w-full  singleSelect" name="city" id="town">
                            <option>اختار مدينتك</option>
                            <option value="1">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>سنة</option>
                        </select>
                    </div>
                    <p class="help-block help" data-validation="city"> </p>
                </div>
                <!-- End town input -->

                <!-- Start cc input -->
                <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3 ">
                    <p class="my-2 font-bold title m-2">سعة المحرك:</p>
                    <div class="x flex-grow">
                        <input type="text" placeholder="مثال: 1400 " name='cc' />
                        <p class="help-block help" data-validation="cc"> </p>
                    </div>
                </div>
                <!-- End cc input -->

                <!-- Start kilometers input -->
                <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3 ">
                    <p class="my-2 font-bold title m-2">المسافة (كم):</p>
                    <div class="x flex-grow">
                        <input type="text" placeholder="مثال: 1400 " name='kilometers' />
                        <p class="help-block help" data-validation="kilometers"> </p>
                    </div>
                </div>
                <!-- End kilometers input -->

                <!-- Start transmission input -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="transmission">ناقل الحركة:</label>
                    <div data-wrapper="transmission">
                        <select class="w-full  singleSelect" name="driver" id="transmission">
                            <option>اختار نوع الناقل</option>
                            <option value="1">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>سنة</option>
                        </select>
                    </div>
                    <p class="help-block help" data-validation="driver"> </p>
                </div>
                <!-- End transmission input -->

                <!-- Start fuel input -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="fuel">الوقود:</label>
                    <div data-wrapper="fuel">
                        <select class="w-full  singleSelect" name="fuel" id="fuel">
                            <option>اختار نوع الوقود</option>
                            <option value="1">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>سنة</option>
                        </select>
                    </div>
                    <p class="help-block help" data-validation="fuel"> </p>
                </div>
                <!-- End fuel input -->

                <!-- Start color input -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="color">اللون:</label>
                    <div data-wrapper="color">
                        <select class="w-full  singleSelect" name="color" id="color">
                            <option>اختار لون العربية</option>
                            <option value="1">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>سنة</option>
                        </select>
                    </div>
                    <p class="help-block help" data-validation="color"> </p>
                </div>
                <!-- End color input -->

                <!-- Start price input -->
                <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3 ">
                    <p class="my-2 font-bold title m-2">السعر:</p>
                    <div class="x flex-grow">
                        <input type="text" placeholder="هتبيع بكام؟" name='price' />
                        <p class="help-block help" data-validation="price"> </p>
                    </div>
                </div>
                <!-- End price input -->

                <!-- Start details textarea -->
                <div class="input px-2 my-2 w-full md:w-1/2 lg:w-2/3">
                    <p class="my-2 font-bold title">تفاصيل أكتر:</p>
                    <textarea id="details" name="details" width="100%" cols="30" rows="3"
                        placeholder="حاجات الزبون هيكون عايز يعرفها مثال: حالة الكوتشات, المساعدين, عاملة عمرة,الخ..."></textarea>
                </div>
                <!-- End details textarea -->

                <button type='submit' id='car-store' class="btn mx-auto my-5 self-center indigo">التالي</button>
            </div>
        </form>
        <!-- End Form -->
    </div>
</div>
<!-- End Form 1 -->
<!-- Start Form 2 -->

<div class="container mx-auto pb-32" style="display: none" id="form2">
    <!-- Start photos form -->
    <form enctype="multipart/form-data" method="post" action="
			{{route('storeCars2')}}" id='storeForm2'>
        {{csrf_field()}}
        <div class="px-4">
            <h2 class="text-xl text-black font-semibold text-center my-4"> بكل سهولة هتقدر تعلن عن عربيتك ببلاش</h2>
            <p class="header">الصور</p>
            <!-- Start images section -->
            <div class="-mx-2">
                <div class="px-2">
                    <div class="flex flex-wrap text-center px-2">

                        <!-- Start image input -->
                        <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                            <input class="w-full h-full" data-get="0" type="file" name="image1" />
                            <div class="img relative w-full h-full">
                                <img class="img" data-preview="0" />
                                <div class="tools">
                                    <button class="delBtn delete px-2 py-1" type="button" data-del="0">
                                        <i class="far fa-times-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End image input -->

                        <!-- Start image input -->
                        <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                            <input class="w-full h-full" data-get="1" type="file" name="image2" />
                            <div class="img relative w-full h-full"><img class="img" data-preview="1" />
                                <div class="tools">
                                    <button class="delBtn delete px-2 py-1" type="button" data-del="1"><i
                                            class="far fa-times-circle"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- End image input -->

                        <!-- Start image input -->
                        <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                            <input class="w-full h-full" data-get="2" type="file" name="1" />
                            <div class="img relative w-full h-full"><img class="img" data-preview="2" />
                                <div class="tools">
                                    <button class="delBtn delete px-2 py-1" type="button" data-del="2"><i
                                            class="far fa-times-circle"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- End image input -->

                        <!-- Start image input -->
                        <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                            <input class="w-full h-full" data-get="3" type="file" name="1" />
                            <div class="img relative w-full h-full"><img class="img" data-preview="3" />
                                <div class="tools">
                                    <button class="delBtn delete px-2 py-1" type="button" data-del="3"><i
                                            class="far fa-times-circle"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- End image input -->

                        <!-- Start image input -->
                        <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                            <input class="w-full h-full" data-get="4" type="file" name="1" />
                            <div class="img relative w-full h-full"><img class="img" data-preview="4" />
                                <div class="tools">
                                    <button class="delBtn delete px-2 py-1" type="button" data-del="4"><i
                                            class="far fa-times-circle"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- End image input -->

                        <!-- Start image input -->
                        <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                            <input class="w-full h-full" data-get="5" type="file" name="1" />
                            <div class="img relative w-full h-full"><img class="img" data-preview="5" />
                                <div class="tools">
                                    <button class="delBtn delete px-2 py-1" type="button" data-del="5"><i
                                            class="far fa-times-circle"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- End image input -->
                    </div>
                </div>
            </div>
            <!-- End images section -->

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
                                <select class="w-full  multiSelect" name="comfort" id="comfort" multiple="multiple">
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
                                <select class="w-full  multiSelect" name="windows" id="windows" multiple="multiple">
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
                                <select class="w-full  multiSelect" name="soundSys" id="soundSys" multiple="multiple">
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
                                <select class="w-full  multiSelect" name="security" id="security" multiple="multiple">
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
                                <select class="w-full  multiSelect" name="others" id="others" multiple="multiple">
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

</div>

@push('js')
<script src="{{url('market/js/modules/selectbox/multi.js')}}"></script>

<script src="{{url('market/js/modules/selectbox/single.js')}}"></script>
@endpush


@endsection
