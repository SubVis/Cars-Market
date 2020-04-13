<footer class="main_bg py-8 z-50 overflow-x-hidden">
	<div class="container mx-auto">
		<div class="text-center text-white mb-5">
			<h2 class="font-normal text-2xl">مستني ايه؟</h2>
			<a class="btn my-2 inline-block" href="{{route('sell')}}">أعلن عن عربيتك</a>
		</div>

		<div class="-mx-2">
			<div class="flex flex-wrap px-2">
				<!-- Start Links -->
				<ul class="text-white px-2 text-center w-full md:text-right md:w-1/2 lg:w-1/3">
					<li>
						<p class="text-xl font-semibold">أقسام الموقع</p>
					</li>
					<li>
						<a href="/">الرئيسية.</a>
					</li>
					<li>
						<a href="/buy">أحدث الإعلانات.</a>
					</li>
					<li>
						<a href="/sell">بيع عربيتك.</a>
					</li>
					<li>
						<a href="/buy">كل الإعلانات.</a>
					</li>
					<!-- 
					<li>
						<a href="#">كيفية استخدام الموقع.</a>
					</li>
					<li>
						<a href="#">المدونة.</a>
					</li>
					 -->
				</ul>
				<!-- End Links -->

				<!-- Start Products -->
				<ul class="text-white px-2 text-center w-full md:text-right md:w-1/2 lg:w-1/3">
					<li>
						<p class="text-xl font-semibold mt-5">أحدث الإعلانات</p>
					</li>
					<?php $cars = DB::table('cars')->paginate(3);?>
					@foreach($cars as $car)
					<li>
						<a class="flex flex-wrap justify-center items-center md:justify-start md:items-start" href="/product">
						    <div class="img h-16 w-16 bg-gray-800"></div>
						    <div class="text mr-3 my-auto">
						        <p class="w-full text-sm">{{$car->title}}</p>
						        <p class="text-gray-400 text-xs"></p>
						    </div>
						</a>
					</li>
					@endforeach
				</ul>
				<!-- End Products -->

				<!-- Start Social links -->
				<ul class="text-white px-2 text-center w-full md:w-1/3 md:text-right">
					<li>
						<p class="text-xl font-semibold">تواصل معنا</p>
					</li>
					<li class="inline-block mx-2">
						<a class="flex flex-wrap" href="#">
							<i class="fab fa-facebook-square text-5xl"></i>
						</a>
					</li>
					<li class="inline-block mx-2">
						<a class="flex flex-wrap" href="#">
							<i class="fab fa-instagram text-5xl"></i>
						</a>
					</li>
				</ul>
				<!-- End Social links -->
			</div>
		</div>
	</div>
</footer>

<script src="{{url('js/main.js')}}"></script>
<script src="{{url('js/libs/axios.js')}}"></script>
<script src="{{url('js/axios.js')}}"></script>
@stack('js')
</body>

</html>