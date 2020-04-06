<div class="flex flex-wrap px-2" id="form1">
    <!-- start Form -->
    <form class="w-full -mx-2" id="storeForm" action="{{route('storeCars')}}" method="post">
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
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
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
                     
                    </select>
                </div>
                <p class="help-block help" data-validation="model"> </p>
            </div>
            <!-- End model input -->
            
            <!-- Start modelyear input -->
            <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                <label class="my-2 inline-block font-bold title pl-2" for="model">عام الموديل:</label>
                <div data-wrapper="model">
                    <select class="w-full  singleSelect" name="modelyear" id="modelyear">
                        <option disabled>اختر عام الموديل  </option>
                        @foreach($modelyear as $year)
                        <option value="{{$year->id}}">{{$year->year}}</option>
                        @endforeach
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
                        @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->city}}</option>
                        @endforeach
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
                    <select class="w-full  singleSelect" name="driver" id="driver">
                        <option>اختار نوع الناقل</option>
                        @foreach($drivers as $driver)
                        <option value="{{$driver->id}}">{{$driver->driver}}</option>
                        @endforeach
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
                        @foreach($fuels as $fuel)
                        <option value="{{$fuel->id}}">{{$fuel->fuel}}</option>
                        @endforeach
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
                        @foreach($colors as $color)
                        <option value="{{$color->id}}">{{$color->color}}</option>
                        @endforeach
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
                <textarea id="details" name="details" width="100%" cols="30" rows="3" placeholder="حاجات الزبون هيكون عايز يعرفها مثال: حالة الكوتشات, المساعدين, عاملة عمرة,الخ..."></textarea>
            </div>
            <!-- End details textarea -->

            <button type='submit' id='car-store' class="btn mx-auto my-5 self-center indigo">التالي</button>
        </div>
    </form>
    <!-- End Form -->