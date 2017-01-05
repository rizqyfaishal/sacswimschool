<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->page = $page;
    }

    public function index(){
        $this->page->setTitle('Sailfish Aquatic Club');
        return view('index')->with([
            'page' => $this->page
        ]);
    }
}
