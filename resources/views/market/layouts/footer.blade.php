<footer class="main_bg py-8 overflow-x-hidden">
      <div class="container mx-auto">
        <div class="text-center text-white mb-5">
          <h2 class="font-normal text-2xl">مستني ايه؟</h2><a class="btn my-2 inline-block" href="{{route('sell')}}">أعلن عن عربيتك</a>
        </div>
        <div class="-mx-2">
          <div class="flex flex-wrap px-2">
            <ul class="text-white px-2 text-center w-full md:text-right md:w-1/2 lg:w-1/3">
              <li>
                <p class="text-xl font-semibold">أقسام الموقع</p>
              </li>
              <li><a href="index.html">الرئيسية.</a></li>
              <li><a href="#">أحدث الإعلانات.</a></li>
              <li><a href="#">الأكثر شعبية.</a></li>
              <li><a href="sell.html">بيع عربيتك.</a></li>
              <li><a href="#">كل الإعلانات.</a></li>
              <li><a href="#">كيفية استخدام الموقع.</a></li>
              <li><a href="#">المدونة.</a></li>
            </ul>
            <ul class="text-white px-2 text-center w-full md:text-right md:w-1/2 lg:w-1/3">
              <li>
                <p class="text-xl font-semibold mt-5">أحدث الإعلانات</p>
              </li>
              <li><a class="flex flex-wrap justify-center items-center md:justify-start md:items-start" href="product.html">
                  <div class="img h-16 w-16 bg-gray-800"></div>
                  <div class="text mr-3 my-auto">
                    <p class="w-full text-sm">فيات حالة ممتازة</p>
                    <p class="text-gray-400 text-xs">12/5/2019</p>
                  </div></a></li>
              <li><a class="flex flex-wrap justify-center items-center md:justify-start md:items-start" href="product.html">
                  <div class="img h-16 w-16 bg-gray-800"></div>
                  <div class="text mr-3 my-auto">
                    <p class="w-full text-sm">فيات حالة ممتازة</p>
                    <p class="text-gray-400 text-xs">12/5/2019</p>
                  </div></a></li>
              <li><a class="flex flex-wrap justify-center items-center md:justify-start md:items-start" href="product.html">
                  <div class="img h-16 w-16 bg-gray-800"></div>
                  <div class="text mr-3 my-auto">
                    <p class="w-full text-sm">فيات حالة ممتازة</p>
                    <p class="text-gray-400 text-xs">12/5/2019</p>
                  </div></a></li>
            </ul>
            <ul class="text-white px-2 text-center w-full md:w-1/3 md:text-right">
              <li>
                <p class="text-xl font-semibold">تواصل معنا</p>
              </li>
              <li class="inline-block mx-2"><a class="flex flex-wrap" href="#"><i class="fab fa-facebook-square text-5xl"></i></a></li>
              <li class="inline-block mx-2"><a class="flex flex-wrap" href="#"><i class="fab fa-instagram text-5xl"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    @stack('js')
    <script src="{{url('market/js/main.js')}}"></script>
    <script src="{{url('market/js/libs/axios.js')}}"></script>
    <script src="{{url('market/js/axios.js')}}"></script>

</body>
</html>