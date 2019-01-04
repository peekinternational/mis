@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Minutes of Meeting -->
        @if(session()->has('meetingMinute'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('meetingMinute')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Class wise time table</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addMeetig"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Meeting Date</th>
                    <th>Agenda</th>
                    <th>Approval</th>
                    <th>Member Participated</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showRecord)>0)
                @foreach($showRecord as $meetingMinutes)
                  <tr id="tbl_show{{$meetingMinutes->id}}">
                    <td>{{$meetingMinutes->id}}</td>
                    <td>{{$meetingMinutes->meetingDate}}</td>
                    <td>{{$meetingMinutes->agenda}}</td>
                    <td>{{$meetingMinutes->approvel}}</td>
                    <td>{{$meetingMinutes->participatedMember}}</td>
                    <td>
                      <a href="{{url('/adminView/edit-meetingMinutes/'.$meetingMinutes->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_meetingMinutes('{{$meetingMinutes->id}}');"><i class="fa fa-trash text-danger"></i></a>
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
        <div class="box box-primary" id="MeetingForm" style="display: none;">
          <h3 class="box-title">Minutes of Meeting</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/meeting_minutes')}}">
            {{ csrf_field() }}
             <div class="box-body">
                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" class="form-control" id="date" name="meetingDate">
                </div>
                <div class="form-group">
                  <label for="agenda">Agenda</label>
                  <input type="text" class="form-control" id="agenda" name="agenda" placeholder="Agenda">
                </div>
                <div class="form-group">
                  <label for="designation">Approvel</label><br>
                  <input type="checkbox" id="approved" name="approvel" value="Approved">Approved <br>
                  <input type="checkbox" id="notApproved" name="approvel" value="Not Approved">Not Approved
                </div>
                <div class="form-group">
                  <label for="memberParticipated">Member Participated</label>
                  <input type="text" class="form-control" id="memberParticipated" name="participatedMember" placeholder="Member Participated">
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
  $('#addMeetig').click(function(){
    $('#MeetingForm').toggle();
  });

  function delete_meetingMinutes(id)
  {
    if(confirm("Are you sure you want to delete teachers time table")){
      $.ajax({
        url: "{{url('adminView/delete_meetingMinutes')}}/"+id,
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