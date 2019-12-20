    @extends('market.index')
    @section('title', 'املة كام؟<')
    @push('css')

    @push('js')
    @endpush
  @section('content')


      <h2 class="text-xl text-black font-semibold text-center my-4">بكل سهولة هتقدر تعلن عن عربيتك ببلاش </h2>
      <div class="flex flex-wrap px-5 -mx-2">
        <p class="header">المعلومات الأساسية</p>
        <form action="{{route('storeCars')}}" method="post">
           {{csrf_field()}}
          <div class="flex flex-wrap w-full px-2 inputs">
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3">
              <p class="my-2 font-bold title">عنوان الإعلان:</p>
              <input type="text" name='title' placeholder="مثال: فيات 98 بحالة ممتازة" class="@if ($errors->has('title')) is-invalid @endif"/>
              <p class="help-block help">هذا الحقل مطلوب. </p>
             @if ($errors->has('title')) 
                {{$errors->first('title')}}
             @endif
            
            </div>
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3">
              <p class="my-2 font-bold title">الماركة:</p>
              <select class="js-choice" id="slim-select" dir="rtl" name="brand">
                <optgroup>
                  <option>-- اختر -- </option>
                  <option value="1">opel 2</option>
                  <option value="1">opel 3</option>
                  <option value="1">opel 4</option>
                  <option value="1">opel 5</option>
                  <option value="1">opel 6</option>
                </optgroup>
              </select>
              <p class="help-block help">هذا الحقل مطلوب.                            </p>
            </div>
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3">
              <p class="my-2 font-bold title">موديل:</p>
              <select class="js-choice" id="slim-select" dir="rtl" name="model">
                <optgroup>
                  <option>سنة</option>
                  <option value="1">opel 1</option>
                  <option value="1">opel 2</option>
                  <option value="1">opel 3</option>
                  <option value="1">opel 4</option>
                  <option value="1">opel 5</option>
                  <option value="1">opel 6</option>
                </optgroup>
              </select>
              <p class="help-block help">هذا الحقل مطلوب.                            </p>
            </div>
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3">
              <p class="my-2 font-bold title">سعة المحرك:</p>
              <input type="text" name='cc' placeholder="مثال: 1400 "/>
              <p class="help-block help">هذا الحقل مطلوب.                            </p>
            </div>
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3">
              <p class="my-2 font-bold title">المدينة:</p>
              <select class="js-choice" id="slim-select" dir="rtl" name="city">
                <optgroup>
                  <option>اختار مدينتك</option>
                  <option value="1">opel 1</option>
                  <option value="1">opel 2</option>
                  <option value="1">opel 3</option>
                  <option value="1">opel 4</option>
                  <option value="1">opel 5</option>
                  <option value="1">opel 6</option>
                </optgroup>
              </select>
              <p class="help-block help">هذا الحقل مطلوب.   </p>
            </div>
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3">
              <p class="my-2 font-bold title">المسافة(كم):</p>
              <input type="text" name='kilometers' placeholder="مثال: 1400 "/>
              <p class="help-block help">هذا الحقل مطلوب.                            </p>
            </div>
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3">
              <p class="my-2 font-bold title">ناقل الحركة:</p>
              <select class="js-choice" id="slim-select" dir="rtl" name="driver">
                <optgroup>
                  <option>اختار نوع الناقل</option>
                  <option value="1">opel 1</option>
                  <option value="1">opel 2</option>
                </optgroup>
              </select>
              <p class="help-block help">هذا الحقل مطلوب.                            </p>
            </div>
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3">
              <p class="my-2 font-bold title">الوقود:</p>
              <select class="js-choice" id="slim-select" dir="rtl" name="fuel">
                <optgroup>
                  <option>اختار نوع الوقود</option>
                  <option value="1">opel 1</option>
                  <option value="1">opel 2</option>
                  <option value="1">opel 3</option>
                  <option value="1">opel 4</option>
                  <option value="1">opel 5</option>
                  <option value="1">opel 6</option>
                </optgroup>
              </select>
              <p class="help-block help">هذا الحقل مطلوب.                            </p>
            </div>
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3">
              <p class="my-2 font-bold title">اللون:</p>
              <select class="js-choice" id="slim-select" dir="rtl" name="color">
                <optgroup>
                  <option>اختار لون العربية</option>
                  <option value="1">opel 1</option>
                  <option value="1">opel 2</option>
                  <option value="1">opel 3</option>
                  <option value="1">opel 4</option>
                  <option value="1">opel 5</option>
                  <option value="1">opel 6</option>
                </optgroup>
              </select>
              <p class="help-block help">هذا الحقل مطلوب.                            </p>
            </div>
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3">
              <p class="my-2 font-bold title">السعر:</p>
              <input type="text" name='price' placeholder="هتبيع بكام؟"/>
              <p class="help-block help">هذا الحقل مطلوب.                            </p>
            </div>
            <div class="input px-2 my-2 w-full md:w-1/2 lg:w-2/3">
              <p class="my-2 font-bold title">تفاصيل أكتر:</p>
              <textarea id="details" name="details" width="100%" cols="30" rows="3" placeholder="حاجات الزبون هيكون عايز يعرفها مثال: حالة الكوتشات, المساعدين, عاملة عمرة,الخ..."></textarea>
              <p class="help-block help">هذا الحقل مطلوب.                            </p>
            </div>
            <button type="submit" class="btn btn-info modal-submit mx-auto my-5">التالي</button>
          </div>
        </form>
      </div>
    
  @endsection