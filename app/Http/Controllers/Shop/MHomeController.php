<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MHomeController extends Controller
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

    /**
     * Show shop home page.
     *
     * @return Response
     */
    public function showShopHome()
    {
        return view('shop.mhome');
    }
}
