@extends('index')
@section('title', ' سوق السيارات | تسجيل الدخول')
@section('login-active', 'active')

@section('content')

<section class="my-8">
    <div class="container mx-auto">
        
        <div class="brand w-full">
            <h2 class="header">جميع الماركات</h2>
            <div class="-mx-2">
                <div class="flex px-2 flex-wrap">
                    <!-- Start Brand Image -->
                    <div class="img px-2 w-1/2 md:w-2/12  mb-8">
                        <a href="{{route('brand')}}" class="text-center inline-block">
                            <img src="{{url('images/brands/1.png')}}" width="100" alt="brand" />
                            ههههههه
                        </a>
                    </div>
                    <!-- End Brand Image -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection