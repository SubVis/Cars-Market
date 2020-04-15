@extends('index')
@section('title', 'عاملة كام؟')
@push('css')

@push('js')
@endpush
@section('content')
<div class="container mx-auto mb-5 px-2 ">
    <!-- Start product header -->
  
    <?php
   
    $images = json_decode( $car->image);
    $comforts = json_decode($car->comfort);

    $windows = json_decode( $car->windows);
    $sounds = json_decode( $car->sounds);
    $safes = json_decode( $car->safe);
    $other_futures = json_decode( $car->other_future);
    
    ?>
    
    <p class="header" style="margin-top: 2rem;margin-bottom: 2rem;">{{$car->title}}</p>
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <!-- Start Carousel -->
            <div class="relative carousel w-full sm:w-3/5">
                <div class="siema">
                    <!-- Put car image here -->
                    @foreach($images as $i => $image)
                    <img class="w-full" data-index="{{$i++}}" src="{{url('storage/'.$image)}}" />
                    @endforeach
                </div>
                <div class="navigation flex flex-wrap justify-center"></div>
                <div class="carousel-btns">
                    <button class="next" id="next"> <i class="fas fa-arrow-right"></i></button>
                    <button class="prev" id="prev"> <i class="fas fa-arrow-left"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End product header -->

    <h2 class="header text-center mx-auto">التفاصيل</h2>
    
    <div class="product--details my-12">
        <div class="flex flex-wrap justify-center sm:justify-start">
            <!-- Start right column -->
            <div class="w-1/2 sm:w-1/3 lg:w-1/3">
                <ul class="w-full">
                    <!-- Start Brand -->
                    <li class="my-2">
                        <span class="color font-bold w-32 inline-block text-right" id="brand">الماركة:</span>
                        <span class="text-left inline-block">{{$car->brand->name}}</span>
                    </li>
                    <!-- End brand -->

                    <!-- Start model -->
                    <li class="my-2">
                        <span class="color font-bold w-32 inline-block text-right" id="model">موديل:</span>
                        <span class="text-left inline-block">{{$car->model->name}}</span>
                    </li>
                    <!-- End model -->

                    <!-- Start transmition -->
                    <li class="my-2">
                        <span class="color font-bold w-32 inline-block text-right" id='transmission'>ناقل الحركة:</span>
                        <span class="text-left inline-block">{{$car->driver->driver}}</span>
                    </li>
                    <!-- End transmition -->

                    <!-- Start cc -->
                    <li class="my-2">
                        <span class="color font-bold w-32 inline-block text-right" id='cc'>سعة الموتور:</span>
                        <span class="text-left inline-block">{{$car->cc}} </span>
                    </li>
                    <!-- End cc -->

                </ul>
            </div>
            <!-- End right column -->

            <!-- Start left column -->
            <div class="w-1/2 sm:w-1/3 lg:w-1/3">
                <ul class="w-full ">
                    <!-- Start town -->
                    <li class="my-2">
                        <span class="color font-bold w-32 inline-block text-right" id="town">المدينة:</span>
                        <span class="text-left inline-block">{{$car->city->city}}</span>
                    </li>
                    <!-- End town -->

                    <!-- Start fuel -->
                    <li class="my-2">
                        <span class="color font-bold w-32 inline-block text-right" id="fuel">اللون:</span>
                        <span class="text-left inline-block">{{$car->color->color}}</span>
                    </li>
                    <!-- End fuel -->

                    <!-- Start color -->
                    <li class="my-2">
                        <span class="color font-bold w-32 inline-block text-right" id="color">نوع الوقود:</span>
                        <span class="text-left inline-block">{{$car->fuel->fuel}}</span>
                    </li>
                    <!-- End color -->

                    <!-- Start kilometers -->
                    <li class="my-2">
                        <span class="color font-bold w-32 inline-block text-right" id="kilometers">المسافة:</span>
                        <span class="text-left inline-block">{{$car->kilometers}}</span>
                    </li>
                    <!-- End kilometers -->
                </ul>
            </div>
            <!-- End left column -->

            <!-- Start sellerNumber -->
            <div class="sellerNumber my-5 sm:my-auto rounded-lg flex justify-center items-center mx-auto sm:w-1/3" id="sellerNumber">
                <div class="overlay py-5 px-2">
                    <p class="text-center text-white md:text-xl">اضغط هنا لأرقام التواصل</p>
                    <p class="text-center text-white mt-3 md:text-lg">متنساش تقول للبايع انك جاي من موقعنا </p>
                </div>
                <div class="number hidden px-2">
                    <p class="text-center text-white my-3 md:text-lg">متنساش تقول للبايع انك جاي من موقعنا </p>
                    <p class="text-center text-white font-bold my-3 md:text-lg">{{$car->user->phone}}</p>
                </div>
            </div>
            <!-- End sellerNumber -->

            <!-- Start price -->
            <div class="cost my-2 flex justify-between items-center w-full px-2 sm:px-0 my-5">
                <div>
                    <span class="text-green-500 text-2xl font-bold inline-block text-right">السعر:</span>
                    <span class="text-left inline-block text-2xl">{{$car->price}}</span>
                </div>
                <div class="product--btns ">
                    <span>أَضف إلى المفضلة</span>
                    <button class="fav mx-4">
                        <i class="fas fa-heart fa-2x"></i>
                    </button>
                </div>
            </div>
            <!-- End price -->
        </div>

        <!-- Start more feats -->
        <div class="feats flex flex-wrap">
            <!-- Start single feat -->
            <div class="w-1/2 sm:w-1/3">
                <h3 class="header">وسائل الراحة</h3>
                <ul class="justify-between">
                @foreach($comforts as $comfort)
                    <li class="lnline-block">{{$comfort}}</li>
                @endforeach

                   
                </ul>
            </div>
            <!-- End single feat -->

            <!-- Start single feat -->
            <div class="w-1/2 sm:w-1/3">
                <h3 class="header">نوافذ</h3>
                <ul class="justify-between">
                @foreach($windows as $window)
                    <li class="lnline-block"> {{$window}}</li>
                 @endforeach
                </ul>
            </div>
            <!-- End single feat -->

            <!-- Start single feat -->
            <div class="w-1/2  sm:w-1/3">
                <h3 class="header">نظام الصوت</h3>
                <ul class="justify-between">
                @foreach($sounds as $sound)
                 <li class="lnline-block"> {{$sound}}</li>
                @endforeach
        
                </ul>
            </div>
            <!-- End single feat -->

            <!-- Start single feat -->
            <div class="w-1/2 sm:w-1/3">
                <h3 class="header">وسائل الأمان</h3>
                <ul class="justify-between">
                @foreach($safes as $safe)
                    <li class="lnline-block">{{$safe}}</li>
                @endforeach
                 
                </ul>
            </div>
            <!-- End single feat -->

            <!-- Start single feat -->
            <div class="w-1/2 sm:w-1/3">
                <h3 class="header">مميزات أخرى</h3>
                <ul class="justify-between">
                @foreach($other_futures as $other_future)
                    <li class="lnline-block"> {{$other_future}}</li>
                 @endforeach
                   
                </ul>
            </div>
            <!-- End single feat -->

        </div>
        <!-- End more feats -->
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

                        <!-- Start Car Images -->
                        <div class="carousel w-full sm:w-full lg">
                            <?php  $images = json_decode( $car->image);?>
                            <div class="siema">
                                @foreach($images as $image)
                                <div>
                                    <img style="height: 300px;width: 100%" src="{{url('storage/'.$image)}}" alt="image" />
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End Car Images -->


                        <section class="card-details border border-balck px-2 pt-2 flex flex-wrap">
                            <!-- Start Specifictions -->
                            <ul class="w-1/2">
                                <li class="my-2">
                                    <span class="color font-bold inline-block text-right ml-2">الماركة:</span>
                                    <span class="text-left inline-block">{{$car->brand->name}}</span>
                                </li>
                                <li class="my-2">
                                    <span class="color font-bold inline-block text-right ml-2">ناقل الحركة:</span>
                                    <span class="text-left inline-block">{{$car->driver->driver}}</span>
                                </li>
                            </ul>
                            <ul class="w-1/2">
                                <li class="my-2">
                                    <span class="color font-bold inline-block text-right ml-2">المدينة:</span>
                                    <span class="text-left inline-block">{{$car->city->city}}</span>
                                </li>
                                <li class="my-2">
                                    <span class="color font-bold inline-block text-right ml-2">السعر:</span>
                                    <span class="text-left inline-block">{{$car->price}}</span>
                                </li>
                            </ul>
                            <!-- End Specifictions -->

                            <!-- Start Button -->
                            <div class="w-full flex justify-center items-center py-2">
                                <a class="btn indigo" href="{{ url('car/'.$car->id . '/' . str_replace(' ', '-', $car->brand->name) . '/' . str_replace(' ', '-' , $car->title ))}}">شاهد المزيد</a>
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
<script src="{{url('js/libs/siema.min.js')}}"></script>
<script src="{{url('js/modules/selectbox/single.js')}}"></script>
<script>
    window.addEventListener('load', function() {
        const siemas = document.querySelectorAll('.siema');

        for (const siema of siemas) {
            let mySiema = new Siema({
                selector: siema,
                easing: 'ease-out',
                perPage: 1,
                startIndex: -1,
                loop: true,
                rtl: true,
            })
            setInterval(() => mySiema.next(), 2000);


            document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
            document.querySelector('.next').addEventListener('click', () => mySiema.next());
        };

        // Seller Number Overlay 
        var productOverlay = document.querySelector('#sellerNumber .overlay');
        var productOwner = document.querySelector('#sellerNumber .number');

        productOverlay.addEventListener('click', () => {
            productOverlay.style.display = 'none';
            productOwner.style.display = 'block'
        });
    })
</script>

@endpush
@endsection