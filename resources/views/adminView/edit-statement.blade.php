@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        
        <div class="box box-primary">
            <h3 class="box-title">Faroogh-e-Taleem Summary</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/reconsile_statement')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="month">Month</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="text" class="form-control" name="month" value="{{$data->month}}" id="month" placeholder="Month">
              </div>
              <div class="form-group">
                <label for="class">Class</label>
                <input type="text" class="form-control" name="class" value="{{$data->class}}" id="class" placeholder="Class">
              </div>
              <div class="form-group">
                <label for="noOfStudent">No. of students</label>
                <input type="text" class="form-control" id="noOfStudent" name="noOfStudent" value="{{$data->noOfStudent}}" placeholder="No. of Students">
              </div>
              <div class="form-group">
                <label for="fTF">FTF</label>
                <input type="text" class="form-control" name="fundCollection" id="fTF" value="{{$data->fundCollection}}" placeholder="FTF">
              </div>
              <div class="form-group">
                <label for="total">Total</label>
                <input type="text" class="form-control" name="totalFund" id="total" value="{{$data->totalFund}}" placeholder="Total">
              </div>
              <div class="form-group">
                <label for="inchargeName">Name of class incharge</label>
                <input type="text" class="form-control" id="inchargeName" name="inchargeName" value="{{$data->inchargeName}}" placeholder="Name of class incharge">
              </div>
              <div class="form-group">
                <label for="preparedBy">Prepared by</label>
                <input type="text" class="form-control" id="preparedBy" name="preparedBy" value="{{$data->preparedBy}}" placeholder="Prepared by">
              </div>
              <div class="form-group">
                <label for="verifiedBy">Verified by</label>
                <input type="text" class="form-control" id="verifiedBy" name="verifiedBy" value="{{$data->verifiedBy}}" placeholder="Verified by">
              </div>
              <div class="form-group">
                <label for="principal">Principal/DDO</label>
                <input type="text" class="form-control" id="principal" name="principalName" value="{{$data->principalName}}" placeholder="Principal/DDO">
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
  $('#addstatement').click(function(){
    $('#statementForm').toggle();
  });


  function delete_statement(id) {
    // alert(id);
      if (confirm('Are you sure want to delete this user')) {
          $.ajax({
            url: "{{url('adminView/delete_reconcileStatement')}}/"+id,
            success: function (response) {
              console.log(response);
              if (response == "1") {
                $('#tbl_show'+id).remove();
              }
            }
          });
      }
    }
</script>
@endsection