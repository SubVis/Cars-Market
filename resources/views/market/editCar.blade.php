@extends('index')
@section('title', 'سوق السيارات | بيع ')
@section('sell-active', 'active')
@push('css')
<link rel="stylesheet" href="{{url('css/selection.css')}}" />

@endpush
@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap px-2" id="form1">
        <!-- start Form -->
        <form class="w-full -mx-2" id="storeForm" action="{{route('editCar', ['id' => $car->id])}}" method="post">
            {{csrf_field()}}
            <div class="flex flex-wrap w-full px-2 inputs">
                <!-- Start title input -->
                <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3 ">
                    <p class="my-2 font-bold title m-2">عنوان الإعلان:</p>
                    <div class="x flex-grow">
                        <input type="text" name="title" value='{{$car->title}}' placeholder="مثال: فيات 98 بحالة ممتازة" />
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
                            <option @if($car->brand_id == $brand->id) ? {{'selected'}} @endif value="{{$brand->id}}">{{$brand->name}}</option>
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
                                                   <option>اختر</option> 
                            <option value='{{$car->model_id}}'>{{$car->model->name}} </option>
                        
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
                            <option   @if($car->modelyear_id == $year->id) ? {{'selected'}} @endif value="{{$year->id}}">{{$year->year}}</option>
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
                            <option  @if($car->city_id == $city->id) ? {{'selected'}} @endif value="{{$city->id}}" >{{$city->city}}</option>
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
                        <input type="text" placeholder="مثال: 1400 " name='cc' value='{{$car->cc}}' />
                        <p class="help-block help" data-validation="cc"> </p>
                    </div>
                </div>
                <!-- End cc input -->

                <!-- Start kilometers input -->
                <div class="input px-2 my-2 w-full md:w-1/2 lg:w-1/3 ">
                    <p class="my-2 font-bold title m-2">المسافة (كم):</p>
                    <div class="x flex-grow">
                        <input type="text" placeholder="مثال: 1400 " name='kilometers' value='{{$car->kilometers}}' />
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
                            <option @if($car->driver_id == $driver->id) ? {{'selected'}} @endif  value="{{$driver->id}}">{{$driver->driver}}</option>
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
                            <option @if($car->fuel_id == $fuel->id) ? {{'selected'}} @endif value="{{$fuel->id}}">{{$fuel->fuel}}</option>
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
                            <option @if($car->color_id == $color->id) ? {{'selected'}} @endif value="{{$color->id}}">{{$color->color}}</option>
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
                        <input type="text" placeholder="هتبيع بكام؟" name='price'  value='{{$car->price}}'/>
                        <p class="help-block help" data-validation="price"> </p>
                    </div>
                </div>
                <!-- End price input -->

                <!-- Start details textarea -->
                <div class="input px-2 my-2 w-full md:w-1/2 lg:w-2/3">
                    <p class="my-2 font-bold title">تفاصيل أكتر:</p>
                    <textarea id="details" value='{{$car->description}}'name="details" width="100%" cols="30" rows="3" placeholder="حاجات الزبون هيكون عايز يعرفها مثال: حالة الكوتشات, المساعدين, عاملة عمرة,الخ..."></textarea>
                </div>
                <!-- End details textarea -->

            </div>
       
        <!-- End Form -->

        <!-- Start images section -->
        <div class="-mx-2">
            <div class="px-2">
                <div class="flex flex-wrap text-center px-2">

                <?php $images = json_decode($car->image); ?>
                    @foreach($images as $image)
                    <!-- Start image input -->
                    <div class="inputs my-2 px-2 relative overflow-hidden h-64 w-full md:w-1/2 lg:w-1/3">
                        <input class="w-full h-full" data-get="0" type="file" name="image1" />
                        <div class="img relative w-full h-full">
                            <img class="img" data-preview="0" src='{{url("storage/" . $image)}}' />
                            <div class="tools">
                                <button class="delBtn delete px-2 py-1" type="button" data-del="0">
                                    <i class="far fa-times-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End image input -->
                    @endforeach    
              
                </div>
            </div>
        </div>
        <button >submit</button>
        </form>
    </div>
<!-- End images section -->
</div>
@push('js')
<script src="{{url('js/modules/selectbox/multi.js')}}"></script>
<script src="{{url('js/modules/ImagePreview.js')}}"></script>

<script src="{{url('js/modules/selectbox/single.js')}}"></script>
@endpush


@endsection