@extends('layouts.app')

@section('content')
    @include('partials._nav')
    <div class="section except">
        <div class="dashboard-container">
            <div class="container">
                <div class="row">
                    <div class="columns twelve">
                        <div class="dashboard-block">
                            <div class="row except">
                                <div class="columns three">
                                    <div class="side-nav">
                                        @include('partials.dashboard._side-nav')
                                    </div>
                                </div>
                                <div class="columns nine">
                                    <div class="content">
                                        @include('partials.dashboard._content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials._footer')
@endsection