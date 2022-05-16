@extends('errors.error')
@section('title')
    Unauthorized - {{getenv('APP_NAME')}}
@endsection
@section('code')
    401
@endsection
@section('message')
    {{__('Unauthorized')}}
@endsection
