@extends('frontend.layouts.app')
@section('content')
    <section class="section section--details section--bg" data-bg="img/section/details.jpg">
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
{{--                                    <span class="card__rate card__rate--green">8.4</span>--}}
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
                        {{--     Default media url :  https://d2zihajmogu5jn.cloudfront.net/advanced-fmp4/master.m3u8     --}}
{{--                        <source src="{{$channel->media_url}}" type="application/x-mpegURL" />--}}
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                            >
                        </p>
                    </video>
                </div>
                <!-- end player -->
            </div>
        </div>
        <!-- end details content -->
    </section>
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
