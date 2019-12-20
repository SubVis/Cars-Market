    @extends('market.index')
  @section('content')
 
    <div class="container mx-auto pb-32">
      <form enctype="multipart/form-data" method="post" action="
      {{route('store_photo_Cars')}}">
                {{csrf_field()}}>
        <div class="px-4">
                    <h2 class="text-xl text-black font-semibold text-center my-4"> بكل سهولة هتقدر تعلن عن عربيتك ببلاش</h2>
          <p class="header">الصور</p>
          <div class="-mx-2">
            <div class="px-2">
              <div class="flex flex-wrap text-center px-2">
                <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                  <input class="w-full h-full" data-get="0" type="file"  name="image1"/>
                  <div class="img relative w-full h-full"><img class="img" data-preview="0"/>
                    <div class="tools">
                      <button class="delBtn delete px-2 py-1" type="button" data-del="0"><i class="far fa-times-circle"></i></button>
                    </div>
                  </div>
                </div>
                <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                  <input class="w-full h-full" data-get="1" type="file"  name="image2"/>
                  <div class="img relative w-full h-full"><img class="img" data-preview="1"/>
                    <div class="tools">
                      <button class="delBtn delete px-2 py-1" type="button" data-del="1"><i class="far fa-times-circle"></i></button>
                    </div>
                  </div>
                </div>
                <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                  <input class="w-full h-full" data-get="2" type="file" name="image3"/>
                  <div class="img relative w-full h-full"><img class="img" data-preview="2"/>
                    <div class="tools">
                      <button class="delBtn delete px-2 py-1" type="button" data-del="2"><i class="far fa-times-circle"></i></button>
                    </div>
                  </div>
                </div>
                <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                  <input class="w-full h-full" data-get="3" type="file"  name="image4"/>
                  <div class="img relative w-full h-full"><img class="img" data-preview="3"/>
                    <div class="tools">
                      <button class="delBtn delete px-2 py-1" type="button" data-del="3"><i class="far fa-times-circle"></i></button>
                    </div>
                  </div>
                </div>
                <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                  <input class="w-full h-full" data-get="4" type="file"  name="image5"/>
                  <div class="img relative w-full h-full"><img class="img" data-preview="4"/>
                    <div class="tools">
                      <button class="delBtn delete px-2 py-1" type="button" data-del="4"><i class="far fa-times-circle"></i></button>
                    </div>
                  </div>
                </div>
                <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                  <input class="w-full h-full" data-get="5" type="file"  name="image6"/>
                  <div class="img relative w-full h-full"><img class="img" data-preview="5"/>
                    <div class="tools">
                      <button class="delBtn delete px-2 py-1" type="button" data-del="5"><i class="far fa-times-circle"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-12">
            <p class="header">التجهيزات</p>
            <div class="flex flex-wrap">
              <div class="one w-full my-2 px-2">
                            <div class="w-full my-2 px-2">
                              <label class="font-bold text-xl color inline-block mb-2" for="comfort">وسائل الراحة</label>
                              <div data-wrapper="comfort">
                                <select class="w-full " name="comfort" id="comfort" multiple="multiple">
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
              <div class="two w-full my-2 px-2">
                            <div class="w-full my-2 px-2">
                              <label class="font-bold text-xl color inline-block mb-2" for="windows">نوافذ</label>
                              <div data-wrapper="windows">
                                <select class="w-full " name="windows" id="windows" multiple="multiple">
                                  <option>نوافذ</option>
                                  <option>نوافذ كهربائية أمامية</option>
                                  <option>ريموت نوافذ كهربائية خلفية</option>
                                  <option>زجاج فاميه</option>
                                </select>
                              </div>
                              <p class="help-block help"> </p>
                            </div>
              </div>
              <div class="three w-full my-2 px-2">
                            <div class="w-full my-2 px-2">
                              <label class="font-bold text-xl color inline-block mb-2" for="soundSys">نظام الصوت</label>
                              <div data-wrapper="soundSys">
                                <select class="w-full " name="soundSys" id="soundSys" multiple="multiple">
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
              <div class="four w-full my-2 px-2">
                            <div class="w-full my-2 px-2">
                              <label class="font-bold text-xl color inline-block mb-2" for="security">وسائل الأمان</label>
                              <div data-wrapper="security">
                                <select class="w-full " name="security" id="security" multiple="multiple">
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
              <div class="five w-full my-2 px-2">
                            <div class="w-full my-2 px-2">
                              <label class="font-bold text-xl color inline-block mb-2" for="others">مميزات أخرى</label>
                              <div data-wrapper="others">
                                <select class="w-full " name="others" id="others" multiple="multiple">
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
              <button class="indigo mx-auto my-8 px-16 mx-auto" type="submit">خلاص</button>
            </div>
          </div>
        </div>
      </form>
    


 @endsection