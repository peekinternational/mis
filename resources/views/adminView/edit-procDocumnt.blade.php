@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Procurement Documents -->
        <div class="box box-primary">
            <h3 class="box-title">Procurement Documents</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/procurement_Document')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="demand">Demand</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="text" class="form-control" id="demand" name="demand" value="{{$data->demand}}" placeholder="Demand">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$data->description}}" placeholder="Description">
              </div>
              <div class="form-group">
                <label for="tender">Call quotation/tender</label>
                <input type="text" class="form-control" id="tender" name="tender" value="{{$data->tender}}" placeholder="Call quotation/tender">
              </div>
              <div class="form-group">
                <label for="quotationComparison">Quotation comparison</label>
                <input type="text" class="form-control" id="quotationComparison" name="quotationComparison" value="{{$data->quotationComparison}}" placeholder="Quotation comparison">
              </div>
              <div class="form-group">
                <label for="finalizedQuotation">Finalized quotation</label>
                <input type="text" class="form-control" id="finalizedQuotation" name="finalizedQuotation" value="{{$data->finalizedQuotation}}" placeholder="Finalized Quotation">
              </div>
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" value="{{$data->amount}}" placeholder="Amount">
              </div>
              <div class="form-group">
                <label for="advancePayment">Advance payment</label>
                <input type="text" class="form-control" id="advancePayment" name="advancePayment" value="{{$data->advancePayment}}" placeholder="Advance payment">
              </div>
              <div class="form-group">
                <label for="deliveryDate">Date of delivery</label>
                <input type="date" class="form-control" id="deliveryDate" name="deliveryDate" value="{{$data->deliveryDate}}">
              </div>
              <div class="form-group">
                <label for="invoiceNo">Invoice No. with date</label>
                <input type="text" class="form-control" id="invoiceNo" name="invoiceNo" value="{{$data->invoiceNo}}" placeholder="Invoice No. with date">
              </div>
              <div class="form-group">
                <label for="finalPayment">Final payement</label>
                <input type="text" class="form-control" id="finalPayment" name="finalPayment" value="{{$data->finalPayment}}" placeholder="Final payement">
              </div>
              <div class="form-group">
                <label for="cashReceiptNo">Cash receipt No. with date</label>
                <input type="text" class="form-control" id="cashReceiptNo" name="cashReceiptNo" value="{{$data->cashReceiptNo}}" placeholder="Cash receipt No. with date">
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