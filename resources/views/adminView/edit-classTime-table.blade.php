@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
       
        <div class="box box-primary">
            <h3 class="box-title">Class Wise Time Table</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/class_TimeTable')}}"> 
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="className">Class Name</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="text" class="form-control" name="class" id="className" value="{{$data->class}}" placeholder="Claas Name">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" value="{{$data->subject}}" placeholder="Subject">
              </div>
              <div class="form-group">
                <label for="time">Time</label>
                <input type="text" class="form-control" name="time" id="time" value="{{$data->time}}" placeholder="Time">
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
  $('#addTimeTable').click(function(){
    $('#timeTableForm').toggle();
  });

  function delete_classTimeTable(id)
  {
    if(confirm("Are you sure you want to delete class time table")){
      $.ajax({
        url: "{{url('adminView/delete_classTimeTable')}}/"+id,
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