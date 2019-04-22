<?php

namespace App\Http\Controllers\Account;

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
     * Show account home page.
     *
     * @return Response
     */
    public function showAccHome()
    {
        return view('account.mhome');
    }
}
