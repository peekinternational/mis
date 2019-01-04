@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
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
                <label for="articleName">Name of article</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="text" class="form-control" id="articleName" name="articleName" value="{{$data->articleName}}" placeholder="Name of article">
              </div>
              <div class="form-group">
                <label for="purchaseDate">Date of purchase</label>
                <input type="date" class="form-control" id="purchaseDate" name="purchaseDate" value="{{$data->purchaseDate}}" placeholder="Date of purchase">
              </div>
              
              <div class="form-group">
                <label for="rate">Rate</label>
                <input type="text" class="form-control" id="rate" name="rate" value="{{$data->rate}}" placeholder="Rate">
              </div>
              <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="{{$data->quantity}}" placeholder="Quantity">
              </div>
              <div class="form-group">
                <label for="totalPrice">Total Price</label>
                <input type="text" class="form-control" id="totalPrice" name="totalPrice" value="{{$data->totalPrice}}" placeholder="Total Price">
              </div>
              <div class="form-group">
                <label for="amount">Issued</label> <br>
                @if($data->issued == 'Yes')
                <input type="checkbox" id="yes" name="issued" value="Yes" checked> Yes <br>
                <input type="checkbox" id="no" name="issued" value="No"> No
                @else
                <input type="checkbox" id="yes" name="issued" value="Yes"> Yes <br>
                <input type="checkbox" id="no" name="issued" value="No" checked> No
                @endif
              </div>
              <div class="form-group">
                <label for="signReceivingPerson">Sign of receivong person</label>
                <input type="text" class="form-control" id="signReceivingPerson" name="signReceivingPerson" value="{{$data->signReceivingPerson}}" placeholder="Sign of receivong person">
              </div>
              <div class="form-group">
                <label for="remarks">Remarks</label>
                <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks">{{$data->Remarks}}</textarea>
              </div>
              <div class="form-group">
                <label for="ddoSign">DDO sign</label>
                <input type="text" class="form-control" id="ddoSign" name="ddoSign" value="{{$data->ddoSign}}" placeholder="DDO sign">
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
  $('#addproProcess').click(function(){
    $('#procProcessForm').toggle();
  });
</script>
@endsection