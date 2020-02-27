@extends('index')
@section('title', 'عاملة كام؟ ׀ اشتري')

@push('css')
@endpush

@section('content')

@include('components.quickSearch')


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
