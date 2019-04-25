@extends('shop.mapp')

@section('hl_mhome')
active
@endsection

@section('screen')
<div class="panel panel-default">
    <div class="panel-heading">Shop</div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>
@endsection
