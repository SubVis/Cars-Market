@extends('market.index')
@section('title', 'عاملة كام؟')
@push('css')

@push('js')
@endpush
@section('content')
    <div class="container mx-auto">
        <p class="header">المعلومات الأساسية</p>
            <!-- Start Form 1 -->
            @include('market.components.detailsForm')
            <!-- End Form 1 -->
        </div>
    </div>

    <div class="container mx-auto pb-32" style="display: none" id="form2">
        <!-- Start Form 2 -->
        @include('market.components.ImageForm')
        <!-- End Form 2 -->
    </div>
@push('js')
<script src="{{url('market/js/modules/selectbox/multi.js')}}"></script>
<script src="{{url('market/js/modules/ImagePreview.js')}}"></script>

<script src="{{url('market/js/modules/selectbox/single.js')}}"></script>
@endpush


@endsection
