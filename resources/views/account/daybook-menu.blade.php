@extends('account.mapp')

<!-- Highlight daybook in module menu -->
@section('hl_daybook')
active
@endsection

<!--Main screen -->
@section('screen')
<div class="panel panel-default">
    <div class="panel-heading">Daybook Menu</div>

    <div class="panel-body">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

	  <!-- Show breadcrumb -->
	  <div>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Account</a></li>
              <li><a href="">Daybook</a></li>
            </ol>
	  </div>

	  <!-- Show daybook menu -->
      <div>
	    <ul>
	      <li><a href="/account/daybook/create">+ New Entry</a></li>
	      <li><a href="">List</a></li>
	    </ul>
      </div>
    </div>
</div>
@endsection
