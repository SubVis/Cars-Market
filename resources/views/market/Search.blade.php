@extends('index')
@section('title', 'عاملة كام؟ ׀ اشتري')

@push('css')
<link rel="stylesheet" href="{{url('css/selection.css')}}" />

@endpush

@section('content')

@include('components.quickSearch')

@include('components.carsCardsGrid')
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