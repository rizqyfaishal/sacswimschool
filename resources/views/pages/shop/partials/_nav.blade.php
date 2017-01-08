<div id="nav">
  <div class="row">
    <div class="columns five">
      <img src="../img/logo.jpg" alt="Logo company" width="120" class="logo-company">
    </div>
    <div class="columns seven">
        <div class="row">
          <div class="columns two offset-by-one">
            <a href="#" class="shop-cart-button">
              <img src="../img/shopping-cart.png" alt="Shop cart" />
              <span class="badge">1</span>
            </a>
          </div>
          <div class="columns nine">
            <div class="input-group">
              {!! Form::open(['class' => 'category-form','method' => 'POST']) !!}
              <div class="input-group">
                {!! Form::select('category_name',\App\ProductCategory::pluck('name','id'),null,['placeholder' => 'Pilih Kategori']) !!}
                {!! Form::text('category_q',null,['placeholder' => 'Search Everything']) !!}
                <button class="button button-primary">Search</button>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="columns twelve">
      <div class="nav-menu">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Daftar Belanja</a></li>
          <li><a href="#">Chekout</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>