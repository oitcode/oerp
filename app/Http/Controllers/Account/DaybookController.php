<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DaybookController extends Controller
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
    public function showDaybookMenu()
    {
        return view('account.daybook-menu');
    }

    /**
     * Show daybook entry page.
     *
     * @return Response
     */
    public function showDaybookEntryForm()
    {
        return view('account.daybook-entry');
    }
}
