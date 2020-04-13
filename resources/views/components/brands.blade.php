<div class="brand w-full">
    <p class="header">الماركات المتواجدة</p>
    <div class="-mx-2 my-5">
        <div class="flex px-2 flex-wrap">
            @foreach($brands as $brand)
            <!-- Start Brand Image -->
            <div class="img px-2 w-1/2 md:w-2/12  mb-8">
                <a href="{{ route( 'brand', ['id' => $brand->id])  }}" class="text-center inline-block">
                    <img src="{{url('storage/brands/'.$brand->image )}}" width="100" alt="{{$brand->name}}" />
                    {{$brand->name}}
                </a>
            </div>
            @endforeach
            <!-- End Brand Image -->

        </div>
        <div class="px-2 mt-4 flex justify-center items-end">
            <a href="/brands" class="btn indigo">المزيد</a>
        </div>
    </div>