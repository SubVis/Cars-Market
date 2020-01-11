@extends('market.index')
    @section('title', 'عاملة كام؟')
    @push('css')

    @push('js')
    @endpush
  @section('content')
<div class="container mx-auto px-4 md:px-0">
    <!-- Start User details -->
    <div class="user-details">
        <p class="header">التفاصيل</p>
        <ul class="flex flex-wrap">
            <!-- Start User name -->
            <li class="inline-block flex-grow w-full md:w-1/3">
                <span class="text-gray-600 text-md">الاسم:</span>
                <span class="mx-2 text-black">أبوحميد</span>
            </li>
            <!-- End User name -->

            <!-- Start User phone number -->
            <li class="inline-block flex-grow w-full md:w-1/3">
                <span class="text-gray-600 text-md">رقم الهاتف:</span>
                <span class="mx-2 text-black">+0123456789</span>
            </li>
            <!-- End User phone number -->

            <!-- Start User town -->
            <li class="inline-block flex-grow w-full md:w-1/3">
                <span class="text-gray-600 text-md">المدينة:</span>
                <span class="mx-2 text-black">الزقازيق</span>
             </li>
             <!-- End User town -->
        </ul>
    </div>
    <!-- End User details -->

    <!-- Start User Shares -->
    <div class="user-shares mt-8">
        <p class="header">المشاركات</p>
        <div class="flex justify-center items-center"><span class="text-gray-600">لا يوجد</span></div>
    </div>
    <!-- End User Shares -->

    <!-- Start User favourites -->
    <div class="user-favs my-8">
        <div class="suggestion my-4 overflow-hidden">
            <p class="header">المفضلة</p>
            <div class="-mx-2 mt-3">
                
                <div class="flex px-2 flex-wrap justify-center">

                    <!-- Start Card -->
                    <div class="px-2 w-full sm:w-1/3">
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
                    </div>
                    <!-- End Card -->

                    <!-- Start Card -->
                    <div class="px-2 w-full sm:w-1/3">
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
                    </div>
                    <!-- End Card -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End User favourites -->

</div>
@endsection