@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <div class="box box-primary" id="communicationToolsForm">
          <h3 class="box-title">Communication Tools</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post" action="{{url('adminView/communication_tools')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="mobileNo">Mobile No.</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="text" class="form-control" id="mobileNo" name="mobileNo" value="{{$data->mobileNo}}" placeholder="Mobile No">
              </div>
              <div class="form-group">
                <label for="emailAddress">Email address</label>
                <input type="email" class="form-control" id="emailAddress" name="email" value="{{$data->email}}" placeholder="Email Address">
              </div>
              <div class="form-group">
                <label for="homeAddress">Home address</label>
                <input type="text" class="form-control" id="homeAddress" name="homeAddress" value="{{$data->homeAddress}}" placeholder="Home Address">
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
            </div>
          </form>
        </div>
        <!-- End -->
      </div>
    </div>
  </div>
</div>
<!-- end main -->

<script>
  $('#addTools').click(function(){
    $('#communicationToolsForm').toggle();
  });


  function delete_communicationTools(id)
  {
    if(confirm("Are you sure you want to delete employee logs")){
      $.ajax({
        url: "{{url('adminView/delete_communicationTools')}}/"+id,
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