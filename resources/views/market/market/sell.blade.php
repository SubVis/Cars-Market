@extends('market.index')
  @section('title', 'عاملة كام؟')
  @push('css')

  @push('js')
  @endpush
@section('content')
  <div class="container mx-auto">
    <p class="header">المعلومات الأساسية</p>
    <div class="flex flex-wrap px-2">
      <form class="w-full -mx-2" id="momo" action="{{route('storeCars')}}" method="post">
          {{csrf_field()}}
        <div class="flex flex-wrap w-full px-2 inputs">
              <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3 ">
                <p class="my-2 font-bold title m-2">عنوان الإعلان:</p>
                <div class="x flex-grow">
                  <input type="text" name="title" placeholder="مثال: فيات 98 بحالة ممتازة"/>
                  <p class="help-block help" data-validation="title"></p>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                <label class="my-2 inline-block font-bold title pl-2" for="brand">الماركة:</label>
                <div data-wrapper="brand">
                  <select class="w-full " name="brand" id="brand">
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
              <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                <label class="my-2 inline-block font-bold title pl-2" for="model">موديل:</label>
                <div data-wrapper="model">
                  <select class="w-full " name="model" id="model">
                    <option>اختر الموديل </option>
                    <option value="4">1</option>
                    <option value="6">2</option>
                    <option value="7">3</option>
                    <option value="8">4</option>
                    <option value="9">سنة</option>
                  </select>
                </div>
                <p class="help-block help" data-validation="model"> </p>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                <label class="my-2 inline-block font-bold title pl-2" for="town">المدينة:</label>
                <div data-wrapper="town">
                  <select class="w-full " name="town" id="town">
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
              <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3 ">
                <p class="my-2 font-bold title m-2">سعة المحرك:</p>
                <div class="x flex-grow">
                  <input type="text" placeholder="مثال: 1400 "/>
                  <p class="help-block help" data-validation="cc"> </p>
                </div>
              </div>
              <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3 ">
                <p class="my-2 font-bold title m-2">المسافة (كم):</p>
                <div class="x flex-grow">
                  <input type="text" placeholder="مثال: 1400 "/>
                  <p class="help-block help" data-validation="kilometers"> </p>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                <label class="my-2 inline-block font-bold title pl-2" for="transmission">ناقل الحركة:</label>
                <div data-wrapper="transmission">
                  <select class="w-full " name="transmission" id="transmission">
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
              <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                <label class="my-2 inline-block font-bold title pl-2" for="fuel">الوقود:</label>
                <div data-wrapper="fuel">
                  <select class="w-full " name="fuel" id="fuel">
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
              <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                <label class="my-2 inline-block font-bold title pl-2" for="color">اللون:</label>
                <div data-wrapper="color">
                  <select class="w-full " name="color" id="color">
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
              <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3 ">
                <p class="my-2 font-bold title m-2">السعر:</p>
                <div class="x flex-grow">
                  <input type="text" placeholder="هتبيع بكام؟"/>
                  <p class="help-block help" data-validation="price"> </p>
                </div>
              </div>
          <div class="input px-2 my-2 w-full md:w-1/2 lg:w-2/3">
            <p class="my-2 font-bold title">تفاصيل أكتر:</p>
            <textarea id="details" name="details" width="100%" cols="30" rows="3" placeholder="حاجات الزبون هيكون عايز يعرفها مثال: حالة الكوتشات, المساعدين, عاملة عمرة,الخ..."></textarea>
          </div>
          <button type='submit' id='car-store' class="btn mx-auto my-5 self-center indigo">التالي</button>
        </div>
      </form>
    </div>
  </div>

  <script src="{{url('market/js/modules/selectbox/single.js')}}"></script>

@endsection