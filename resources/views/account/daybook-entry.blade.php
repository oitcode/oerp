@extends('account.mapp')

<!-- Highlight daybook in module menu -->
@section('hl_daybook')
active
@endsection

<!--Main screen -->
@section('screen')
<div class="panel panel-default">
    <div class="panel-heading">Daybook Entry</div>

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
            <li><a href="/account/daybook">Daybook</a></li>
            <li class="active">Create</li>
          </ol>
	</div>
    </div>
</div>
@endsection
