@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Procurement Documents -->
        @if(session()->has('procurementP'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('procurementP')}}
        </div>
        @endif
        <div class="box box-primary">
            <h3 class="box-title">Procurement Process</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/procurement_process')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <!-- <div class="form-group">
                <label for="srNo">Sr No.</label>
                <input type="text" class="form-control" id="srNo" placeholder="Sr No.">
              </div> -->
              <div class="form-group">
                <label for="purchaseDate">Date of purchase</label>
                <input type="date" class="form-control" id="purchaseDate" name="purchaseDate" placeholder="Date of purchase">
              </div>
              <div class="form-group">
                <label for="articleName">Name of article</label>
                <input type="text" class="form-control" id="articleName" name="articleName" placeholder="Name of article">
              </div>
              <div class="form-group">
                <label for="rate">Rate</label>
                <input type="text" class="form-control" id="rate" name="rate" placeholder="Rate">
              </div>
              <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
              </div>
              <div class="form-group">
                <label for="totalPrice">Total Price</label>
                <input type="text" class="form-control" id="totalPrice" name="totalPrice" placeholder="Total Price">
              </div>
              <div class="form-group">
                <label for="amount">Issued</label> <br>
                <input type="checkbox" id="yes" name="issued"> Yes <br>
                <input type="checkbox" id="no" name="issued"> No
              </div>
              <div class="form-group">
                <label for="signReceivingPerson">Sign of receivong person</label>
                <input type="text" class="form-control" id="signReceivingPerson" name="signReceivingPerson" placeholder="Sign of receivong person">
              </div>
              <div class="form-group">
                <label for="remarks">Remarks</label>
                <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks"></textarea>
              </div>
              <div class="form-group">
                <label for="ddoSign">DDO sign</label>
                <input type="text" class="form-control" id="ddoSign" name="ddoSign" placeholder="DDO sign">
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