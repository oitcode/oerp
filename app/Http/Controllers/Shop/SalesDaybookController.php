<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesDaybookController extends Controller
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
     * Show daybook entry page.
     *
     * @return Response
     */
    public function showDaybookEntryPage()
    {
        return view('shop.sales-daybook-entry');
    }
}
