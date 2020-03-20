<!--start Quick serarch -->
<div class="container px-2 mx-auto">
    <div class="quick-search">
        <p class="header">البحث السريع</p>
        <div class="-mx-2">
            <form class="inputs flex px-2 flex-wrap" action="{{route('search')}}" method="post">
                @csrf
                <!-- Start Brand selection -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="brand">الماركة:</label>
                    <div data-wrapper="brand" >
                        <select class="w-full singleSelect" name="brand" id="brand">
                            <option>--اختر--</option>
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="help-block help"> </p>
                </div>
                <!-- End Brand selection -->

                <!-- Start model selection -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="model">الموديل:</label>
                    <div data-wrapper="model">
                        <select class="w-full singleSelect" name="model" id="model">
                            <option>--اختر--</option>
                            @foreach($models as $model)
                            <option value="{{$model->id}}">{{$model->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="help-block help"> </p>
                </div>
                <!-- End model selection -->

                <!-- Start governorate selection -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="governorate">المحافظة:</label>
                    <div data-wrapper="governorate">
                        <select class="w-full singleSelect" name="city" id="governorate">
                            <option>--اختر--</option>
                            @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->city}}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="help-block help"> </p>
                </div>
                <!-- End governorate selection -->


                <!-- Start transmissionType selection -->
                <div class="w-full md:w-1/2 lg:w-1/3  my-2 px-2">
                    <label class="my-2 inline-block font-bold title pl-2" for="transmissionType">نوع الناقل:</label>
                    <div data-wrapper="transmissionType">
                        <select class="w-full singleSelect" name="driver" id="transmissionType">
                            <option>--اختر--</option>
                               @foreach($drivers as $driver)
                        <option value="{{$driver->id}}">{{$driver->driver}}</option>
                        @endforeach
                        </select>
                    </div>
                    <p class="help-block help"> </p>
                </div>
                <!-- End transmissionType selection -->

                <!-- Start salary selection -->
                <div class="px-2 flex justify-between w-full mt-2 md:w-1/2 lg:w-2/5">
                    <div class="px-2 w-full">
                        <label class="my-2 font-bold title">السعر:</label>
                        <div class="flex">
                            <select class="w-full mx-2 singleSelect" data-placeholder="من" name="salaryFrom" id="salaryFrom">
                                <option>شيء2</option>
                                <option>شيء 1</option>
                            </select>
                            <select class="w-full singleSelect" data-placeholder="إلى" name="salaryTo" id="salaryTo">
                                <option>1شيء</option>
                                <option>شيء 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End salary selection -->
                
         <!-- Start year selection -->
         <div class="px-2 flex justify-between w-full mt-2 sm:w-1/2 md:w-2/5">
                    <div class="px-2 w-full">
                        <label class="my-2 font-bold title">سنة الصنع:</label>
                        <div class="flex flex-justify-between">
                            <select class="w-full singleSelect" data-placeholder="من" name="yearFrom" id="yearFrom">
                            <option>--اختر--</option>
                            @foreach($modelyear as $year)
                        <option value="{{$year->id}}">{{$year->year}}</option>
                        @endforeach
                            </select>
                            <select class="w-full singleSelect" data-placeholder="إلى" name="yearTo" id="yearTo">
                            <option>--اختر--</option>
                            @foreach($modelyear as $year)
                        <option value="{{$year->id}}">{{$year->year}}</option>
                        @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End year selection -->

       

                <!-- Start button -->
                <div class="px-2 mt-4 flex justify-center items-end flex-grow">
                    <button class="indigo px-32" type="submit">بحث </button>
                </div>
                <!-- End button -->
            </form>
        </div>
    </div>
</div>
<!--End Quick serarch -->