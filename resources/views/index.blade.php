@include('layouts.header')
@include('layouts.navbar')
<!-- all other page content -->
<div class="loader bg-black z-50 top-0 left-0 fixed w-full h-screen flex justify-center items-center">
    <div class="lds-roller">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

@yield('content')

@include('layouts.footer')