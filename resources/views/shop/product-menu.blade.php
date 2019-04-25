@extends('shop.mapp')

@section('hl_products')
active
@endsection

@section('screen')
<!-- Show breadcrumb -->
<div>
      <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li><a href="/shop">Shop</a></li>
        <li class="active">Products</li>
      </ol>
</div> <!-- /breadcrumb -->

<div class="panel panel-default">
    <div class="panel-heading">Product</div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

	<div>
	  <ul>
	    <li><a href="/shop/products/create">Create new product</a></li>
	    <li><a href="/shop/products/list">List</a></li>
	    <li><a href="">Report</a></li>
	  </ul>
	</div>
    </div>
</div>
@endsection
