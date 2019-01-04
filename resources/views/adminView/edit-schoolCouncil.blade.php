@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- School Council --> 
        <div class="box box-primary">
            <h3 class="box-title">School Council</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/school_council')}}" autocomplete="off">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" value="{{$data->designation}}" placeholder="Designation">
              </div>
              <div class="form-group">
                <label for="cnicNo">CNIC No</label>
                <input type="text" class="form-control" id="cnicNo" name="cnic" value="{{$data->cnic}}" placeholder="CNIC No">
              </div>
              <div class="form-group">
                <label for="phoneNo">Phone No</label>
                <input type="text" class="form-control" id="phoneNo" name="phoneNo" value="{{$data->phoneNo}}" placeholder="Phone No">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" placeholder="Address" name="address">{{$data->address}}</textarea>
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
  $('#addSchoolCouncil').click(function(){
    $('#scholCouncilForm').toggle();
  });


  function delete_schoolCouncil(id)
  {
    if(confirm("Are you sure you want to delete class time table")){
      $.ajax({
        url: "{{url('adminView/delete_schoolCouncil')}}/"+id,
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