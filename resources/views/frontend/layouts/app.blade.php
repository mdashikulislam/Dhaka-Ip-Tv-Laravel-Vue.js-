<!DOCTYPE html>
<html lang="en">
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

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    <meta name="google-site-verification" content="jafgsa-MWMIc5iTtUVyQmlD3ivzKxglrpifQ3_uIx8k" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T3QTC48DHS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-T3QTC48DHS');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WV8XVVH');</script>
    <!-- End Google Tag Manager -->

    @stack('css')
</head>
<body class="body">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WV8XVVH"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
                        <img src="{{asset('frontend/img/logo.svg')}}" alt="{{getenv('APP_NAME')}}">
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
                        <form action="{{route('search')}}" class="header__search">
                            <input class="header__search-input" value="{{\request()->input('keyword') ? : ''}}" name="keyword" type="text" placeholder="Search...">
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

{{--                        <a href="signin.html" class="header__sign-in">--}}
{{--                            <i class="icon ion-ios-log-in"></i>--}}
{{--                            <span>sign in</span>--}}
{{--                        </a>--}}
{{--                        <a href="signin.html" class="header__sign-in">--}}
{{--                            <i class="icon ion-ios-log-in"></i>--}}
{{--                            <span>sign up</span>--}}
{{--                        </a>--}}
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
<!-- page title -->


@section('content')

@show

<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer__content">
                    <a href="{{route('landing')}}" class="footer__logo">
                        <img src="{{asset('frontend/img/logo.svg')}}" alt="{{getenv('APP_NAME')}}">
                    </a>

                    <span class="footer__copyright">© HOTFLIX, 2019—2021 <br> Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></span>

                    <nav class="footer__nav">
                        <a href="{{route('about.us')}}">About Us</a>
                        <a href="{{route('contact.us')}}">Contacts</a>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
<script>
    $(function($) {
        $("img.lazy").Lazy();
    });
</script>
@stack('js')
</body>
</html>
@include('sweetalert::alert')
