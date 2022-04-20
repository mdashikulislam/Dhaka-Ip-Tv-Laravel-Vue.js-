@extends('errors.error')
@section('title')
    Page Expired - {{getenv('APP_NAME')}}
@endsection
@section('code')
    419
@endsection
@section('message')
    {{__('Page Expired')}}
@endsection
