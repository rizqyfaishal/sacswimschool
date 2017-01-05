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
                 <form action="">

                 </form>
             </div>
         </div>
     </div>
     @include('partials._footer')
@endsection