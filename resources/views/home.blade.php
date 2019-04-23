@extends('layouts.app')

@section('hl_t_home')
active
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
	<!-- Module menu -->
        <div class="col-md-2">
	  <ul class="nav nav-pills nav-stacked">
	    <li role="presentation" class="active"><a href="#">Home</a></li>
	    <li role="presentation"><a href="#">Profile</a></li>
	    <li role="presentation"><a href="#">Messages</a></li>
          </ul>
	</div>

	<!-- Main screen -->
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Oerp | &copy; OIT 2019</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
