<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/main/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 20:15:28 GMT -->
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
    @stack('css')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>
</head>
<body class="body">
@php
    $currentRoute = Route::currentRouteName();
@endphp

<!-- header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__content">
                    <!-- header logo -->
                    <a href="{{route('landing')}}" class="header__logo">
                        <img src="{{asset('frontend/img/logo.svg')}}" alt="">
                    </a>
                    <!-- end header logo -->

                    <!-- header nav -->
                    <ul class="header__nav">
                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a class="dropdown-toggle header__nav-link {{$currentRoute == 'landing' ? 'header__nav-link--active':''}}" href="{{route('landing')}}"  >Home</a>
                        </li>
                        <!-- end dropdown -->

                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a class="dropdown-toggle header__nav-link {{$currentRoute == 'live.tv' ? 'header__nav-link--active':''}}" href="{{route('live.tv')}}"  >Live Tv</a>
                        </li>
                        <!-- end dropdown -->
                    </ul>
                    <!-- end header nav -->

                    <!-- header auth -->
                    <div class="header__auth">
                        <form action="#" class="header__search">
                            <input class="header__search-input" type="text" placeholder="Search...">
                            <button class="header__search-button" type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>
                            <button class="header__search-close" type="button">
                                <i class="icon ion-md-close"></i>
                            </button>
                        </form>

                        <button class="header__search-btn" type="button">
                            <i class="icon ion-ios-search"></i>
                        </button>

                        <a href="signin.html" class="header__sign-in">
                            <i class="icon ion-ios-log-in"></i>
                            <span>sign in</span>
                        </a>
                        <a href="signin.html" class="header__sign-in">
                            <i class="icon ion-ios-log-in"></i>
                            <span>sign up</span>
                        </a>
                    </div>
                    <!-- end header auth -->

                    <!-- header menu btn -->
                    <button class="header__btn" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- end header menu btn -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<!-- home -->
{{--<section class="home">--}}
{{--    <!-- home bg -->--}}
{{--    <div class="owl-carousel home__bg">--}}
{{--        <div class="item home__cover" data-bg="{{asset('frontend/img/home/home__bg.jpg')}}"></div>--}}
{{--        <div class="item home__cover" data-bg="{{asset('frontend/img/home/home__bg2.jpg')}}"></div>--}}
{{--        <div class="item home__cover" data-bg="{{asset('frontend/img/home/home__bg3.jpg')}}"></div>--}}
{{--        <div class="item home__cover" data-bg="{{asset('frontend/img/home/home__bg4.jpg')}}"></div>--}}
{{--        <div class="item home__cover" data-bg="{{asset('frontend/img/home/home__bg5.jpg')}}"></div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- end home -->

@section('content')

@show

<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer__content">
                    <a href="{{route('landing')}}" class="footer__logo">
                        <img src="{{asset('frontend/img/logo.svg')}}" alt="">
                    </a>

                    <span class="footer__copyright">© HOTFLIX, 2019—2021 <br> Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></span>

                    <nav class="footer__nav">
                        <a href="about.html">About Us</a>
                        <a href="contacts.html">Contacts</a>
                        <a href="privacy.html">Privacy policy</a>
                    </nav>

                    <button class="footer__back" type="button">
                        <i class="icon ion-ios-arrow-round-up"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

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
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
<script>
    $(function($) {
        $("img.lazy").Lazy();
    });
</script>
@stack('js')
</body>

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/main/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 20:17:12 GMT -->
</html>
