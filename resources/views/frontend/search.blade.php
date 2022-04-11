@extends('frontend.layouts.app')
@section('content')
    @include('frontend.inc.page-title',['pageTitle'=>'Search Result'])
    <div class="section section--top">
        <div class="container">
            <div class="row row--grid">
                @forelse($channels as $channel)
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                        {!! getChannelCard($channel) !!}
                    </div>
                @empty
                @endforelse
                {{$channels->links('vendor.pagination.custom')}}
            </div>
        </div>
    </div>
@endsection
