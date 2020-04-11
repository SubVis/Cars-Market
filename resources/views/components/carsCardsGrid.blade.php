<div class="container mx-auto">
    <div class="flex flex-wrap px-2">
        @foreach($cars as $car)
        <div class="px-2 w-full md:w-1/2 lg:w-1/3 wow bounceInDown" data-wow-duration="2s" data-wow-offset="20" data-wow-delay="$index s">
            <div class="card my-2">
                <!-- Start Car Images -->
                    <?php $images = json_decode( $car->image); ?>
   
                    <div class="siema">
                        @foreach($images as $image)
                        <div>
                            <img style="height: 300px;width: 100%" src="{{url('storage/'.$image)}}" alt="image" />
                        </div>
                        @endforeach
                    </div>
                <!-- End Car Images -->

                <!-- Start Car Details -->
                <section class="card-details border border-balck px-2 pt-2 flex flex-wrap">
                    <h2 class="color font-bold inline-block text-right my-4 mb-2 w-full text-xl header">{{$car->title}} </h2>

                    <ul class="w-full sm:w-1/2">
                        <li class="my-2">
                            <span class="color font-bold inline-block text-right ml-2">الماركة:</span>
                            <span class="text-left inline-block">{{$car->brand->name}}</span>
                        </li>
                        <li class="my-2">
                            <span class="color font-bold inline-block text-right ml-2">موديل:</span>
                            <span class="text-left inline-block">{{$car->model->name}}</span>
                        </li>
                        <li class="my-2">
                            <span class="color font-bold inline-block text-right ml-2">ناقل الحركة:</span>
                            <span class="text-left inline-block">{{$car->driver->driver}}</span>
                        </li>
                        <li class="my-2">
                            <span class="color font-bold inline-block text-right ml-2">سعة الموتور:</span>
                            <span class="text-left inline-block">{{$car->cc}}</span>
                        </li>
                    </ul>

                    <ul class="w-full sm:w-1/2">
                        <li class="my-2">
                            <span class="color font-bold inline-block text-right ml-2">المدينة:</span>
                            <span class="text-left inline-block">{{$car->city->city}}</span>
                        </li>
                        <li class="my-2">
                            <span class="color font-bold inline-block text-right ml-2">اللون:</span>
                            <span class="text-left inline-block"> {{$car->color->color}}</span>
                        </li>
                        <li class="my-2">
                            <span class="color font-bold inline-block text-right ml-2">نوع الوقود:</span>
                            <span class="text-left inline-block">{{$car->fuel->fuel}}</span>
                        </li>
                        <li class="my-2">
                            <span class="color font-bold inline-block text-right ml-2">المسافة:</span>
                            <span class="text-left inline-block">{{$car->kilometers}}</span>
                        </li>
                    </ul>

                    <div class="cost my-2 flex flex-wrap w-full px-2 sm:px-0">
                        <div class="money ml-4 w-1/2">
                            <span class="text-green-500 text-xl font-bold ml-2">السعر:</span>
                            <span class="text-lg">{{$car->price}}</span>
                        </div>
                        <a class="btn indigo" href="{{route('car/show', ['id' =>$car->id])}}">شاهد المزيد</a>
                    </div>
                </section>
                <!-- End Car Details -->

            </div>
        </div>
        @endforeach
    </div>
</div>