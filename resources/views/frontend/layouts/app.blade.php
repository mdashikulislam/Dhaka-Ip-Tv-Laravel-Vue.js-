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
    <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>
</head>

<body class="body">
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
                            <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <i class="icon ion-ios-arrow-down"></i></a>

                            <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuHome">
                                <li><a href="index-2.html">Home style 1</a></li>
                                <li><a href="index2.html">Home style 2</a></li>
                                <li><a href="index3.html">Home style 3</a></li>
                            </ul>
                        </li>
                        <!-- end dropdown -->

                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog <i class="icon ion-ios-arrow-down"></i></a>

                            <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
                                <li><a href="catalog.html">Catalog style 1</a></li>
                                <li><a href="catalog2.html">Catalog style 2</a></li>
                                <li><a href="details.html">Details style 1</a></li>
                                <li><a href="details2.html">Details style 2</a></li>
                            </ul>
                        </li>
                        <!-- end dropdown -->

                        <li class="header__nav-item">
                            <a href="pricing.html" class="header__nav-link">Pricing plan</a>
                        </li>

                        <!-- dropdown -->
                        <li class="dropdown header__nav-item">
                            <a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

                            <ul class="dropdown-menu header__dropdown-menu scrollbar-dropdown" aria-labelledby="dropdownMenuMore">
                                <li><a href="about.html">About</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="faq.html">Help center</a></li>
                                <li><a href="privacy.html">Privacy policy</a></li>
                                <li><a href="https://dmitryvolkov.me/demo/hotflix2.1/admin/index.html" target="_blank">Admin pages</a></li>
                                <li><a href="signin.html">Sign in</a></li>
                                <li><a href="signup.html">Sign up</a></li>
                                <li><a href="forgot.html">Forgot password</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
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

                        <!-- dropdown -->
                        <div class="dropdown header__lang">
                            <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN <i class="icon ion-ios-arrow-down"></i></a>

                            <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">Russian</a></li>
                            </ul>
                        </div>
                        <!-- end dropdown -->

                        <a href="signin.html" class="header__sign-in">
                            <i class="icon ion-ios-log-in"></i>
                            <span>sign in</span>
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
</body>

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/main/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 20:17:12 GMT -->
</html>
