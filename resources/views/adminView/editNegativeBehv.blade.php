@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        
            <!-- Negative Behaviour -->
            <div class="box box-primary" id="negativeBehaviourForm">
                <h3 class="box-title">Update Negative Behaviour</h3>
              <!-- form start --><br>
              <form role="form" method="Post" action="{{url('adminView/behaviorRecord')}}">
                {{ csrf_field() }}
               <div class="box-body">
                <div class="form-group">
                  <label for="studentName">Student Name</label>
                  <input type="hidden" name="id" value="{{$negativeBehaviour_Edit->id}}">
                  <input type="text" name="stdName" value="{{$negativeBehaviour_Edit->stdName}}" class="form-control" disabled="">
                  <!-- <select class="form-control" name="studentName" id="studentName">
                    <option value="">Select</option>
                    <option value="{{$negativeBehaviour_Edit->stdName}}">{{$negativeBehaviour_Edit->stdName}}</option>
                  </select> -->
                </div>
                 <div class="form-group">
                   <label for="incidentDate">Incident Date</label>
                   <input type="date" class="form-control" id="incidentDate" name="incidentDate" value="{{$negativeBehaviour_Edit->incidentDate}}" placeholder="Incident Date">
                 </div>
                 <div class="form-group">
                   <label for="lessionPeriod">Lesson Period</label>
                   <input type="text" class="form-control" id="lessionPeriod" name="lessonPeriod" value="{{$negativeBehaviour_Edit->lessonPeriod}}" placeholder="Lession Period">
                 </div>
                 <div class="form-group">
                   <label for="lessionStyle">Lesson Style(Text/Physical)</label>
                   <input type="text" class="form-control" id="lessionStyle" name="lessonStyle" value="{{$negativeBehaviour_Edit->lessonStyle}}" placeholder="Lession Style">
                 </div>
                 <div class="form-group">
                   <label for="classroomSeatingPlan">Classroom Seating Plan</label>
                   <input type="text" class="form-control" id="classroomSeatingPlan" name="seatingPlan" value="{{$negativeBehaviour_Edit->seatingPlan}}" placeholder="Classroom Seating Plan">
                 </div>
                 <div class="form-group">
                   <label for="groupWork">Group Work/Pair/Individual</label>
                   <input type="text" class="form-control" id="groupWork" name="workType" value="{{$negativeBehaviour_Edit->workType}}" placeholder="Group Work/Pair/Individual">
                 </div>
                 <div class="form-group">
                   <label for="reportingStaff">Reporting Staff</label>
                   <input type="text" class="form-control" id="reportingStaff" name="reportingStaff" value="{{$negativeBehaviour_Edit->reportingStaff}}" placeholder="Reporting Staff">
                 </div>
                 <div class="form-group">
                   <label for="coveringStaff">Covering Staff</label>
                   <input type="text" class="form-control" id="coveringStaff" name="coveringStaff" value="{{$negativeBehaviour_Edit->coveringStaff}}" placeholder="Covering Staff">
                 </div>
                 <div class="form-group">
                   <label for="locationOfIncident">Location of Incident</label>
                   <input type="text" class="form-control" id="locationOfIncident" name="location" value="{{$negativeBehaviour_Edit->location}}" placeholder="Location of Incident">
                 </div>
                 <div class="form-group">
                   <label for="studentInvolved">Name of Student Involved</label>
                   <input type="text" class="form-control" id="studentInvolved" name="studentName" value="{{$negativeBehaviour_Edit->studentName}}" placeholder="Name of Student Involved">
                 </div>
                 <div class="form-group">
                   <label for="beahiourOfStudent">Behaviour of each Student Involved(bullying/victim of bullying/winess)</label>
                   <input type="text" class="form-control" id="beahiourOfStudent" name="behaviourType" value="{{$negativeBehaviour_Edit->behaviourType}}" placeholder="Behaviour of each Student Involved">
                 </div>
                 <div class="form-group">
                   <label for="comments">Comments(Cause of Incident)</label>
                   <textarea class="form-control" id="comments" name="comments">{{$negativeBehaviour_Edit->comments}}</textarea>
                 </div>
                 <div class="form-group">
                   <label for="initialActionTaken">Initial Action taken by the Reporting Member</label>
                   <input type="text" class="form-control" id="initialActionTaken" name="actionTaken" value="{{$negativeBehaviour_Edit->actionTaken}}" placeholder="Initial Action taken by the Reporting Member">
                 </div>
               </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
        <!-- End -->
      </div>
    </div>
  </div>
</div>
<!-- end main -->
<script>
  $('#addBtn').click(function(){
    $('#negativeBehaviourForm').toggle();
  });

  function delete_negtvBehv(id) {
    // alert(id);
      if (confirm('Are you sure want to delete this user')) {
          $.ajax({
            url: "{{url('adminView/deleteNegativeBhv')}}/"+id,
            success: function (response) {
              console.log(response);
              if (response == "1") {
                $('#tbl_show'+id).remove();

              }
            }
          });
      }
    }

    $('#addpstvBtn').click(function(){
      $('#postivBehavioursForm').toggle();
    });

    function delete_pstvBehv(id) {
    // alert(id);
      if (confirm('Are you sure want to delete this user')) {
          $.ajax({
            url: "{{url('adminView/deletePositiveBhv')}}/"+id,
            success: function (response) {
              console.log(response);
              if (response == "1") {
                $('#tbl_showPostv'+id).remove();

              }
            }
          });
      }
    }
</script>
@endsection