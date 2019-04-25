@extends('layouts.app')

@section('hl_t_shop')
active
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
	<!-- Module menu -->
        <div class="col-md-2">
	  <ul class="nav nav-pills nav-stacked">
	    <li role="presentation" class="@yield('hl_mhome')"><a href="/shop">Home</a></li>
	    <li role="presentation" class="@yield('hl_products')"><a href="/shop/products">Products</a></li>
	    <li role="presentation" class="@yield('hl_sales')"><a href="/shop/sales">Sales</a></li>
          </ul>
	</div>

	<!-- Main screen -->
        <div class="col-md-8">
          @yield('screen')
        </div>
    </div>
</div>
@endsection
