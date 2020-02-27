@extends('index')
@section('title', 'عاملة كام؟')
@push('css')
<link rel="stylesheet" href="{{url('css/selection.css')}}" />

@endpush
@section('content')
    <div class="container mx-auto">
        <p class="header">المعلومات الأساسية</p>
            <!-- Start Form 1 -->
            @include('components.detailsForm')
            <!-- End Form 1 -->
        </div>
    </div>

    <div class="container mx-auto pb-32" style="display: none" id="form2">
        <!-- Start Form 2 -->
        @include('components.ImageForm')
        <!-- End Form 2 -->
    </div>
@push('js')
<script src="{{url('js/modules/selectbox/multi.js')}}"></script>
<script src="{{url('js/modules/ImagePreview.js')}}"></script>

<script src="{{url('js/modules/selectbox/single.js')}}"></script>
@endpush


@endsection
