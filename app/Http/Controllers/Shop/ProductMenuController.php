<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductMenuController extends Controller
{
    /* Show product menu page. */
    public function showProductMenuPage()
    {
        return view('shop.product-menu');
    }
}
