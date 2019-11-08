    @extends('market.index')
  @section('content')

   <div class="px-4">
        <h2 class="text-xl text-black font-semibold text-center my-4">بكل سهولة هتقدر تعلن عن عربيتك ببلاش </h2>
        <p class="header">الصور</p>
        <form class="flex flex-wrap px-2 text-center" enctype="multipart/form-data" method="post" action="#">
          <div class="inputs images my-2 px-2 w-full sm:w-1/2 lg:w-1/3">
            <input class="images 2-full" data-get="0" type="file" name="1"/><img data-preview="0"/>
          </div>
          <div class="inputs images my-2 px-2 w-full sm:w-1/2 lg:w-1/3">
            <input class="images 2-full" data-get="1" type="file" name="1"/><img data-preview="1"/>
          </div>
          <div class="inputs images my-2 px-2 w-full sm:w-1/2 lg:w-1/3">
            <input class="images 2-full" data-get="2" type="file" name="1"/><img data-preview="2"/>
          </div>
          <div class="inputs images my-2 px-2 w-full sm:w-1/2 lg:w-1/3">
            <input class="images 2-full" data-get="3" type="file" name="1"/><img data-preview="3"/>
          </div>
          <div class="inputs images my-2 px-2 w-full sm:w-1/2 lg:w-1/3">
            <input class="images 2-full" data-get="4" type="file" name="1"/><img data-preview="4"/>
          </div>
          <div class="inputs images my-2 px-2 w-full sm:w-1/2 lg:w-1/3">
            <input class="images 2-full" data-get="5" type="file" name="1"/><img data-preview="5"/>
          </div>
        </form>
      </div>
      <div class="px-4 mt-12">
        <p class="header">التجهيزات</p>
        <form class="flex flex-wrap" action="#" method="method">
          <div class="one w-full my-2 sm:w-1/2 md:w-1/3 lg:w-1/5">
            <ul>
              <li class="mb-5">
                <p class="font-bold text-xl color">وسائل الراحة</p>
              </li>
              <li class="my-2">
                <input class="w-auto" id="airconetion" type="checkbox" name="airconetion"/><span class="mx-2">المكيف</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="remoteControl" type="checkbox" name="remoteControl"/><span class="mx-2">ريموت كنترول</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="openRoof" type="checkbox" name="openRoof"/><span class="mx-2">فتحة سقف</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="electricMirrors" type="checkbox" name="electricMirrors"/><span class="mx-2">مرايات كهرباء</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="closeMirors" type="checkbox" name="closeMirors"/><span class="mx-2">مرايات ضم, غلق</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="leather" type="checkbox" name="leather"/><span class="mx-2">فرش جلد</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="normal" type="checkbox" name="normal"/><span class="mx-2">فرش قماش</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="power" type="checkbox" name="power"/><span class="mx-2">باور</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="AiParking" type="checkbox" name="AiParking"/><span class="mx-2">النظام الذكي لركن السيارات</span>
              </li>
            </ul>
          </div>
          <div class="two w-full my-2 sm:w-1/2 md:w-1/3 lg:w-1/5">
            <ul>
              <li class="mb-5">
                <p class="font-bold text-xl color">نوافذ</p>
              </li>
              <li class="my-2">
                <input class="w-auto" id="frontWindow" type="checkbox" name="frontWindow"/><span class="mx-2">نوافذ كهربائية أمامية</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="backWindow" type="checkbox" name="backWindow"/><span class="mx-2">نوافذ كهربائية خلفية</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="fame" type="checkbox" name="fame"/><span class="mx-2">زجاج فاميه</span>
              </li>
            </ul>
          </div>
          <div class="three w-full my-2 sm:w-1/2 md:w-1/3 lg:w-1/5">
            <ul>
              <li class="mb-5">
                <p class="font-bold text-xl color">نظام الصوت</p>
              </li>
              <li class="my-2">
                <input class="w-auto" id="radio" type="checkbox" name="radio"/><span class="mx-2">راديو كاسيت</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="cd" type="checkbox" name="cd"/><span class="mx-2">مبدل أقراص</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="dvd" type="checkbox" name="dvd"/><span class="mx-2">مشغل دي في دي</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="cdPlayer" type="checkbox" name="cdPlayer"/><span class="mx-2">مشغل اسطوانات</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="aux" type="checkbox" name="aux"/><span class="mx-2">مدخل AUX</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="usb" type="checkbox" name="usb"/><span class="mx-2">مدخل USB</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="blue" type="checkbox" name="blue"/><span class="mx-2">بلوتوث</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="aIcontrol" type="checkbox" name="aIcontrol"/><span class="mx-2">نظام تحكم في الطارة</span>
              </li>
            </ul>
          </div>
          <div class="four w-full my-2 sm:w-1/2 md:w-1/3 lg:w-1/5">
            <ul>
              <li class="mb-5">
                <p class="font-bold text-xl color">وسائل الأمان</p>
              </li>
              <li class="my-2">
                <input class="w-auto" id="ABS" type="checkbox" name="ABS"/><span class="mx-2">نظام الفرامل المانع للإنزلاق-ABS</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="driverAirBag" type="checkbox" name="driverAirBag"/><span class="mx-2">وسادة هوائية للسائق</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="passAirBag" type="checkbox" name="passAirBag"/><span class="mx-2">وسادة هوائية للركاب</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="sideAirbag" type="checkbox" name="sideAirbag"/><span class="mx-2">وسادة هوائية جانبية</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="ebd" type="checkbox" name="ebd"/><span class="mx-2">نظام توزيع قوى الفرامل EBD</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="sensors" type="checkbox" name="sensors"/><span class="mx-2">حساسات</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="esp" type="checkbox" name="esp"/><span class="mx-2">ESP</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="frontSensors" type="checkbox" name="frontSensors"/><span class="mx-2">حساسات أمامية</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="backSensors" type="checkbox" name="backSensors"/><span class="mx-2">حساسات خلفية</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="embloys" type="checkbox" name="embloys"/><span class="mx-2">نظام ايموبليزر ضد السرقة</span>
              </li>
            </ul>
          </div>
          <div class="five w-full my-2 sm:w-1/2 md:w-1/3 lg:w-1/5">
            <ul>
              <li class="mb-5">
                <p class="font-bold text-xl color">مميزات أخرى</p>
              </li>
              <li class="my-2">
                <input class="w-auto" id="jnot" type="checkbox" name="jnot"/><span class="mx-2">جنوط</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="elecChairs" type="checkbox" name="elecChairs"/><span class="mx-2">مقاعد كهربائية</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="alert" type="checkbox" name="alert"/><span class="mx-2">إنذار</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="lights" type="checkbox" name="lights"/><span class="mx-2">كشافات ضباب</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="backCamera" type="checkbox" name="backCamera"/><span class="mx-2">كاميرا خلفية</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="GPS" type="checkbox" name="GPS"/><span class="mx-2">GPS</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="speenConsest" type="checkbox" name="speenConsest"/><span class="mx-2">مثبت السرعة</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="lock" type="checkbox" name="lock"/><span class="mx-2">قفل مركزي للابواب</span>
              </li>
              <li class="my-2">
                <input class="w-auto" id="spoiler" type="checkbox" name="spoiler"/><span class="mx-2">سبويلر خلفي</span>
              </li>
            </ul>
          </div>
          <button class="indigo mx-auto my-8 px-16 mx-auto" type="submit">خلاص</button>
        </form>
      </div>

 @endsection