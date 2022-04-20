<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/main/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 20:18:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/plyr.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/default-skin.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{asset('frontend/icon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{asset('frontend/icon/favicon-32x32.png')}}">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>@yield('title')</title>
</head>

<body class="body">

<!-- page 404 -->
<div class="page-404 section--bg" data-bg="{{asset('frontend/img/section/section.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-404__wrap">
                    <div class="page-404__content">
                        <h1 class="page-404__title">@yield('code')</h1>
                        <p class="page-404__text">@yield('message')</p>
                        <a href="{{route('landing')}}" class="page-404__btn">go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page 404 -->

<!-- JS -->
<script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.mCustomScrollbar.min.js')}}"></script>
<script src="{{asset('frontend/js/wNumb.js')}}"></script>
<script src="{{asset('frontend/js/nouislider.min.js')}}"></script>
<script src="{{asset('frontend/js/plyr.min.js')}}"></script>
<script src="{{asset('frontend/js/photoswipe.min.js')}}"></script>
<script src="{{asset('frontend/js/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/main/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 20:18:31 GMT -->
</html>
