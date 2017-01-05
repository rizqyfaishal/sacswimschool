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
                                {!! Form::open(['class' => 'form']) !!}
                                    {!! Form::select('category',['AAAAA' => 'AAAAA', 'BBBBB' => 'AAAA'],null) !!}
                                    {!! Form::submit('Go',['class' => 'button text-white']) !!}
                                {!! Form::close() !!}
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