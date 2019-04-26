@extends('shop.mapp')

@section('hl_sales')
active
@endsection

@section('screen')
<!-- Show breadcrumb -->
<div>
      <ol class="breadcrumb">
        <li><a href="/home">Home</a></li>
        <li><a href="/shop">Shop</a></li>
        <li class="active">Sales</li>
      </ol>
</div> <!-- /breadcrumb -->

<div class="panel panel-default">
    <div class="panel-heading">Sales</div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

	<div>
	  <ul>
	    <li><a href="/shop/sales/daybook">New Sales</a></li>
	    <li><a href="">List</a></li>
	    <li><a href="">Report</a></li>
	  </ul>
	</div>
    </div>
</div>
@endsection
