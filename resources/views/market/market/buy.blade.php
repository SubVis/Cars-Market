@extends('market.index')
@section('title', 'عاملة كام؟ ׀ اشتري')

@push('css')
@endpush

@section('content')

@include('market.components.quickSearch')

<!-- Start Brnads -->
<div class="container mx-auto px-2 mt-8">
    <div class="flex flex-wrap">
        @include('market.components.brands')
        </div>
		<!-- Start Carousel -->
        <div class="carousel w-full sm:w-full lg:w-1/2">
            <p class="header">الأكثر مشاهدة</p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-4/6">
                    <div class="siema">
                    @include('market.components.minicard')
                    @include('market.components.minicard')
                    @include('market.components.minicard')
                    </div>
                </div>
            </div>
        </div>
		<!-- End Carousel -->
    </div>
</div>
<!-- End Brnads -->

<div class="container mx-auto px-2 mt-8">
    <p class="header">أحدث الإعلانات</p>
    <!--  
        @include('market.components.filter')
    -->
</div>


<div class="flex flex-wrap px-2">
    @foreach($cars as $car)
    <div class="px-2 w-full md:w-1/2 lg:w-1/3">
        <div class="card my-2">
            <!-- Start Car Images -->
            <div class="carousel w-full sm:w-full lg">
                <?php  $images = explode(',' , $car->car2->image); ?>
                <div class="siema">
                    @foreach($images as $image)
                    <div>
                        <img style="height: 300px;width: 100%" src="{{url($image)}}" alt="image" />
                    </div>
                    @endforeach
                </div>
            </div> 
            <!-- End Car Images -->
            
            <!-- Start Car Details -->
            <section class="card-details border border-balck px-2 pt-2 flex flex-wrap">
                <h2 class="color font-bold inline-block text-right my-4 mb-2 w-full text-xl">{{$car->title}} </h2>

                <ul class="w-full lg:w-1/2">
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
                        <span class="text-left inline-block">{{$car->driver}}</span>
                    </li>
                    <li class="my-2">
                        <span class="color font-bold inline-block text-right ml-2">سعة الموتور:</span>
                        <span class="text-left inline-block">{{$car->cc}}</span>
                    </li>
                </ul>
                
                <ul class="w-full lg:w-1/2">
                    <li class="my-2">
                        <span class="color font-bold inline-block text-right ml-2">المدينة:</span>
                        <span class="text-left inline-block">{{$car->city->list_city}}</span>
                    </li>
                    <li class="my-2">
                        <span class="color font-bold inline-block text-right ml-2">اللون:</span>
                        <span class="text-left inline-block"> {{$car->color}}</span>
                    </li>
                    <li class="my-2">
                        <span class="color font-bold inline-block text-right ml-2">نوع الوقود:</span>
                        <span class="text-left inline-block">{{$car->fuel}}</span>
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

<div class="flex justify-center my-6 pagenation">
    {{$cars->links()}}
    <ul class="flex border border-grey">
        <li><a class="block px-3 py-2 color hover:text-black " href="#">السابق</a></li>
        <li><a class="block border-r border-grey-light px-3 py-2 color  active hover:text-black" href="#">1</a></li>
        <li><a class="block border-r border-grey-light px-3 py-2 color hover:text-black" href="#">2</a></li>
        <li><a class="block text-white bg-blue px-3 py-2 color border-r border-grey-light hover:text-black"
                href="#">3</a></li>
        <li><a class="block px-3 py-2 color border-r border-grey hover:text-black" href="#">التالي</a></li>
    </ul>
</div>
<div class="shape flex justify-center w-full overflow-x-hidden">
    <div class="all" style="transform: rotate(-6deg)">
        <p class="text-center mb-4">عايز تبيع</p><a class="btn yellow" href="{{route('sell')}}">اعلن عن عربيتك</a>
    </div>
</div>
<div class="news flex flex-wrap flex-col justify-center items-center" style="margin: 90px 0">
    <p class="header">النشرة البريدية</p>
    <p class="text-center">لو انت تاجر أو بتحب تعرف اخر تتابع السوق النشرة هتعرفك آخر الأخبار أول بأول</p>
    <form class="w-full max-w-sm my-8">
        <div class="flex flex-wrap items-center py-2 px-4">
            <input
                class="appearance-none border border-indigo-700 bg-transparent text-gray-700 mr-3 py-2 px-2 leading-tight flex-grow w-full  md:w-auto md:ml-2 focus:outline-none"
                type="text" placeholder="أدخل رقم الواتس" aria-label="whatsApp number" />
            <button class="indigo mx-2 w-full block md:w-auto my-5 md:my-0 " type="button">اشترك الآن</button>
        </div>
    </form>
</div>


@endsection


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

</script>

@endpush
