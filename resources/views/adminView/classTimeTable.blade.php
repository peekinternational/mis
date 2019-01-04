@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        @if(session()->has('classTable'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('classTable')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Class wise time table</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addTimeTable"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Class Time</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showRecord)>0)
                @foreach($showRecord as $classTimeTable)
                  <tr id="tbl_show{{$classTimeTable->id}}">
                    <td>{{$classTimeTable->id}}</td>
                    <td>{{$classTimeTable->class}}</td>
                    <td>{{$classTimeTable->subject}}</td>
                    <td>{{$classTimeTable->time}}</td>
                    <td>
                      <a href="{{url('/adminView/edit-classTime-table/'.$classTimeTable->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_classTimeTable('{{$classTimeTable->id}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
                @else
                <tr>
                  <td>No Record added to Show Please add new record</td>
                </tr>
              @endif
              </tbody>
          </table>
          <div class="text-right"><?php echo $showRecord->render(); ?></div>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="timeTableForm" style="display: none;">
            <h3 class="box-title">Class Wise Time Table</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/class_TimeTable')}}"> 
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="className">Class Name</label>
                <input type="text" class="form-control" name="class" id="className" placeholder="Claas Name">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <label for="time">Time</label>
                <input type="text" class="form-control" name="time" id="time" placeholder="Time">
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