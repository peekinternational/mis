@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a data-toggle="tab" href="#positiveBehaviour">Positive Behaviour</a></li>
          <li><a data-toggle="tab" href="#negativeBehaviour">Negative Behaviour</a></li>
        </ul>
        <div class="tab-content">
          <div id="positiveBehaviour" class="tab-pane fade in active">
            <!-- Academic Record -->
            @if(session()->has('PosBehaviour'))
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              {{session()->get('PosBehaviour')}}
            </div>
            @endif
            <div class="box box-primary" id="postivBehavioursForm">
                <h3 class="box-title">Positive Behaviour</h3>
              <!-- form start --><br>
              <form role="form" method="post" action="{{url('adminView/behaviorRecord')}}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="PoStudentName">Student Name</label>
                    <input type="hidden" name="id" value="{{$positiveBehaviour_Edit->id}}">
                    <select class="form-control" name="poStudentName" id="PoStudentName">
                      <option value="{{$positiveBehaviour_Edit->poStudentName}}">{{$positiveBehaviour_Edit->poStudentName}}</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="typeOFBehaviour">Type of Behaviour</label>
                    <select class="form-control" name="behaviourType">
                      <option>Game</option>
                      <option>Debate</option>
                      <option>Essay Writing</option>
                      <option>Musice</option>
                      <option>Skits</option>
                      <option>Drama</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="otherType">Other</label>
                    <input type="text" class="form-control" id="otherType" name="otherType" placeholder="Other type of Behaviour" value="{{ $positiveBehaviour_Edit->otherType}}">
                  </div>
                  <div class="form-group">
                    <label for="dateOfBahave">Date</label>
                    <input type="date" class="form-control" id="dateOfBahave" name="dateOfBahave" placeholder="Date" value="{{ $positiveBehaviour_Edit->dateOfBahave}}">
                  </div>
                  <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" class="form-control" id="level" name="level" placeholder="Level" value="{{ $positiveBehaviour_Edit->level}}">
                  </div>
                  <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="Position" value="{{ $positiveBehaviour_Edit->position}}">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <input type="submit" class="fa-btn btn-1 btn-1e" value="Submit">
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="negativeBehaviour" class="tab-pane fade">
            @if(session()->has('NegBehaviour'))
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              {{session()->get('NegBehaviour')}}
            </div>
            @endif
            
            <!-- Negative Behaviour -->
            <div class="box box-primary" id="negativeBehaviourForm">
                <h3 class="box-title">Negative Behaviour</h3>
              <!-- form start --><br>
              <form role="form" method="Post" action="{{url('adminView/negatvBehaviour')}}">
                {{ csrf_field() }}
               <div class="box-body">
                <div class="form-group">
                  <label for="studentName">Student Name</label>
                  <select class="form-control" name="studentName" id="studentName">
                    <option value="">Select</option>
                    @foreach($studentInfo as $stdntRecrd)
                    <option value="{{$stdntRecrd->id}}">{{$stdntRecrd->stdName}}</option>
                    @endforeach
                  </select>
                </div>
                 <div class="form-group">
                   <label for="incidentDate">Incident Date</label>
                   <input type="date" class="form-control" id="incidentDate" name="incidentDate" placeholder="Incident Date">
                 </div>
                 <div class="form-group">
                   <label for="lessionPeriod">Lesson Period</label>
                   <input type="text" class="form-control" id="lessionPeriod" name="lessonPeriod" placeholder="Lession Period">
                 </div>
                 <div class="form-group">
                   <label for="lessionStyle">Lesson Style(Text/Physical)</label>
                   <input type="text" class="form-control" id="lessionStyle" name="lessonStyle" placeholder="Lession Style">
                 </div>
                 <div class="form-group">
                   <label for="classroomSeatingPlan">Classroom Seating Plan</label>
                   <input type="text" class="form-control" id="classroomSeatingPlan" name="seatingPlan" placeholder="Classroom Seating Plan">
                 </div>
                 <div class="form-group">
                   <label for="groupWork">Group Work/Pair/Individual</label>
                   <input type="text" class="form-control" id="groupWork" name="workType" placeholder="Group Work/Pair/Individual">
                 </div>
                 <div class="form-group">
                   <label for="reportingStaff">Reporting Staff</label>
                   <input type="text" class="form-control" id="reportingStaff" name="reportingStaff" placeholder="Reporting Staff">
                 </div>
                 <div class="form-group">
                   <label for="coveringStaff">Covering Staff</label>
                   <input type="text" class="form-control" id="coveringStaff" name="coveringStaff" placeholder="Covering Staff">
                 </div>
                 <div class="form-group">
                   <label for="locationOfIncident">Location of Incident</label>
                   <input type="text" class="form-control" id="locationOfIncident" name="location" placeholder="Location of Incident">
                 </div>
                 <div class="form-group">
                   <label for="studentInvolved">Name of Student Involved</label>
                   <input type="text" class="form-control" id="studentInvolved" name="studentName" placeholder="Name of Student Involved">
                 </div>
                 <div class="form-group">
                   <label for="beahiourOfStudent">Behaviour of each Student Involved(bullying/victim of bullying/winess)</label>
                   <input type="text" class="form-control" id="beahiourOfStudent" name="behaviourType" placeholder="Behaviour of each Student Involved">
                 </div>
                 <div class="form-group">
                   <label for="comments">Comments(Cause of Incident)</label>
                   <textarea class="form-control" id="comments" name="comments"></textarea>
                 </div>
                 <div class="form-group">
                   <label for="initialActionTaken">Initial Action taken by the Reporting Member</label>
                   <input type="text" class="form-control" id="initialActionTaken" name="actionTaken" placeholder="Initial Action taken by the Reporting Member">
                 </div>
               </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
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