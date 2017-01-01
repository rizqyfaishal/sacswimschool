@extends('layouts.app')

@section('content')
    @include('partials._nav')
    @include('partials._header')
    @include('partials.home._how')
    @include('partials.home._programs')
    @include('partials.home._why')
    @include('partials.home._brand')
    @include('partials._footer')
@endsection