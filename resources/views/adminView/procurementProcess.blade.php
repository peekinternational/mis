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
        <h3><strong>Procurement Process Detail</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addproProcess"><i class="fa fa-plus"></i></button></h3><br>
          <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
            <table class="table table-hover stdnt-table previousTables" id="previousTable">
              <thead>
                    <tr>
                      <th>ID</th>
                      <th>Article Name</th>
                      <th>Purchase Date</th>
                      <th>Rate</th>
                      <th>Quantity</th>
                      <th>Total Price</th>
                      <th>Issued</th>
                      <th>Sign Receiving Person</th>
                      <th>Remarks</th>
                      <th>DDO Sign</th>
                      <th>Action</th>
                      </tr>
                </thead>
                <tbody>
                  @if(count($showprocureProces)>0)
                @foreach($showprocureProces as $procureProces)
                    <tr id="tbl_show{{$procureProces->id}}">
                      <td>{{$procureProces->id}}</td>
                      <td>{{$procureProces->articleName}}</td>
                      <td>{{$procureProces->purchaseDate}}</td>
                      <td>{{$procureProces->rate}}</td>
                      <td>{{$procureProces->quantity}}</td>
                      <td>{{$procureProces->totalPrice}}</td>
                      <td>{{$procureProces->issued}}</td>
                      <td>{{$procureProces->signReceivingPerson}}</td>
                      <td>{{$procureProces->Remarks}}</td>
                      <td>{{$procureProces->ddoSign}}</td>

                      <td>
                        <a href="{{url('adminView/edit-procProcess/'.$procureProces->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;
                        <a href="" data-toggle="modal" onclick="delete_procProces('{{$procureProces->id}}');"><i class="fa fa-trash text-danger"></i></a>
                      </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
            <div class="text-right pagination-table"><?php echo $showprocureProces->render(); ?></div>
          </div>
          <!-- End View -->
        <div class="box box-primary" id="procProcessForm" style="display: none;">
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
                <input type="text" class="form-control" id="articleName" name="articleName" placeholder="Name of article">
              </div>
              <div class="form-group">
                <label for="purchaseDate">Date of purchase</label>
                <input type="date" class="form-control" id="purchaseDate" name="purchaseDate" placeholder="Date of purchase">
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
                <input type="checkbox" id="yes" name="issued" value="Yes"> Yes <br>
                <input type="checkbox" id="no" name="issued" value="No"> No
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
<script>
  $('#addproProcess').click(function(){
    $('#procProcessForm').toggle();
  });

  function delete_procProces(id) {
    // alert(id);
      if(confirm('Are you sure want to delete this Record')) {
        $.ajax({
          url: "{{url('adminView/delete-procProcess')}}/"+id,
          success: function (response) {
            // console.log(response);
            if (response == "1") {
              $('#tbl_show'+id).remove();

            }
          }
        });
      }
    }
</script>
@endsection