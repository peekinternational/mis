@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Procurement Documents -->
        @if(session()->has('procurementD'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('procurementD')}}
        </div>
        @endif
<<<<<<< HEAD
        <div class="box box-primary">
            <h3 class="box-title">Procurement Documents</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/procurement_Document')}}">
=======
        <h3><strong>procurement Documents Detail</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addsalryBudget"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table previousTables" id="previousTable">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>Token </th>
                        <th>Demand</th>
                        <th>Description</th>
                        <th>Tender</th>
                        <th>Quotation Comparison</th>
                        <th>Finalized Quotation</th>
                        <th>Amount</th>
                        <th>Advance Payment</th>
                        <th>Invoice number</th>
                        <th>Final Payment</th>
                        <th>Cash Receipt No</th>
                        </tr>
                  </thead>
                  <tbody>
                    @if(count($showprocureDocDetail)>0)
                  @foreach($showprocureDocDetail as $shownprodocudetail)
                      <tr id="tbl_show{{$shownprodocudetail->id}}">
                        <td>{{$shownprodocudetail->id}}</td>
                        <td>{{$shownprodocudetail->_token}}</td>
                        <td>{{$shownprodocudetail->demand}}</td>
                        <td>{{$shownprodocudetail->description}}</td>
                        <td>{{$shownprodocudetail->tender}}</td>
                        <td>{{$shownprodocudetail->quotationComparison}}</td>
                        <td>{{$shownprodocudetail->finalizedQuotation}}</td>
                        <td>{{$shownprodocudetail->amount}}</td>
                        <td>{{$shownprodocudetail->advancePayment}}</td>
                        <td>{{$shownprodocudetail->deliveryDate}}</td>
                        <td>{{$shownprodocudetail->invoiceNo}}</td>
                        <td>{{$shownprodocudetail->finalPayment}}</td>
                        <td>{{$shownprodocudetail->cashReceiptNo}}</td>

                        <td>
                          <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
                          <a href="" data-toggle="modal" onclick="delete_shownsbBudget('{{$shownprodocudetail->id}}');"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                      </tr>
                  @endforeach
                  @endif
                  </tbody>
              </table>
              // <div class="text-right pagination-table"><?php echo $showprocureDocDetail->render(); ?></div>
            </div>
            <!-- End View -->
        <div class="box box-primary">
            <h3 class="box-title">Procurement Documents</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/procurementDocument')}}">
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="demand">Demand</label>
                <input type="text" class="form-control" id="demand" name="demand" placeholder="Demand">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description">
              </div>
              <div class="form-group">
                <label for="tender">Call quotation/tender</label>
                <input type="text" class="form-control" id="tender" name="tender" placeholder="Call quotation/tender">
              </div>
              <div class="form-group">
                <label for="quotationComparison">Quotation comparison</label>
                <input type="text" class="form-control" id="quotationComparison" name="quotationComparison" placeholder="Quotation comparison">
              </div>
              <div class="form-group">
                <label for="finalizedQuotation">Finalized quotation</label>
                <input type="text" class="form-control" id="finalizedQuotation" name="finalizedQuotation" placeholder="Finalized Quotation">
              </div>
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
              </div>
              <div class="form-group">
                <label for="advancePayment">Advance payment</label>
                <input type="text" class="form-control" id="advancePayment" name="advancePayment" placeholder="Advance payment">
              </div>
              <div class="form-group">
                <label for="deliveryDate">Date of delivery</label>
                <input type="date" class="form-control" id="deliveryDate" name="deliveryDate">
              </div>
              <div class="form-group">
                <label for="invoiceNo">Invoice No. with date</label>
                <input type="text" class="form-control" id="invoiceNo" name="invoiceNo" placeholder="Invoice No. with date">
              </div>
              <div class="form-group">
                <label for="finalPayment">Final payement</label>
                <input type="text" class="form-control" id="finalPayment" name="finalPayment" placeholder="Final payement">
              </div>
              <div class="form-group">
                <label for="cashReceiptNo">Cash receipt No. with date</label>
                <input type="text" class="form-control" id="cashReceiptNo" name="cashReceiptNo" placeholder="Cash receipt No. with date">
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