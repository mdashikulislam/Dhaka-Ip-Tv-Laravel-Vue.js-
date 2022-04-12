@extends('frontend.layouts.app')
@section('content')
    <section class="section section--details section--bg" data-bg="">
        <!-- details content -->
        <div class="container">
            <div class="row">
                <!-- title -->
                <div class="col-12">
                    <h1 class="section__title section__title--mb">| {{$channel->title}}</h1>
                </div>
                <!-- end title -->

                <!-- content -->
                <div class="col-12 col-lg-3 col-md-3 col-xl-3">
                    <div class="card card--details">
                        <div class="row">
                            <!-- card cover -->
                            <div class="col-12">
                                <div class="card__cover">
                                    @if($channel->logo_type == 'Url')
                                        <img src="{{$channel->preview_url}}" alt="{{$channel->title}}">
                                    @else
                                        <img src="{{\Illuminate\Support\Facades\Storage::disk('local')->url($channel->preview_file)}}" alt="{{$channel->title}}">
                                    @endif
                                    {!! ratingShow($channel->ratings->avg('rating')) !!}
                                </div>
                                <div class="card__description">
                                    {{strip_tags($channel->description)}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end content -->
                <!-- player -->
                <div class="col-12 col-xl-9" style="min-height: 350px">
                    <video
                        id="my-video"
                        class="video-js vjs-big-play-centered vjs-fill"
                        controls
                        preload="auto"
                        poster="{{$channel->logo_type == 'Url' ? $channel->preview_url : \Illuminate\Support\Facades\Storage::disk('local')->url($channel->preview_file)}}"
                        data-setup="{}">
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                </div>
                <!-- end player -->
            </div>
        </div>
        <!-- end details content -->
    </section>
    <section class="content">
        <div class="content__head">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title section__title--sidebar">You may also like</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($otherChannel as $ch)
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                        {!! getChannelCard($ch,$ch->ratings()->average('rating')) !!}
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- content -->
{{--    <section class="content">--}}
{{--        <div class="content__head">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <!-- content title -->--}}
{{--                        <h2 class="content__title">Discover</h2>--}}
{{--                        <!-- end content title -->--}}
{{--                        <!-- content tabs nav -->--}}
{{--                        <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link active" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- end content tabs nav -->--}}

{{--                        <!-- content mobile tabs nav -->--}}
{{--                        <div class="content__mobile-tabs" id="content__mobile-tabs">--}}
{{--                            <div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <input type="button" value="Comments">--}}
{{--                                <span></span>--}}
{{--                            </div>--}}

{{--                            <div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">--}}
{{--                                <ul class="nav nav-tabs" role="tablist">--}}
{{--                                    <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- end content mobile tabs nav -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-lg-8 col-xl-8">--}}
{{--                    <!-- content tabs -->--}}
{{--                    <div class="tab-content">--}}
{{--                        <div class="tab-pane active show fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">--}}
{{--                            <div class="row">--}}
{{--                                <!-- reviews -->--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="reviews">--}}
{{--                                        <ul class="reviews__list">--}}
{{--                                            <li class="reviews__item">--}}
{{--                                                <div class="reviews__autor">--}}
{{--                                                    <img class="reviews__avatar" src="{{asset('frontend/img/user.svg')}}" alt="">--}}
{{--                                                    <span class="reviews__name">Best Marvel movie in my opinion</span>--}}
{{--                                                    <span class="reviews__time">24.08.2018, 17:53 by John Doe</span>--}}
{{--                                                    <span class="reviews__rating reviews__rating--green">8.4</span>--}}
{{--                                                </div>--}}
{{--                                                <p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <form action="{{route('review.send')}}" method="POST" class="form">--}}
{{--                                            @csrf--}}
{{--                                            <input type="hidden" name="post_id" value="{{$channel->id}}">--}}
{{--                                            <textarea name="review" required class="form__textarea" placeholder="Review">{{old('review')}}</textarea>--}}
{{--                                            <div class="form__slider">--}}
{{--                                                <input type="hidden" name="rating" id="rating_value">--}}
{{--                                                <div class="form__slider-rating" id="slider__rating"></div>--}}
{{--                                                <div class="form__slider-value" id="form__slider-value"></div>--}}
{{--                                            </div>--}}
{{--                                            <button type="submit" class="form__btn">Send</button>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end reviews -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- end content tabs -->--}}
{{--                </div>--}}
{{--                @if($otherChannel->isNotEmpty())--}}
{{--                <div class="col-12 col-lg-4 col-xl-4">--}}
{{--                    <div class="row row--grid">--}}
{{--                        <!-- section title -->--}}
{{--                        <div class="col-12">--}}
{{--                            <h2 class="section__title section__title--sidebar">You may also like</h2>--}}
{{--                        </div>--}}
{{--                        @foreach($otherChannel as $ch)--}}
{{--                        <div class="col-6 col-sm-4 col-lg-6">--}}
{{--                            {!! getChannelCard($ch,$ch->ratings()->average('rating')) !!}--}}
{{--                        </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- end content -->
@endsection
@push('css')
    <link href="{{asset('backend/mediaplayer/video-js.css?t='.time())}}" rel="stylesheet" />
@endpush
@push('js')
    <script src="{{asset('backend/mediaplayer/video.min.js?t='.time())}}"></script>
    <script>
        var src = '{{$channel->media_url}}';
        var myPlayer = videojs('my-video');
        myPlayer.src({src:src,type:'application/x-mpegURL'})

        {{--UrlExists('{{$channel->media_url}}', function(status){--}}
        {{--    console.log(status)--}}
        {{--    if(status === 200){--}}
        {{--        alert('file found');--}}
        {{--    }else{--}}
        {{--        alert('Error');--}}
        {{--    }--}}
        {{--});--}}
        function UrlExists(url, cb){
            jQuery.ajax({
                url:      url,
                dataType: 'text',
                type:     'GET',
                complete:  function(xhr){
                    if(typeof cb === 'function')
                        cb.apply(this, [xhr.status]);
                }
            });
        }
    </script>
@endpush
