@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Procurement Documents -->
        @if(session()->has('contractorD'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('contractorD')}}
        </div>
        @endif
        <div class="box box-primary">
          <h3 class="box-title">Contractor Details</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/contractor_detail')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="contractorName">Name of contractor</label>
                <input type="text" class="form-control" id="contractorName" name="contractorName" placeholder="Name of contractor">
              </div>
              <div class="form-group">
                <label for="amountPerMonth">Amount per month</label>
                <input type="text" class="form-control" id="amountPerMonth" name="amountPerMonth" placeholder="Amount per month">
              </div>
              <div class="form-group">
                <label for="periodFrom">Period from...to...</label>
                <input type="text" class="form-control" id="periodFrom" name="periodFrom" placeholder="Period from...to...">
              </div>
              <div class="form-group">
                <label for="contractorCNIC">CNIC No. of contractor</label>
                <input type="text" class="form-control" id="contractorCNIC" name="contractorCNIC" placeholder="CNIC No. of contractor">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
              </div>
              <div class="form-group">
                <label for="phoneNo">Phone No.</label>
                <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Phone No.">
              </div>
              <div class="form-group">
                <label for="amountReceivedDate">Amount received with date</label>
                <input type="text" class="form-control" id="amountReceivedDate" name="amountReceivedDate" placeholder="Amount received with date">
              </div>
              <div class="form-group">
                <label for="finalPayment">Final payement</label>
                <input type="text" class="form-control" id="finalPayment" name="finalPayment" placeholder="Final payement">
              </div>
              <div class="form-group">
                <label for="issuedReceiptNo">Issued receipt No. with date</label>
                <input type="text" class="form-control" id="issuedReceiptNo" name="issuedReceiptNo" placeholder="Issued receipt No. with date">
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
@endsection