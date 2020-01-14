@extends('market.index')
@section('title', 'عاملة كام؟')
@push('css')

@push('js')
@endpush
@section('content')
<div class="container mx-auto mb-5 px-2">
<!-- Start product header -->
<?php
 $images = explode(',' , $car2->image);
?>

    <p class="header">{{$car->title}}</p>
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <!-- Start Carousel -->
            <div class="relative carousel w-full sm:w-3/5">
                <div class="siema">
                    <!-- Put car image here -->
                    @foreach($images as $i => $image)
                    <img class="w-full" data-index="{{$i++}}" src="{{url($image)}}" />
                  @endforeach
                </div>
                <div class="navigation flex flex-wrap justify-center"></div>
                <div class="carousel-btns">
                    <button class="next"> <i class="fas fa-arrow-right"></i></button>
                    <button class="prev"> <i class="fas fa-arrow-left"></i></button>
                </div>
            </div>
        </div>
    </div>
<!-- End product header -->

    <div class="product--details my-12">
        <div class="flex flex-wrap justify-center sm:justify-start">
            <!-- Start right column -->
            <ul class="pl-2 w-full sm:w-1/3">
                <!-- Start Brand -->
                <li class="my-2">
                    <span class="color font-bold w-32 inline-block text-right" id="brand">الماركة:</span>
                    <span class="text-left inline-block">{{$car->brand}}</span>
                </li>
                <!-- End brand -->

                <!-- Start model -->
                <li class="my-2">
                    <span class="color font-bold w-32 inline-block text-right" id="model">موديل:</span>
                    <span class="text-left inline-block">{{$car->model}}</span>
                </li>
                <!-- End model -->

                <!-- Start transmition -->
                <li class="my-2">
                    <span class="color font-bold w-32 inline-block text-right" id='transmission'>ناقل الحركة:</span>
                    <span class="text-left inline-block">{{$car->driver}}</span>
                </li>
                <!-- End transmition -->

                <!-- Start cc -->
                <li class="my-2">
                    <span class="color font-bold w-32 inline-block text-right" id='cc'>سعة الموتور:</span>
                    <span class="text-left inline-block">{{$car->cc}} </span>
                </li>
                <!-- End cc -->

            </ul>
            <!-- End right column -->

            <!-- Start left column -->
            <ul class="w-full sm:w-1/3">
                <!-- Start town -->
                <li class="my-2">
                    <span class="color font-bold w-32 inline-block text-right" id="town">المدينة:</span>
                    <span class="text-left inline-block">{{$car->city}}</span>
                </li>
                <!-- End town -->

                <!-- Start fuel -->
                <li class="my-2">
                    <span class="color font-bold w-32 inline-block text-right" id="fuel">اللون:</span>
                    <span class="text-left inline-block">{{$car->color}}</span>
                </li>
                <!-- End fuel -->

                <!-- Start color -->
                <li class="my-2">
                    <span class="color font-bold w-32 inline-block text-right" id="color">نوع الوقود:</span>
                    <span class="text-left inline-block">{{$car->fuel}}</span>
                </li>
                <!-- End color -->

                <!-- Start kilometers -->
                <li class="my-2">
                    <span class="color font-bold w-32 inline-block text-right" id="kilometers">المسافة:</span>
                    <span class="text-left inline-block">{{$car->kilometers}}</span>
                </li>
                <!-- End kilometers -->
            </ul>
            <!-- End left column -->

            <div class="cost my-2 w-full px-2 sm:px-0 my-5">
                <span class="text-green-500 w-32 text-2xl font-bold inline-block text-right">السعر:</span>
                <span class="text-left inline-block text-2xl">{{$car->price}}</span>
                <div class="product--btns ">
                    <span>أَضف إلى المفضلة</span>
                    <button class="fav mx-4"><i class="fas fa-heart"></i></button>
                </div>
            </div>

            <div class="sellerNumber rounded-lg flex justify-center items-center mx-auto lg:w-1/3" id="sellerNumber">
                <div class="overlay py-5 px-2">
                    <p class="text-center text-white md:text-xl">اضغط هنا لأرقام التواصل</p>
                    <p class="text-center text-white mt-3 md:text-lg">متنساش تقول للبايع انك جاي من موقعنا </p>
                </div>
                <div class="number hidden px-2">
                    <p class="text-center text-white my-3 md:text-lg">متنساش تقول للبايع انك جاي من موقعنا </p>
                    <p class="text-center text-white font-bold my-3 md:text-lg">01153297653</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start suggestion -->
    <div class="suggestion my-4 overflow-hidden">
        <p class="header">عربيات من نفس الفئة السعرية</p>
        <div class="-mx-2 mt-3">
            <div class="flex px-2 flex-wrap justify-start">
                <!-- Start Card -->
                @foreach($relate_cars as $car)
                <div class="px-2 w-full md:w-1/2 lg:w-1/3">
                    <div class="minicard my-2">
                        <!-- Start card Image -->
                        <img style="height: 300px;width: 100%"  src="https://via.placeholder.com/600" alt="image" />
                        <!-- End card Image -->

                        <section class="card-details border border-balck px-2 pt-2 flex flex-wrap">
                            <!-- Start Specifictions -->
                            <ul class="w-1/2">
                                <li class="my-2">
                                    <span class="color font-bold inline-block text-right ml-2">الماركة:</span>
                                    <span class="text-left inline-block">شيء ما</span>
                                </li>
                                <li class="my-2">
                                    <span class="color font-bold inline-block text-right ml-2">ناقل الحركة:</span>
                                    <span class="text-left inline-block">شيء ما</span>
                                </li>
                            </ul>
                            <ul class="w-1/2">
                                <li class="my-2">
                                    <span class="color font-bold inline-block text-right ml-2">المدينة:</span>
                                    <span class="text-left inline-block">شيء ما</span>
                                </li>
                                <li class="my-2">
                                    <span class="color font-bold inline-block text-right ml-2">السعر:</span>
                                    <span class="text-left inline-block">{{$car->price}}</span>
                                </li>
                            </ul>
                            <!-- End Specifictions -->

                            <!-- Start Button -->
                            <div class="w-full flex justify-center items-center py-2">
                                <a class="btn indigo" href="product.html">شاهد المزيد</a>
                            </div>
                            <!-- End Button -->
                        </section>
                    </div>
                </div>
                <!-- End Card -->   
              @endforeach
            </div>
        </div>
    </div>
    <!-- End suggestion -->
</div>
@push('js')
<script src="{{url('market/js/libs/siema.min.js')}}"></script>
<script src="{{url('market/js/modules/selectbox/single.js')}}"></script>
<script>
    const mySiema = new Siema({
        selector: '.siema',
        easing: 'ease-out',
        perPage: 1,
        startIndex: -1,
        loop: true,
        rtl: true,
    });
    setInterval(() => mySiema.next(), 2000);

    // Seller Number Overlay 
    var productOverlay = document.querySelector('#sellerNumber .overlay');
    var productOwner = document.querySelector('#sellerNumber .number');
    
    productOverlay.addEventListener('click', () => {
    productOverlay.style.display = 'none';
    productOwner.style.display = 'block' 
    }); 

</script>

@endpush
@endsection
