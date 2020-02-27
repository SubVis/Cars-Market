  @extends('index')
  @section('title', 'سوق السيارات')
  <?php $status = 'active' ?>
  @section('content')
  <div class="container mx-auto px-2">
      <section class="banner-one h-screen flex flex-col justify-center items-center">
          <h1 class="text-center text-2xl font-bold">منصة سوق السيارات منصة متخصصة في بيع السيارات المستعملة</h1>
          <div class="flex flex-wrap items-center flex-col-reverse md:flex-row">
              <div class="text w-full md:w-1/2">
                  <p class="font-bold text-lg">سوق السيارات المصري مكان بيجتمع فيه أصحاب العربيات عشان يبيعو عربياتهم بس
                      المشوار بيبقى صعب جداً خصوصاً لو أقرب سوق ليك بعيد عنك. عشان كدة عملنا المنصة للسوق تقدر تعرض عربيتك
                      للبيع<span class="color"> من غير أي فلوس أو فوائد للمنصة.</span></p>
              </div>
              <div class="img w-full md:w-1/3 mr-auto mb-5 md:mb-0"><img src="{{url('images/SVG/undraw_Vehicle_sale_a645.svg')}}" alt="بيع سيارات مستعملة" /></div>
          </div>
          <div class="w-full flex flex-wrap justify-center items-center my-5">
              <p class="text-center font-bold text-lg w-full mb-2">يبقى ليه تنزل؟</p><a class="btn indigo" href="{{route('sell')}}">أعلن عن عربيتك</a>
          </div>
      </section>
  </div>
  <div class="shape flex justify-center w-full overflow-x-hidden">
      <div class="all" style="transform: rotate(-6deg)">
          <p class="text-center mb-4">ليه تبيع في سوق السيارات؟</p><a class="btn yellow hidden" href="{{route('sell')}}"></a>
      </div>
  </div>
  <div class="container mx-auto px-2 md:mt-8">
      <section class="feats overflow-hidden">
          <div class="-mx-2">
              <div class="flex flex-wrap px-2">
                  <div class="px-2 w-full md:w-1/3">
                      <div class="feat flex flex-col justify-center items-center">
                          <p class="header">آمن</p><img class="my-5" src="{{url('images/SVG/undraw_Security_on_ff2u.svg')}}" alt="آمن" />
                      </div>
                  </div>
                  <div class="px-2 w-full md:w-1/3">
                      <div class="feat flex flex-col justify-center items-center">
                          <p class="header">وفر تكاليف السوق</p><img class="my-5" src="{{url('images/SVG/undraw_chilling_8tii.svg')}}" alt="وفر تكاليف السوق" />
                      </div>
                  </div>
                  <div class="px-2 w-full md:w-1/3">
                      <div class="feat flex flex-col justify-center items-center">
                          <p class="header">قارن بين كل الأسعار</p><img class="my-5" src="{{url('images/SVG/undraw_all_the_data_h4ki.svg')}}" alt="قارن بين كل الأسعار" />
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <div class="shape flex justify-center w-full overflow-x-hidden">
      <div class="all" style="transform: rotate(-6deg)">
          <p class="text-center mb-4">ازاي تبيع في سوق السيارات؟</p><a class="btn yellow hidden" href="sell.html"></a>
      </div>
  </div>
  <div class="container mx-auto px-2 mb-8">
      <section class="feats overflow-hidden">
          <div class="-mx-2">
              <div class="flex flex-wrap px-2">
                  <ul class="w-full flex flex-col justify-center items-center sm:justify-center sm:items-start sm:w-1/2">
                      <li class="mb-2"><i class="far color fa-check-circle mx-2"> </i><span>سجل حساب.</span></li>
                      <li class="mb-2"><i class="far color fa-check-circle mx-2"> </i><span>اختر نوع السيارة.</span></li>
                      <li class="mb-2"><i class="far color fa-check-circle mx-2"> </i><span>اختر الموديل.</span></li>
                      <li class="mb-2"><i class="far color fa-check-circle mx-2"> </i><span>كمل البيانات.</span></li>
                      <li class="mb-2"><i class="far color fa-check-circle mx-2"> </i><span>خلاص كدة.</span></li>
                  </ul><img class="w-full sm:w-1/2" src="{{url('images/SVG/undraw_order_confirmed_1m3v.svg')}}" alt="تم تسجيل السيارة بنجاح" />
              </div>
          </div>
      </section>
  </div>
  @endsection