@extends('frontend.layouts.app')
@section('content')
    @include('frontend.inc.page-title',['pageTitle'=>'About Us'])
    <!-- about -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title section__title--mb"><b>PlaceholderPro</b> – Best Place for Live Tv</h2>
                </div>
                <!-- end section title -->

                <!-- section text -->
                <div class="col-12">
                    <p class="section__text">PlaceholderPro is a online free live tv service. It's a buffer less tv service. PlaceholderPro Provide 24/7 Live Streaming Server for IPTV. If you looking for a great streaming service to help you save money and cut the cord with cable, but not willing to part with news channels, live sports, movie, music etc. We’ve ranked the Best Live TV Streaming Services</p>
                </div>
                <!-- end section text -->

                <!-- feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature">
                        <i class="icon ion-ios-tv feature__icon"></i>
                        <h3 class="feature__title">Ultra HD</h3>
                        <p class="feature__text">You can enjoy high quality video tv service</p>
                    </div>
                </div>
                <!-- end feature -->
                <!-- feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature">
                        <i class="icon ion-ios-globe feature__icon"></i>
                        <h3 class="feature__title">Multi Country Channel </h3>
                        <p class="feature__text">You can find here lost of country tv channel and you can enjoy various type of tv show</p>
                    </div>
                </div>
                <!-- end feature -->
                <!-- feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature">
                        <i class="icon ion-ios-film feature__icon"></i>
                        <h3 class="feature__title">Buffer less</h3>
                        <p class="feature__text">You can enjoy our services for free without any hindrance</p>
                    </div>
                </div>
                <!-- end feature -->
            </div>
        </div>
    </section>
    <!-- end about -->
@endsection
