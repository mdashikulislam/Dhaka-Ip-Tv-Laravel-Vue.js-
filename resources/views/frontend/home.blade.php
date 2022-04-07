@extends('frontend.layouts.app')
@section('content')
    <section class="section section--border">
        <div class="container">
            <div class="row">
                @forelse($channelCategory as $key => $category)
                    @php
                        $channels = channelListByCategoryID($category->id);
                    @endphp
                @if($channels->isNotEmpty())
                        <div class="col-12">
                            <div class="section__title-wrap">
                                <h2 class="section__title">{{$category->name}}</h2>
                                <div class="section__nav-wrap">
                                    <a href="{{route('channel.category',['slug'=>$category->slug])}}" class="section__view">View All</a>

                                    <button class="section__nav section__nav--prev" type="button" data-nav="#carousel{{$key}}">
                                        <i class="icon ion-ios-arrow-back"></i>
                                    </button>

                                    <button class="section__nav section__nav--next" type="button" data-nav="#carousel{{$key}}">
                                        <i class="icon ion-ios-arrow-forward"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="owl-carousel section__carousel" id="carousel{{$key}}">
                                @forelse($channels as $channel)
                                    <div class="card">
                                        <div class="card__cover">
                                            @if($channel->logo_type == 'Url')
                                                <img class="lazy" src="{{asset('frontend/img/demo.png')}}" data-src="{{$channel->preview_url}}" alt="{{$channel->title}}">
                                            @else
                                                <img class="lazy" src="{{asset('frontend/img/demo.png')}}" data-src="{{\Illuminate\Support\Facades\Storage::disk('local')->url($channel->preview_file)}}" alt="{{$channel->title}}">
                                            @endif
                                            <a href="{{route('channel.details',['slug'=>$channel->slug])}}" class="card__play">
                                                <i class="icon ion-ios-play"></i>
                                            </a>
                                            <span class="card__rate card__rate--green">8.4</span>
                                        </div>
                                        <div class="card__content">
                                            <h3 class="card__title"><a href="{{route('channel.details',['slug'=>$channel->slug])}}">{{$channel->title}}</a></h3>

                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                @endif
                @empty
                @endforelse
            </div>
        </div>
    </section>
@endsection
