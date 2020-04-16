@extends('index')
@section('title', 'سوق السيارات ׀ اشتري')
@section('buy-active', 'active')


@push('css')
<link rel="stylesheet" href="{{url('css/selection.css')}}" />

@endpush

@section('content')

@include('components.quickSearch')

<!-- Start Brnads -->
<div class="container mx-auto px-2 mt-8">
    <div class="flex flex-wrap">

    <div class="brand w-full">
    <p class="header">الماركات المتواجدة</p>
    <div class="-mx-2 my-5">
        <div class="flex px-2 flex-wrap">
            @foreach($brands as $b)
           <?php  $brand = $b->brand ?>
            <!-- Start Brand Image -->
            <div class="img px-2 w-1/2 md:w-2/12  mb-8">
                <a href="{{ route( 'brand', ['id' => $brand->id, 'name' => str_replace(' ', '-' ,  $brand->name) ])  }}" class="text-center inline-block">
                    <img src="{{url('storage/brands/'.$brand->image )}}" width="100" alt="{{$brand->name}}" />
                    {{$brand->name}}
                </a>
            </div>
           
            @endforeach
            <!-- End Brand Image -->

        </div>
        <div class="px-2 mt-4 flex justify-center items-end">
            <a href="{{route('brands')}}" class="btn indigo">المزيد</a>
        </div>
    </div>

    </div>
</div>
</div>
<!-- End Brnads -->

<div class="container mx-auto px-2 mt-8">
    <p class="header">أحدث الإعلانات</p>
    <!--  
        @include('components.filter')
    -->
</div>
@include('components.carsCardsGrid')

<!-- Start Pagenation -->
@include('components.pagenation')

<!-- End Pagenation -->

<div class="shape flex justify-center w-full overflow-x-hidden">
    <div class="all" style="transform: rotate(-6deg)">
        <p class="text-center mb-4">عايز تبيع</p><a class="btn yellow" href="{{route('sell')}}">اعلن عن عربيتك</a>
    </div>
</div>

@include('components.news')

@endsection

@push('js')
<script src="{{url('js/libs/siema.min.js')}}"></script>
<script src="{{url('js/modules/selectbox/single.js')}}"></script>
<script>
    window.addEventListener('load', function() {
        const siemas = document.querySelectorAll('.siema');
        for (const siema of siemas) {
            let s = new Siema({
                selector: siema,
                easing: 'ease-in-out',

                perPage: 1,
                startIndex: -1,
                loop: true,
                rtl: true,
            })

        };
    })
</script>

@endpush