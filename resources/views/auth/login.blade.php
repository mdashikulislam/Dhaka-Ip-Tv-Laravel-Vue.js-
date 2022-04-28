{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <title>Dhaka IP TV</title>--}}
{{--    <!-- Tell the browser to be responsive to screen width -->--}}
{{--    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">--}}
{{--    <!-- Bootstrap 3.3.7 -->--}}
{{--    <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="{{asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">--}}
{{--    <!-- Ionicons -->--}}
{{--    <link rel="stylesheet" href="{{asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">--}}
{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">--}}
{{--    <!-- iCheck -->--}}
{{--    <link rel="stylesheet" href="{{asset('backend/plugins/iCheck/square/blue.css')}}">--}}

{{--    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
{{--    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
{{--    <!--[if lt IE 9]>--}}
{{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--    <![endif]-->--}}

{{--    <!-- Google Font -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">--}}
{{--</head>--}}
{{--<body class="hold-transition login-page">--}}
{{--<div class="login-box">--}}
{{--    <div class="login-logo">--}}
{{--        <a href="javascript:void(0)"><b>Dhaka IP TV</b></a>--}}
{{--    </div>--}}
{{--    <!-- /.login-logo -->--}}
{{--    <div class="login-box-body">--}}
{{--        <p class="login-box-msg">Sign in to start your session</p>--}}

{{--        <form action="{{route('login')}}" method="post">--}}
{{--            @csrf--}}
{{--            <div class="form-group has-feedback">--}}
{{--                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{old('email')}}">--}}
{{--                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
{{--                @error('email')--}}
{{--                    <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>--}}
{{--                @enderror--}}

{{--            </div>--}}
{{--            <div class="form-group has-feedback">--}}
{{--                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{old('password')}}">--}}
{{--                <span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
{{--                @error('password')--}}
{{--                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-8">--}}
{{--                    <div class="checkbox icheck">--}}
{{--                        <label>--}}
{{--                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{old('remember') ? 'checked':''}}> Remember Me--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--                <div class="col-xs-4">--}}
{{--                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--            </div>--}}
{{--        </form>--}}
{{--        @if(Route::has('password.request'))--}}
{{--            <a href="{{route('password.request')}}">I forgot my password</a><br>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <!-- /.login-box-body -->--}}
{{--</div>--}}
{{--<!-- /.login-box -->--}}

{{--<!-- jQuery 3 -->--}}
{{--<script src="{{asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>--}}
{{--<!-- Bootstrap 3.3.7 -->--}}
{{--<script src="{{asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>--}}
{{--<!-- iCheck -->--}}
{{--<script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}"></script>--}}
{{--<script>--}}
{{--    $(function () {--}}
{{--        $('input').iCheck({--}}
{{--            checkboxClass: 'icheckbox_square-blue',--}}
{{--            radioClass: 'iradio_square-blue',--}}
{{--            increaseArea: '20%' /* optional */--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}


    <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/main/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 20:18:31 GMT -->
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
    <title>Login – {{getenv('APP_NAME')}}</title>
</head>

<body class="body">

<div class="sign section--bg" data-bg="{{asset('frontend/img/section/section.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- authorization form -->
                    <form action="{{route('login')}}" class="sign__form" method="POST">
                        @csrf
                        <a href="{{route('landing')}}" class="sign__logo">
                            <img src="{{asset('frontend/img/logo.svg')}}" alt="">
                        </a>
                        <div class="sign__group">
                            <input type="text" name="email" value="{{old('email')}}" class="sign__input @error('email') form-error-focus @enderror" placeholder="Email">
                            @error('email')
                            <span class="form-error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="sign__group">
                            <input type="password" name="password" class="sign__input @error('email') form-error-focus @enderror" placeholder="Password">
                            @error('password')
                            <span class="form-error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" name="remember" type="checkbox">
                            <label for="remember">Remember Me</label>
                        </div>
                        <button class="sign__btn" type="submit">Sign in</button>
                    </form>
                    <!-- end authorization form -->
                </div>
            </div>
        </div>
    </div>
</div>

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

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/main/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 20:18:31 GMT -->
</html>
