<nav class="flex items-center justify-between flex-wrap p-6 indigo">
    <div class="flex items-center flex-no-shrink flex-grow text-white mr-6"><a
            class="font-semibold text-xl tracking-tight" href="{{route('home')}}">عاملة كام؟</a></div>
    <div class="block md:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-white hover:border-white" id="closeNavbtn">
            <svg class="h-3 w-3" viewbox="0 0 20 20" fill="white" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <div class="w-full hidden flex-grow text-center md:flex md:items-center md:w-auto" id="collapse">
        <div class="text-sm md:flex-grow"><a class="block mt-4 text-white mr-4 md:inline-block md:mt-0 hover:text-white"
                href="userProfile"> <i class="fa fa-user mx-2"> </i>أبوحميد</a><a
                class="block mt-4 text-white mr-4 md:inline-block md:mt-0 hover:text-white"
                href="{{route('home')}}">الرئيسية</a><a
                class="block mt-4 text-white mr-4 md:inline-block md:mt-0 hover:text-white" href="{{route('buy')}}">اشتري</a><a
                class="block mt-4 text-white mr-4 md:inline-block md:mt-0 hover:text-white active"
                href="{{route('sell')}}">بيع</a><a class="block mt-4 text-white mr-4 md:inline-block md:mt-0 hover:text-white"
                href="#">كيفية الاستخدام </a><a
                class="block mt-4 text-white mr-4 md:inline-block md:mt-0 hover:text-white" href="{{route('blog')}}">المدونة</a>
        </div>
        <div class="mt-5 md:mt-0"><a class="btn yellow mr-5 mt-4 mb-2 md:my-0" href="{{route('login')}}">سجل دخولك</a></div>
    </div>
</nav>

