@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        
        <div class="box box-primary">
          <h3 class="box-title">Contractor Details</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/contractor_detail')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="contractorName">Name of contractor</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="text" class="form-control" id="contractorName" name="contractorName" value="{{$data->contractorName}}" placeholder="Name of contractor">
              </div>
              <div class="form-group">
                <label for="amountPerMonth">Amount per month</label>
                <input type="text" class="form-control" id="amountPerMonth" name="amountPerMonth" value="{{$data->amountPerMonth}}" placeholder="Amount per month">
              </div>
              <div class="form-group">
                <label for="periodFrom">Period from...to...</label>
                <input type="text" class="form-control" id="periodFrom" name="periodFrom" value="{{$data->periodFrom}}" placeholder="Period from...to...">
              </div>
              <div class="form-group">
                <label for="contractorCNIC">CNIC No. of contractor</label>
                <input type="text" class="form-control" id="contractorCNIC" name="contractorCNIC" value="{{$data->contractorCNIC}}" placeholder="CNIC No. of contractor">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="Address">{{$data->address}}</textarea>
              </div>
              <div class="form-group">
                <label for="phoneNo">Phone No.</label>
                <input type="text" class="form-control" id="phoneNo" name="phoneNo" value="{{$data->phoneNo}}" placeholder="Phone No.">
              </div>
              <div class="form-group">
                <label for="amountReceivedDate">Amount received with date</label>
                <input type="text" class="form-control" id="amountReceivedDate" name="amountReceivedDate" value="{{$data->amountReceivedDate}}" placeholder="Amount received with date">
              </div>
              <div class="form-group">
                <label for="finalPayment">Final payement</label>
                <input type="text" class="form-control" id="finalPayment" name="finalPayment" value="{{$data->finalPayment}}" placeholder="Final payement">
              </div>
              <div class="form-group">
                <label for="issuedReceiptNo">Issued receipt No. with date</label>
                <input type="text" class="form-control" id="issuedReceiptNo" name="issuedReceiptNo" value="{{$data->issuedReceiptNo}}" placeholder="Issued receipt No. with date">
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
      </div>
    </div>
  </div>  
</div>
<!-- end main -->
<script>
  $('#addcontractr').click(function(){
    $('#contractorForm').toggle();
  });
</script>
@endsection