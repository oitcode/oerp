<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductMenuController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
	/* Only for authenticated users */
        $this->middleware('auth');
    }

    /* Show product menu page. */
    public function showProductMenuPage()
    {
        return view('shop.product-menu');
    }
}
