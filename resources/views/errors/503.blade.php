@extends('errors.error')
@section('title')
    Service Unavailable - {{getenv('APP_NAME')}}
@endsection
@section('code')
    503
@endsection
@section('message')
    {{__('Service Unavailable')}}
@endsection
