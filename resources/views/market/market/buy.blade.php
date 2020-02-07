@extends('market.index')
@section('title', 'عاملة كام؟ ׀ اشتري')

@push('css')
@endpush

@section('content')
<!--start Quick serarch -->
<div class="container px-2 mx-auto">
    <div class="quick-search">
        <p class="header">البحث السريع</p>
        <div class="-mx-2">
            <form class="inputs flex px-2 flex-wrap" action="#" method="post">
				<!-- Start Brand selection -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="brand">الماركة:</label>
                    <div data-wrapper="brand">
                        <select class="w-full " name="brand" id="brand">
                            <option>--اختر--</option>
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="help-block help"> </p>
                </div>
				<!-- End Brand selection -->

				<!-- Start model selection -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="model">الموديل:</label>
                    <div data-wrapper="model">
                        <select class="w-full " name="model" id="model">
                            <option>--اختر--</option>
                            @foreach($models as $model)
                            <option value="{{$model->id}}">{{$model->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="help-block help"> </p>
                </div>
				<!-- End model selection -->

				<!-- Start governorate selection -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="governorate">المحافظة:</label>
                    <div data-wrapper="governorate">
                        <select class="w-full " name="governorate" id="governorate">
                            <option>--اختر--</option>
                            @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->list_city}}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="help-block help"> </p>
                </div>
				<!-- End governorate selection -->

				<!-- Start outfitType selection -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="outfitType">نوع الهيكل:</label>
                    <div data-wrapper="outfitType">
                        <select class="w-full " name="outfitType" id="outfitType">
                            <option>--اختر--</option>
                            <option>لون</option>
                            <option>لون</option>
                            <option>لون</option>
                            <option>لون</option>
                            <option>لون</option>
                        </select>
                    </div>
                    <p class="help-block help"> </p>
                </div>
				<!-- End outfitType selection -->

				<!-- Start transmissionType selection -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="transmissionType">نوع الناقل:</label>
                    <div data-wrapper="transmissionType">
                        <select class="w-full " name="transmissionType" id="transmissionType">
                            <option>--اختر--</option>
                            <option>لون</option>
                            <option>لون</option>
                            <option>لون</option>
                            <option>لون</option>
                            <option>لون</option>
                        </select>
                    </div>
                    <p class="help-block help"> </p>
                </div>
				<!-- End transmissionType selection -->

				<!-- Start salary selection -->
                <div class="px-2 flex justify-between w-full mt-2 md:w-1/2 lg:w-2/5">
                    <div class="px-2 w-full">
                        <label class="my-2 font-bold title">السعر:</label>
                        <div class="flex">
                            <select class="w-full mx-2" data-placeholder="من" name="salaryFrom" id="salaryFrom">
                                <option>شيء2</option>
                                <option>شيء 1</option>
                            </select>
                            <select class="w-full" data-placeholder="إلى" name="salaryTo" id="salaryTo">
                                <option>1شيء</option>
                                <option>شيء 2</option>
                            </select>
                        </div>
                    </div>
                </div>
				<!-- End salary selection -->

				<!-- Start year selection -->
                <div class="px-2 flex justify-between w-full mt-2 sm:w-1/2 md:w-2/5">
                    <div class="px-2 w-full">
                        <label class="my-2 font-bold title">سنة الصنع:</label>
                        <div class="flex flex-justify-between">
                            <select class="w-full" data-placeholder="من" name="yearFrom" id="salaryFrom">
                                <option>شيء</option>
                                <option>شيء </option>
                            </select>
                            <select class="w-full" data-placeholder="إلى" name="yearTo" id="salaryTo">
                                <option>شيء</option>
                                <option>شيء </option>
                            </select>
                        </div>
                    </div>
                </div>
				<!-- End year selection -->

				<!-- Start button -->
                <div class="px-2 mt-4 flex justify-center items-end flex-grow">
                    <button class="indigo px-32" type="submit">بحث </button>
                </div>
				<!-- End button -->
            </form>
        </div>
    </div>
</div>
<!--End Quick serarch -->

<!-- Start Brnads -->
<div class="container mx-auto px-2 mt-8">
    <div class="flex flex-wrap">
        <div class="brand w-full sm:w-full lg:w-1/2">
            <p class="header">الماركات المتواجدة</p>
            <div class="-mx-2">
                <div class="flex px-2 flex-wrap">
					<!-- Start Brand Image -->
					<div class="img px-2 w-1/3">
						<img src="{{url('market/images/brands/1.png')}}" width="100" alt="brand" />
					</div>
					<!-- End Brand Image -->

					<!-- Start Brand Image -->
					<div class="img px-2 w-1/3">
						<img src="{{url('market/images/brands/2.png')}}" width="100" alt="brand" />
					</div>
					<!-- End Brand Image -->

					<!-- Start Brand Image -->
					<div class="img px-2 w-1/3">
						<img src="{{url('market/images/brands/3.png')}}" width="100" alt="brand" />
					</div>
					<!-- End Brand Image -->

					<!-- Start Brand Image -->
					<div class="img px-2 w-1/3">
						<img src="{{url('market/images/brands/4.png')}}" width="100" alt="brand" />
					</div>
					<!-- End Brand Image -->

					<!-- Start Brand Image -->
					<div class="img px-2 w-1/3">
						<img src="{{url('market/images/brands/5.png')}}" width="100" alt="brand" />
					</div>
					<!-- End Brand Image -->

					<!-- Start Brand Image -->
					<div class="img px-2 w-1/3">
						<img src="{{url('market/images/brands/6.png')}}" width="100" alt="brand" />
					</div>
					<!-- End Brand Image -->

					<!-- Start Brand Image -->
					<div class="img px-2 w-1/3">
						<img src="{{url('market/images/brands/7.png')}}" width="100" alt="brand" />
					</div>
					<!-- End Brand Image -->

					<!-- Start Brand Image -->
					<div class="img px-2 w-1/3">
						<img src="{{url('market/images/brands/8.png')}}" width="100" alt="brand" />
					</div>
					<!-- End Brand Image -->

					<!-- Start Brand Image -->
					<div class="img px-2 w-1/3">
						<img src="{{url('market/images/brands/9.png')}}" width="100" alt="brand" />
					</div>
					<!-- End Brand Image -->

                </div>
                <div class="px-2 mt-4 flex justify-center items-end">
                    <button class="indigo">المزيد </button>
                </div>
            </div>
        </div>
		<!-- Start Carousel -->
        <div class="carousel w-full sm:w-full lg:w-1/2">
            <p class="header">الأكثر مشاهدة</p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-4/6">
                    <div class="siema">
						<!-- Start Card -->
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
										<span class="color font-bold inline-block text-right ml-2">اللون:</span>
										<span class="text-left inline-block">شيء ما</span>
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
						<!-- End Card -->

						<!-- Start Card -->
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
										<span class="color font-bold inline-block text-right ml-2">اللون:</span>
										<span class="text-left inline-block">شيء ما</span>
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
						<!-- End Card -->

						<!-- Start Card -->
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
										<span class="color font-bold inline-block text-right ml-2">اللون:</span>
										<span class="text-left inline-block">شيء ما</span>
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
						<!-- End Card -->

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
    <!--!>
    <form class="flex flex-wrap px-2" action="#" method="post">
        <div class="px-2 my-2 flex-grow">
            <div>
                <div data-wrapper="price">
                    <select class="w-full " name="price" id="price">
                        <option>السعر</option>
                        <option>السعر</option>
                        <option>السعر</option>
                    </select>
                </div>
                <p class="help-block help"> </p>
            </div>
        </div>
        <div class="px-2 my-2 flex-grow">
            <div>
                <div data-wrapper="town">
                    <select class="w-full " name="town" id="town">
                        <option>المدينة</option>
                        <option>المدينة</option>
                        <option>المدينة</option>
                    </select>
                </div>
                <p class="help-block help"> </p>
            </div>
        </div>
        <div class="px-2 my-2 flex-grow">
            <div>
                <div data-wrapper="brand">
                    <select class="w-full " name="brand" id="brand">
                        <option>الماركة</option>
                        <option>الماركة</option>
                        <option>الماركة</option>
                    </select>
                </div>
                <p class="help-block help"> </p>
            </div>
        </div>
        <div class="px-2 my-2 flex-grow">
            <div>
                <div data-wrapper="model">
                    <select class="w-full " name="model" id="model">
                        <option>الموديل</option>
                        <option>الموديل</option>
                        <option>الموديل</option>
                    </select>
                </div>
                <p class="help-block help"> </p>
            </div>
        </div>
        <div class="px-2 my-2 flex-grow">
            <div>
                <div data-wrapper="destence">
                    <select class="w-full " name="destence" id="destence">
                        <option>المسافة</option>
                        <option>المسافة</option>
                        <option>المسافة</option>
                    </select>
                </div>
                <p class="help-block help"> </p>
            </div>
        </div>
        <div class="px-2 my-2 flex-grow">
            <div>
                <div data-wrapper="engine">
                    <select class="w-full " name="engine" id="engine">
                        <option>المحرك</option>
                        <option>المحرك</option>
                        <option>المحرك</option>
                    </select>
                </div>
                <p class="help-block help"> </p>
            </div>
        </div>
        <div class="px-2 my-2 flex-grow">
            <div>
                <div data-wrapper="transmetion">
                    <select class="w-full " name="transmetion" id="transmetion">
                        <option>الناقل</option>
                        <option>الناقل</option>
                        <option>الناقل</option>
                    </select>
                </div>
                <p class="help-block help"> </p>
            </div>
        </div>
        <div class="px-2 my-2 flex-grow">
            <div>
                <div data-wrapper="color">
                    <select class="w-full " name="color" id="color">
                        <option>اللون</option>
                        <option>اللون</option>
                        <option>اللون</option>
                    </select>
                </div>
                <p class="help-block help"> </p>
            </div>
        </div>
        <div class="px-2 my-2">
            <button class="indigo flex-grow" type="submit">بحث</button>
        </div>
    </form><!-->
</div>


<div class="flex flex-wrap px-2">
    @foreach($cars as $car)
    
 
    <div class="px-2 w-full md:w-1/2 lg:w-1/3">
      
       
        <div class="card my-2">
        <div class="carousel w-full sm:w-full lg">
        <?php  $images = explode(',' , $car->car2->image); ?>
        @foreach($images as $image)
        <img style="height: 300px;width: 100%" src="{{url($image)}}"
                alt="image" />
       @endforeach
        </div> 
            <section class="card-details border border-balck px-2 pt-2 flex flex-wrap">
                <h2 class="color font-bold inline-block text-right my-4 mb-2 w-full text-xl">{{$car->title}} </h2>
                <ul class="w-full lg:w-1/2">
                    <li class="my-2"><span class="color font-bold inline-block text-right ml-2">الماركة:</span><span
                            class="text-left inline-block">{{$car->brand->name}}</span></li>
                    <li class="my-2"><span class="color font-bold inline-block text-right ml-2">موديل:</span><span
                            class="text-left inline-block">{{$car->model->name}}</span></li>
                    <li class="my-2"><span class="color font-bold inline-block text-right ml-2">ناقل الحركة:</span><span
                            class="text-left inline-block">{{$car->driver}}</span></li>
                    <li class="my-2"><span class="color font-bold inline-block text-right ml-2">سعة الموتور:</span><span
                            class="text-left inline-block">{{$car->cc}}</span></li>
                </ul>
                <ul class="w-full lg:w-1/2">
                    <li class="my-2"><span class="color font-bold inline-block text-right ml-2">المدينة:</span><span
                            class="text-left inline-block">{{$car->city->list_city}}</span></li>
                    <li class="my-2"><span class="color font-bold inline-block text-right ml-2">اللون:</span><span
                            class="text-left inline-block"> {{$car->color}}</span></li>
                    <li class="my-2"><span class="color font-bold inline-block text-right ml-2">نوع الوقود:</span><span
                            class="text-left inline-block">{{$car->fuel}}</span></li>
                    <li class="my-2"><span class="color font-bold inline-block text-right ml-2">المسافة:</span><span
                            class="text-left inline-block">{{$car->kilometers}}</span></li>
                </ul>
                <div class="cost my-2 flex flex-wrap w-full px-2 sm:px-0">
                    <div class="money ml-4 w-1/2"><span class="text-green-500 text-xl font-bold ml-2">السعر:</span><span
                            class="text-lg">{{$car->price}}</span></div>
                            <a class="btn indigo" href="{{route('car/show', ['id' =>$car->id])}}">شاهد
                        المزيد</a>
                </div>
            </section>
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
