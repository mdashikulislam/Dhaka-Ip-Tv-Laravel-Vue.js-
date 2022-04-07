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
                                <h2 class="section__title"><a class="text-white" href="{{route('channel.category',['slug'=>$category->slug])}}">{{$category->name}}</a></h2>
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
                                    {!! getChannelCard($channel) !!}
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
