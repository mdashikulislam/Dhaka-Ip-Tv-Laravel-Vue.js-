@extends('errors.error')
@section('title')
    Server Error - {{getenv('APP_NAME')}}
@endsection
@section('code')
    500
@endsection
@section('message')
    {{__('Server Error')}}
@endsection
