@extends('errors.error')
@section('title')
    Too Many Requests - {{getenv('APP_NAME')}}
@endsection
@section('code')
    429
@endsection
@section('message')
    {{__('Too Many Requests')}}
@endsection
