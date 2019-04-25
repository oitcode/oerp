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
        <li><a href="/shop/products">Products</a></li>
        <li class="active">List</li>
      </ol>
</div> <!-- /breadcrumb -->

<div class="panel panel-default">
    <div class="panel-heading">Product List</div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

	<table class="table table-bordered table-striped">
	  <thead>
	    <tr>
	      <th>Name</th>
	      <th>Rate</th>
	      <th>Currency</th>
	    </tr>
	  </thead>
	  <tbody>
	  @foreach ($products as $product)
	    <tr>
	      <td>{{ $product->name}}</td>
	      <td>{{ $product->rate}}</td>
	      <td>{{ $product->currency}}</td>
	    </tr>
	  @endforeach
	  </tbody>
	</table>
    </div>

</div>
@endsection
