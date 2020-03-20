@extends('index')
		@section('title', ' سوق السيارات | تسجيل الدخول')
		@section('login-active', 'active')
		@push('css')

		@push('js')
		@endpush
 @section('content')
 <div class="flex justify-center items-center my-8"><img class="z-10 bgi" style="height: 600px" src="{{url('market/images/undraw_authentication_fsn5.svg ')}}" alt="background"/>
		{{$errors->all}}
		<form class="z-20 center bg-white border border-gray-300 flex items-center flex-col p-6 w-full sm:w-3/4 md:w-2/4" action="{{route('login')}}" method="post">
			<p class="header">تسجيل الدخول</p>
			@csrf
			<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title">البريد الإلكتروني:</p>
				<input type="text" name='email' placeholder="example@example.com" auto-complete="off" required="required"/>
				<p class="help-block help">هذا الحقل مطلوب.</p>
			</div>

			<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title">كلمة السر:</p>
				<input type="password" name='password' placeholder="أدخل كلمة السر" auto-complete="off" required="required"/>
				<p class="help-block help">هذا الحقل مطلوب.</p>
			</div>
			
			<a class="text-gray-600 self-start my-2" href="{{route('sign-up')}}">ليس لديك حساب؟</a>

			<button class="btn indigo my-2" type="submit">تسجيل دخول</button>
		</form>
	</div>

@endsection
