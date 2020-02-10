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

@include('market.components.carsCardsGrid')

<!-- Start Pagenation -->
@include('market.components.pagenation')

<!-- End Pagenation -->

<div class="shape flex justify-center w-full overflow-x-hidden">
    <div class="all" style="transform: rotate(-6deg)">
        <p class="text-center mb-4">عايز تبيع</p><a class="btn yellow" href="{{route('sell')}}">اعلن عن عربيتك</a>
    </div>
</div>

@include('market.components.news')

@endsection

@push('js')
<script src="{{url('market/js/libs/siema.min.js')}}"></script>
<script src="{{url('market/js/modules/selectbox/single.js')}}"></script>
<script>
window.addEventListener('load', function() {
    const siemas = document.querySelectorAll('.siema');
    for(const siema of siemas) {
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
