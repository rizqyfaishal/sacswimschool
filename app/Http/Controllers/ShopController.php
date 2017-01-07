<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct(PageDescription $page)
    {
        $this->page = $page;
    }

    public function index(){

        $this->page->setTitle('SAC Shop');
        $products = Product::all();
        return view('pages.shop.index')->with([
            'products' => $products,
            'page' => $this->page,
            'categories' => ProductCategory::all()
        ]);
    }
}
