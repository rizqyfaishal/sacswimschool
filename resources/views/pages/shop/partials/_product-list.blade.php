<div class="product-list">
    <h4>Our Product</h4>
    <div class="list-item">
        <div class="row">
            @foreach($products as $product)
               <div class="columns four">
                   <div class="product">
                       <a href="#" class="product-link">
                           <img src="{{ $product->image_url }}" alt="Product">
                           <h5>{{ $product->product_name }}</h5>
                       </a>
                       <h5 class="product-price">Rp.{{$product->product_price}},00</h5>
                       <button class="button button-primary">Add To Cart</button>
                   </div>
               </div>
            @endforeach
        </div>
    </div>
</div>