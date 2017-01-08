@extends('layouts.shop')

@section('content')
    <div class="container">
        @include('pages.shop.partials._nav')
        <div class="row">
            <div class="columns three">
                @include('pages.shop.partials._category')
            </div>
            <div class="columns nine">
                @include('pages.shop.partials._product-list')
            </div>
        </div>
        @include('pages.shop.partials._footer')

    </div>
@endsection
