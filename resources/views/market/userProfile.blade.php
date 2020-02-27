@extends('index')
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
            <div class="flex justify-center items-center">
                <span class="text-gray-600">لا يوجد</span>
            </div>
        </div>
        <!-- End User Shares -->

        <!-- Start User favourites -->
        <div class="user-favs my-8">
            <div class="suggestion my-4 overflow-hidden">
                <p class="header">المفضلة</p>
                <div class="-mx-2 mt-3">
                    <div class="flex px-2 flex-wrap justify-center">    
                        <div class="px-2 w-full md:w-1/2 lg:w-1/3">
                            @include('components.minicard')
                        </div>
                        <div class="px-2 w-full md:w-1/2 lg:w-1/3">
                            @include('components.minicard')
                        </div>
                        <div class="px-2 w-full md:w-1/2 lg:w-1/3">
                            @include('components.minicard')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End User favourites -->

    </div>
@endsection
