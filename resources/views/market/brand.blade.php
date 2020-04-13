@extends('index')
@section('title', ' سوق السيارات | تسجيل الدخول')
@section('login-active', 'active')

@section('content')

    <section class="my-8">
        <div class="container mx-auto">
            <h2 class="header">{{$brand->name}}</h2>
            <div class="flex my-8 justify-center content-center">
            <p class="text-gray-600">لا يوجد سيارات لهذه الماركة حالياً</p>
        </div>
            @include('components.carsCardsGrid')
        </div>
    </section>

@push('js')

<script src="{{url('js/libs/siema.min.js')}}"></script>
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
@endsection