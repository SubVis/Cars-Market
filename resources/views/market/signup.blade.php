@extends('index')
@section('title', 'عاملة كام؟')
@push('css')
<link rel="stylesheet" href="{{url('css/selection.css')}}" />

@endpush
@section('content')
<div class="flex justify-center items-center my-8">
	<form class="z-20 center bg-white border border-gray-300 flex items-center flex-col p-6 w-full sm:w-3/4 md:w-2/4" action="{{route('register')}}" method="post">
		@csrf
		<p class="header">تسجيل حساب</p>

		<div class="input px-2 my-2 w-full">
			<label class="my-2 font-bold title"> الاسم:</label>
			<input type="text" name="name" placeholder="أدخل اسمك" auto-complete="off" required="required" />
			@if ($errors->has('name'))
			<span class="invalid-feedback help-block help" role="alert">
				<strong>{{ $errors->first('name') }}</strong>
			</span>
			@endif
		</div>

		<div class="input px-2 my-2 w-full">
			<label class="my-2 font-bold title">البريد الإلكتروني:</label>
			<input type="text" name="email" placeholder="example@example.com" auto-complete="off" required="required" />
			@if ($errors->has('email'))
			<span class="invalid-feedback help-block help" role="alert">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
			@endif
		</div>
		<div class="input px-2 my-2 w-full">
			<label class="my-2 font-bold title">كلمة السر:</label>
			<input type="password" name="password" placeholder="أدخل كلمة السر" auto-complete="off" required="required" />
			@if ($errors->has('password'))
			<span class="invalid-feedback help-block help" role="alert">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
			@endif
		</div>
		<div class="input px-2 my-2 w-full">
			<label class="my-2 font-bold title">تأكيد كلمة السر:</label>
			<input type="password" name="password_confirmation" placeholder="أدخل كلمة السر" auto-complete="off" required="required" />
			<p class="help-block help"></p>
		</div>

		<div class="input px-2 my-2 w-full">
			<label class="my-2 font-bold title">رقم الهاتف</label>
			<input type="number" name='phone' placeholder="" auto-complete="off" required="required" />
			@if ($errors->has('phone'))
			<span class="invalid-feedback help-block help" role="alert">
				<strong>{{ $errors->first('phone') }}</strong>
			</span>
			@endif
		</div>

		<!-- Start governorate selection -->
		<div class="w-full px-2 my-2 w-full">
			<label class="my-2 inline-block font-bold title pl-2" for="governorate">المحافظة:</label>
			<div data-wrapper="governorate">
				<select class="w-full singleSelect" name="city" id="governorate">
					<option>اختر محافظة اللي عايز تشتري منها</option>
					@foreach($cities as $city)
					<option value="{{$city->id}}">{{$city->city}}</option>
					@endforeach
				</select>
			</div>
			@if ($errors->has('city'))
			<span class="invalid-feedback help-block help" role="alert">
				<strong>{{ $errors->first('city') }}</strong>
			</span>
			@endif
		</div>
		<!-- End governorate selection -->

		<!--
			<div class="input px-2 my-2 w-full">
				<input class="w-auto" type="checkbox" name="notifications" value="1" />
				<span class="mx-2">هل ترغب في تلقي اشعارات بأحدث السيارات؟</span>
			</div>
		-->
		<a class="text-gray-600 self-start my-2" href="{{route('login')}}"> لديك حساب بالفعل؟</a>
		<button class="btn indigo my-2" type="submit">تسجيل حساب</button>
	</form>
</div>


@endsection
@push('js')
<script src="{{url('js/modules/selectbox/single.js')}}"></script>

@endpush
