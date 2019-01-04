@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <div class="box box-primary" id="MeetingForm">
          <h3 class="box-title">Minutes of Meeting</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/meeting_minutes')}}">
            {{ csrf_field() }}
           <div class="box-body">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="date" class="form-control" id="date" name="meetingDate" value="{{$data->meetingDate}}">
              </div>
              <div class="form-group">
                <label for="agenda">Agenda</label>
                <input type="text" class="form-control" id="agenda" name="agenda" value="{{$data->meetingDate}}" placeholder="Agenda">
              </div>
              <div class="form-group">
                <label for="designation">Approvel</label><br>
                
                @if($data->approvel == 'Approved')
                  <input type="checkbox" id="approved" name="approvel" value="Approved" checked="">Approved <br>
                  <input type="checkbox" id="notApproved" name="approvel" value="Not Approved"> Not Approved
                  @else
                  <input type="checkbox" id="notApproved" name="approvel" value="Approved"> Approved <br>
                  <input type="checkbox" id="notApproved" name="approvel" value="Not Approved" checked="">Not Approved
                  @endif
              </div>
              <div class="form-group">
                <label for="memberParticipated">Member Participated</label>
                <input type="text" class="form-control" id="memberParticipated" name="participatedMember" value="{{$data->participatedMember}}" placeholder="Member Participated">
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