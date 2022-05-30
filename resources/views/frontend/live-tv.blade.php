@extends('frontend.layouts.app')
@section('content')
    @include('frontend.inc.page-title',['pageTitle'=>'Live Tv'])
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
                                <a class="text-white" href="{{route('channel.category',['slug'=>$category->slug])}}"><h2 class="section__title">{{$category->name}}</h2></a>
                                <div class="section__nav-wrap">
                                    <a href="{{route('channel.category',['slug'=>$category->slug])}}" class="section__view">View All</a>
                                </div>
                            </div>
                        </div>
                        @forelse($channels as $channel)
                            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                            {!! getChannelCard($channel,$channel->ratings()->average('rating')) !!}
                            </div>
                        @empty
                        @endforelse
                    @endif
                @empty
                @endforelse
            </div>
        </div>
    </section>
@endsection
