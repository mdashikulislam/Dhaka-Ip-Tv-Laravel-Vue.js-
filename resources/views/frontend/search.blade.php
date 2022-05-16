@extends('frontend.layouts.app')
@section('content')
    @include('frontend.inc.page-title',['pageTitle'=>'Search Result'])
    <div class="section section--top">
        <div class="container">
            <div class="row row--grid">
                @forelse($channels as $channel)
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                        {!! getChannelCard($channel,$channel->ratings()->average('rating')) !!}
                    </div>
                @empty
                @endforelse
                {{$channels->appends(request()->input())->links('vendor.pagination.custom')}}
            </div>
        </div>
    </div>
@endsection
