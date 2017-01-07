@extends('layouts.shop')

@section('content')
     @include('partials._nav')
     <div id="main">
         <div class="section shop-section top">
             @include('pages.shop._slider')
         </div>
         <div class="section blue except category">
             <h4 class="text-center text-white">Kategori Pencarian</h4>
             <span class="stripped-center white"></span>
             <div class="form">
                    <div class="container">
                        <div class="row">
                            <div class="columns six offset-by-three">
                                <div class="category-list">
                                    {!! Form::open(['class' => 'category-form','method' => 'POST']) !!}
                                    <div class="input-group">
                                        {!! Form::select('category_name',\App\ProductCategory::pluck('name','id'),null) !!}
                                        {!! Form::text('category_q',null,['placeholder' => 'Search Everything']) !!}
                                        <button class="button">Search</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
         </div>
         <div class="section">
             @include('pages.shop._product')
         </div>
     </div>
     @include('partials._footer')
@endsection