@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <div class="box box-primary">
            <h3 class="box-title">Teacher Wise Time Table</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/teacher_timeTable')}}">
            {{ csrf_field() }}
           <div class="box-body">
             <div class="form-group">
               <label for="teacherName">Teacher Name</label>
               <input type="hidden" name="id" value="{{$data->id}}">
               <input type="text" class="form-control" name="teacherName" value="{{$data->teacherName}}" id="teacherName" placeholder="Teacher Name">
             </div>
             <div class="form-group">
               <label for="class">Class</label>
               <input type="text" class="form-control" name="class" id="class" value="{{$data->class}}" placeholder="Class">
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

  function delete_teacherTimeTable(id)
  {
    if(confirm("Are you sure you want to delete teachers time table")){
      $.ajax({
        url: "{{url('adminView/delete_teacherTimeTable')}}/"+id,
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