@extends('index')
@section('title', ' سوق السيارات | تسجيل الدخول')
@section('login-active', 'active')

@section('content')

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