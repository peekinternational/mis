@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <div class="box box-primary">
            <h3 class="box-title">NSB</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/nsb_budget')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="DdoNo">DDO No.</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="text" class="form-control" id="DdoNo" name="DdoNo" value="{{$data->DdoNo}}" placeholder="DDO No">
              </div>
              <div class="form-group">
                <label for="budgetyear">Budget year</label>
                <input type="text" class="form-control" id="budgetyear" name="budgetYear" value="{{$data->budgetYear}}" placeholder="Budget year">
              </div>
              <!-- <div class="form-group">
                <label for="subjectCode">Subject code</label>
                <input type="text" class="form-control" id="subjectCode"  placeholder="Subject code">
              </div> -->
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$data->description}}" placeholder="Description">
              </div>
              <div class="form-group">
                <label for="estimatedBudget">Estimated budget</label>
                <input type="text" class="form-control" id="estimatedBudget" name="estimatedBudget" value="{{$data->estimatedBudget}}" placeholder="Estimated budget">
              </div>
              <div class="form-group">
                <label for="allocatedBudget">Allocated budget</label>
                <input type="text" class="form-control" id="allocatedBudget" name="allocatedBudget" value="{{$data->allocatedBudget}}" placeholder="Allocated budget">
              </div>
              <div class="form-group">
                <label for="released">Released</label>
                <input type="text" class="form-control" id="released" name="released" value="{{$data->released}}" placeholder="Released">
              </div>
              <div class="form-group">
                <label for="consumed">Consumed</label>
                <input type="text" class="form-control" id="consumed" name="consumed" value="{{$data->consumed}}" placeholder="Consumed">
              </div>
              <div class="form-group">
                <label for="balance">Balance</label>
                <input type="text" class="form-control" id="balance" name="balance" value="{{$data->balance}}" placeholder="Balance">
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
<script type="">
  $('#addnsb').click(function(){
    $('#nsbForm').toggle();
  });

  function delete_shownsbBudget(id) {
    // alert(id);
      if(confirm('Are you sure want to delete this Record')) {
        $.ajax({
          url: "{{url('adminView/Dlete_nSbBudget')}}/"+id,
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