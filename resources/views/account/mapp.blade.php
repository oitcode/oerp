@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
	<!-- Module menu -->
        <div class="col-md-2">
	  <ul class="nav nav-pills nav-stacked">
	    <li role="presentation" class="@yield('hl_mhome')"><a href="/account">Home</a></li>
	    <li role="presentation" class="@yield('hl_daybook')"><a href="/account/daybook">Daybook</a></li>
	    <li role="presentation" class="@yield('hl_journal')"><a href="#">Journal</a></li>
	    <li role="presentation" class="@yield('hl_ledger')"><a href="#">Ledger</a></li>
	    <li role="presentation" class="@yield('hl_bs')"><a href="#">Balance Sheet</a></li>
	    <li role="presentation" class="@yield('hl_pl')"><a href="#">P/L</a></li>
          </ul>
	</div>

	<!-- Main screen -->
        <div class="col-md-8">
          @yield('screen')
        </div>
    </div>
</div>
@endsection
