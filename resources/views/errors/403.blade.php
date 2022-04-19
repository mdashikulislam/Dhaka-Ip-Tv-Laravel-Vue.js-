@extends('errors.error')
@section('title')
    Forbidden - {{getenv('APP_NAME')}}
@endsection
@section('code')
    403
@endsection
@section('message')
    {{__($exception->getMessage() ?: 'Forbidden')}}
@endsection
