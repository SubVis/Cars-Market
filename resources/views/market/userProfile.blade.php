@extends('index')
    @section('title', 'عاملة كام؟')
<<<<<<< HEAD
    @section('user-active', 'active')
=======
>>>>>>> refs/remotes/origin/master
    @push('css')

    @push('js')
    @endpush
  @section('content')
<<<<<<< HEAD
   
=======
    
>>>>>>> refs/remotes/origin/master
    <div class="container mx-auto px-4 md:px-0">
        <!-- Start User details -->
        <div class="user-details">
            <p class="header">التفاصيل</p>
            <ul class="flex flex-wrap">
                <!-- Start User name -->
                <li class="inline-block flex-grow w-full md:w-1/3">
                    <span class="text-gray-600 text-md">الاسم:</span>
<<<<<<< HEAD
                    <span class="mx-2 text-black">{{$user->name}}</span>
=======
                    <span class="mx-2 text-black">أبوحميد</span>
>>>>>>> refs/remotes/origin/master
                </li>
                <!-- End User name -->

                <!-- Start User phone number -->
                <li class="inline-block flex-grow w-full md:w-1/3">
                    <span class="text-gray-600 text-md">رقم الهاتف:</span>
<<<<<<< HEAD
                    <span class="mx-2 text-black">{{$user->phone}}</span>
=======
                    <span class="mx-2 text-black">+0123456789</span>
>>>>>>> refs/remotes/origin/master
                </li>
                <!-- End User phone number -->

                <!-- Start User town -->
                <li class="inline-block flex-grow w-full md:w-1/3">
                    <span class="text-gray-600 text-md">المدينة:</span>
<<<<<<< HEAD
                    <span class="mx-2 text-black">{{$user->city}}</span>
=======
                    <span class="mx-2 text-black">الزقازيق</span>
>>>>>>> refs/remotes/origin/master
                </li>
                <!-- End User town -->
            </ul>
        </div>
        <!-- End User details -->

        <!-- Start User Shares -->
        <div class="user-shares mt-8">
            <p class="header">المشاركات</p>
<<<<<<< HEAD
            @include('components.carsCardsGrid')
            @if(count($cars) == 0 )
            <div class="flex justify-center items-center">
                <span class="text-gray-600">لا يوجد</span>
            </div>
            @endif
=======
            <div class="flex justify-center items-center">
                <span class="text-gray-600">لا يوجد</span>
            </div>
>>>>>>> refs/remotes/origin/master
        </div>
        <!-- End User Shares -->

        <!-- Start User favourites -->
        <div class="user-favs my-8">
            <div class="suggestion my-4 overflow-hidden">
<<<<<<< HEAD
                <p class="header"><!--المفضلة--></p>
               
                <div class="-mx-2 mt-3">
                    <div class="flex px-2 flex-wrap justify-center">    
                        <div class="px-2 w-full md:w-1/2 lg:w-1/3">
                            
                        </div>
                        <div class="px-2 w-full md:w-1/2 lg:w-1/3">
                           
                        </div>
                        <div class="px-2 w-full md:w-1/2 lg:w-1/3">
                            
=======
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
>>>>>>> refs/remotes/origin/master
                        </div>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD

=======
>>>>>>> refs/remotes/origin/master
        <!-- End User favourites -->

    </div>
@endsection
<<<<<<< HEAD
@push('js')

<script src="{{url('js/libs/siema.min.js')}}"></script>
<script src="{{url('js/modules/selectbox/single.js')}}"></script>
<script>
    window.addEventListener('load', function() {
        const siemas = document.querySelectorAll('.siema');
        for (const siema of siemas) {
            new Siema({
                selector: siema,
                easing: 'ease-out',
                perPage: 1,
                startIndex: -1,
                loop: true,
                rtl: true,
            })
        };
    })
</script>
@endpush
=======
>>>>>>> refs/remotes/origin/master
