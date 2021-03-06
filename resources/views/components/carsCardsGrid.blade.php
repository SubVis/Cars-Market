<div class="container mx-auto">
    <div class="flex flex-wrap px-2">

        @foreach($cars as $car)
        <div class="px-2 w-full md:w-1/2 lg:w-1/3 relative">
            <!-- ====================== ADD CLASS HERE ====================== -->
            <div class="card card-special my-2">
                <!-- Start Car Images -->
                <div class=" @if($car->special) ? special  @endif absolute z-50" style="overflow: hidden"></div>

                <?php $images = json_decode($car->image); ?>
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
                    <div class="flex flex-wrap items-center">

                        <h2 class="color font-bold inline-block text-right my-4 mb-2 @if(!$car->user->id == Auth::user()->id ) w-full  @endif text-xl header">
                            {{$car->title}}
                        </h2>
                        @auth
                        @if($car->user->id == Auth::user()->id )
                        <div class="text-center">
                            <a class="btn indigo" href="{{ url('car/edit/'.$car->id)}}">اعلانك تعدّل عليه؟</a>
                        </div>
                        @endisset
                        @endauth
                    </div>

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

                        <a class="btn indigo" href="{{ url('car/'.$car->id . '/' . str_replace(' ', '-', $car->brand->name) . '/' . str_replace(' ', '-' , $car->title ))}}">شاهد المزيد</a>
                    </div>
                </section>
                <!-- End Car Details -->

            </div>
        </div>
        @endforeach
    </div>
</div>