@extends('account.mapp')

<!-- Highlight daybook in module menu -->
@section('hl_daybook')
active
@endsection

<!--Main screen -->
@section('screen')
<!-- Show breadcrumb -->
<div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Account</a></li>
        <li><a href="/account/daybook">Daybook</a></li>
        <li class="active">Create</li>
      </ol>
</div>

<!-- Main panel -->
<div class="panel panel-default">
    <div class="panel-heading">Daybook Entry</div>

    <div class="panel-body">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif


	  <!-- Daybook entry form -->
	  <div>
        <form>
	      <table class="table table-bordered table-condensed">
		    <thead>
		      <tr class="info">
		  	  <th>Date</th>
		  	  <th>Item</th>
		  	  <th>Qty</th>
		  	  <th>Rate</th>
		  	  <th>Amount</th>
		  	  <th>Buyer</th>
		  	  <th>Comment</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		  	  <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		  	  </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		      </tr>
		      <tr>
		  	  <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		  	  </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		        <td>
                  <div class="form-group">
                    <input type="text" class="form-control" id="">
                  </div>
		        </td>
		      </tr>
		    </tbody>
		    <tfoot>
		    </tfoot>
		  </table>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
	  </div><!-- form div end -->
    </div>
</div>
@endsection
