@extends('market.index')
	@section('title', 'عاملة كام؟')
	@push('css')

	@push('js')
	@endpush
@section('content')
	<div class="flex justify-center items-center my-8"><img class="z-10 bgi" style="height: 700px" src="{{url('market/images/undraw_authentication_fsn5.svg')}}" alt="background"/>
		<form class="z-20 center bg-white border border-gray-300 flex items-center flex-col p-6 w-full sm:w-3/4 md:w-2/4" action="#" method="">
			<p class="header">تسجيل الدخول</p>
			<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title">البريد الإلكتروني:</p>
				<input type="text" placeholder="example@example.com" auto-complete="off" required="required"/>
				<p class="help-block help"></p>
			</div>
			<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title">كلمة السر:</p>
				<input type="password" placeholder="أدخل كلمة السر" auto-complete="off" required="required"/>
				<p class="help-block help"></p>
			</div>
			<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title">تأكيد كلمة السر:</p>
				<input type="password" placeholder="أدخل كلمة السر" auto-complete="off" required="required"/>
				<p class="help-block help"></p>
			</div>

			<div class="input px-2 my-2 w-full">
				<p class="my-2 font-bold title">رقم الهاتف</p>
				<input type="number" placeholder="أدخل كلمة السر" auto-complete="off" required="required"/>
				<p class="help-block help"></p>
			</div>

			<div class="input px-2 my-2 w-full">
				<input class="w-auto" type="checkbox" name="notifications" value="1" required="required"/>
				<span class="mx-2">هل ترغب في تلقي اشعارات بأحدث السيارات؟</span>
			</div>

			<a class="text-gray-600 self-start my-2" href="{{route('login')}}"> لديك حساب بالفعل؟</a>
			<button class="btn indigo my-2" type="submit">تسجيل حساب</button>
		</form>
	</div>
@endsection
