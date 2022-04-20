@extends('errors.error')
@section('title')
    Page Not Found - {{getenv('APP_NAME')}}
@endsection
@section('code')
    404
@endsection
@section('message')
    {{__($exception->getMessage() ?: 'Page Not Found')}}
@endsection
