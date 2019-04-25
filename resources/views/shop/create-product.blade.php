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
        <li class="active">Create</li>
      </ol>
</div> <!-- /breadcrumb -->

<div class="panel panel-default">
    <div class="panel-heading">Product Create</div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <!-- Product create div -->
        <form method="POST" action="/shop/products/create/process">
	  {{ csrf_field() }}
          <div class="row">
	    <div class="col-md-8">
              <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" id="" name="product_name">
              </div>
	    </div>
	    <div class="col-md-2">
              <div class="form-group">
                <label for="">Rate</label>
                <input type="text" class="form-control" id="" name="rate">
              </div>
            </div>
	    <div class="col-md-2">
              <div class="form-group">
                <label for="">Currency</label>
                <input type="text" class="form-control" id="" name="currency">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

</div>
@endsection
