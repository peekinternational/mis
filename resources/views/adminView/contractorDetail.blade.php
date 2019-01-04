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
        <h3><strong>Procurement Process Detail</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addcontractr"><i class="fa fa-plus"></i></button></h3><br>
          <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
            <table class="table table-hover stdnt-table previousTables" id="previousTable">
              <thead>
                    <tr>
                      <th>ID</th>
                      <th>Contractor Name</th>
                      <th>Amount Per Month</th>
                      <th>Period From</th>
                      <th>Contractor CNIC</th>
                      <th>Address</th>
                      <th>Phone No</th>
                      <th>Amount Received Date</th>
                      <th>Final Payment</th>
                      <th>Issued Receipt No</th>
                      <th>Action</th>
                      </tr>
                </thead>
                <tbody>
                  @if(count($showcontrct)>0)
                @foreach($showcontrct as $cntrtdata)
                    <tr id="tbl_show{{$cntrtdata->id}}">
                      <td>{{$cntrtdata->id}}</td>
                      <td>{{$cntrtdata->contractorName}}</td>
                      <td>{{$cntrtdata->amountPerMonth}}</td>
                      <td>{{$cntrtdata->periodFrom}}</td>
                      <td>{{$cntrtdata->contractorCNIC}}</td>
                      <td>{{$cntrtdata->address}}</td>
                      <td>{{$cntrtdata->phoneNo}}</td>
                      <td>{{$cntrtdata->amountReceivedDate}}</td>
                      <td>{{$cntrtdata->finalPayment}}</td>
                      <td>{{$cntrtdata->issuedReceiptNo}}</td>

                      <td>
                        <a href="{{url('adminView/edit-contractor/'.$cntrtdata->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;
                        <a href="" data-toggle="modal" onclick="delete_contractor('{{$cntrtdata->id}}');"><i class="fa fa-trash text-danger"></i></a>
                      </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
            <div class="text-right pagination-table"><?php echo $showcontrct->render(); ?></div>
          </div>
          <!-- End View -->
        <div class="box box-primary" id="contractorForm" style="display: none;">
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
<script>
  $('#addcontractr').click(function(){
    $('#contractorForm').toggle();
  });

  function delete_contractor(id)
  {
    if(confirm("Are you sure you want to delete employee logs")){
      $.ajax({
        url: "{{url('adminView/delete-contractor')}}/"+id,
        success: function(response){
          console.log(response);
          if(response == "1"){
            $('#tbl_show'+id).remove();
          }
        }
      });
    }
  }
</script>
@endsection