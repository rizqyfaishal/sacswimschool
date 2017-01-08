<div class="category-list">
    <h4>Kategori</h4>
    <ul>
        @foreach($categories as $category)
            <li><a href="#">{{ $category->name  }}</a></li>
        @endforeach
    </ul>
</div>