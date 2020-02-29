@extends('index')
	@section('title', 'عاملة كام؟')
	@push('css')

	@push('js')
	@endpush
@section('content')
<<<<<<< HEAD
<div class="flex justify-center items-center my-8"><img class="z-10 bgi" style="height: 700px" src="{{url('market/images/undraw_authentication_fsn5.svg')}}" alt="background"/>
=======
	<div class="flex justify-center items-center my-8"><img class="z-10 bgi" style="height: 700px" src="{{url('market/images/undraw_authentication_fsn5.svg')}}" alt="background"/>
>>>>>>> refs/remotes/origin/master
		<form class="z-20 center bg-white border border-gray-300 flex items-center flex-col p-6 w-full sm:w-3/4 md:w-2/4" action="{{route('register')}}" method="post">
			@csrf
			<p class="header">تسجيل الدخول</p>

				<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title"> الاسم:</p>
<<<<<<< HEAD
				<input type="text" name="name" placeholder="ahmed" auto-complete="off" required="required"/>
=======
				<input type="text" name="name" placeholder="mohamed" auto-complete="off" required="required"/>
>>>>>>> refs/remotes/origin/master
				<p class="help-block help"></p>
				 @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
			</div>

			<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title">البريد الإلكتروني:</p>
				<input type="text" name="email" placeholder="example@example.com" auto-complete="off" required="required"/>
				<p class="help-block help"></p>
				 @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
			</div>
			<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title">كلمة السر:</p>
				<input type="password" name="password" placeholder="أدخل كلمة السر" auto-complete="off" required="required"/>
				<p class="help-block help"></p>
				   @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
			</div>
			<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title">تأكيد كلمة السر:</p>
				<input type="password" name="password_confirmation" placeholder="أدخل كلمة السر" auto-complete="off" required="required"/>
				<p class="help-block help"></p>
			</div>

			<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title">رقم الهاتف</p>
<<<<<<< HEAD
				<input type="number" name='phone' placeholder="" auto-complete="off" required="required"/>
=======
				<input type="number" name='phone' placeholder="أدخل كلمة السر" auto-complete="off" required="required"/>
>>>>>>> refs/remotes/origin/master
				<p class="help-block help"></p>
				   @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
			</div>

			<div class="input px-2 my-2 w-full">
<<<<<<< HEAD
				<p class="my-2 font-bold title">المدينة </p>
				<input type="text" name='city' placeholder="الدينة" auto-complete="off" required="required"/>
				<p class="help-block help"></p>
				   @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
			</div>

			<div class="input px-2 my-2 w-full">
=======
>>>>>>> refs/remotes/origin/master
				<input class="w-auto" type="checkbox" name="notifications" value="1" required="required"/>
				<span class="mx-2">هل ترغب في تلقي اشعارات بأحدث السيارات؟</span>
			</div>

			<a class="text-gray-600 self-start my-2" href="{{route('login')}}"> لديك حساب بالفعل؟</a>
			<button class="btn indigo my-2" type="submit">تسجيل حساب</button>
		</form>
	</div>
@endsection
