<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
    <div class="ui container">
        <a class="active item">Home</a>
        <a class="item">About</a>
        <a class="item">Program</a>
        <a class="item" href="{{ action('ShopController@index') }}">Shop</a>
        <a class="item">Contact</a>
        <div class="right menu">
            <div class="item">
                <a class="ui primary button">Register Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Home</a>
    <a class="item">About</a>
    <a class="item">Program</a>
    <a class="item" href="{{ action('ShopController@index') }}">Shop</a>
    <a class="item">Contact</a>
</div>