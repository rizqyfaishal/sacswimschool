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
             <h1 class="text-center">Our Product</h1>
             <span class="stripped-center blue"></span>
             <div class="container">
                 <div class="row">
                     <div class="product-list-home">

                         @foreach($products as $product)
                             <div class="columns three">
                                 <div class="product-item">
                                     <img src="{{ $product->image_url }}" alt="{{ $product->product_name }}">
                                     <h3>{{ $product->product_name }}</h3>
                                     <div class="price-section">
                                         <div class="row">
                                             <div class="columns six">
                                                 <h3>Rp. {{ $product->product_price }},00</h3>
                                             </div>
                                             <div class="columns six">
                                                 <button class="button-primary u-pull-right">Beli</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                 </div>

             </div>
         </div>
     </div>
     @include('partials._footer')
@endsection