<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
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
        return view('pages.shop.index')->with([
            'page' => $this->page,
            'categories' => ProductCategory::all()
        ]);
    }
}
