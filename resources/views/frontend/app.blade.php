<!DOCTYPE html>

<html lang="en">

@include('frontend.masterlayout.head')

<body class="custom-cursor">

    <div class="page-wrapper">
        @include('frontend.masterlayout.topbar')
        @include('frontend.masterlayout.header')
        @yield('content')
        @include('frontend.masterlayout.footer')
        @include('frontend.masterlayout.mobile-nave')
        @include('frontend.masterlayout.script')
    </div>

</body>



</html>