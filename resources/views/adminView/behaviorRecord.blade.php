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
            <!-- View -->
            <h3><strong>Positive Behaviour Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addpstvBtn"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Behaviour Type</th>
                        <th>Other Type</th>
                        <th>Date</th>
                        <th>Level</th>
                        <th>Position</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($pstvBehaviour)>0)
                  @foreach($pstvBehaviour as $ptvRecrd)
                      <tr id="tbl_showPostv{{$ptvRecrd->id}}">
                        <td>{{$ptvRecrd->id}}</td>

                        <td>{{$ptvRecrd->poStudentName}}</td>
                        <td>{{$ptvRecrd->behaviourType}}</td>
                        <td>{{$ptvRecrd->otherType}}</td>
                        <td>{{$ptvRecrd->dateOfBahave}}</td>
                        <td>{{$ptvRecrd->level}}</td>
                        <td>{{$ptvRecrd->position}}</td>
                        <td>

                          <a href="{{url('/adminView/editBehaviourRecord/'.$ptvRecrd->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;
                          <a href="" data-toggle="modal" onclick="delete_pstvBehv('{{$ptvRecrd->id}}');"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                      </tr>
                  @endforeach
                  @endif
                  </tbody>
              </table>
            </div>
            <!-- End View -->
            <div class="box box-primary" id="postivBehavioursForm" style="display: none;">
                <h3 class="box-title">Positive Behaviour</h3>
              <!-- form start --><br>
              <form role="form" method="post" action="{{url('adminView/postivBehaviours')}}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="PoStudentName">Student Name</label>
                    <select class="form-control" name="poStudentName" id="PoStudentName">
                      <option value="">Select</option>
                      @foreach($studentInfo as $stdntRecrd)

                      <option value="{{$stdntRecrd->stdName}}">{{$stdntRecrd->stdName}}</option>
                      @endforeach
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
                    <input type="text" class="form-control" id="otherType" name="otherType" placeholder="Other type of Behaviour">
                  </div>
                  <div class="form-group">
                    <label for="dateOfBahave">Date</label>
                    <input type="date" class="form-control" id="dateOfBahave" name="dateOfBahave" placeholder="Date">
                  </div>
                  <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" class="form-control" id="level" name="level" placeholder="Level">
                  </div>
                  <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="Position">
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
            <!-- View -->
            <h3><strong>Negative Behaviour Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addBtn"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Incident Date</th>
                        <th>Lession Period</th>
                        <th>Lesson Style</th>
                        <th>Work Type</th>
                        <th>Reporting Staff</th>
                        <th>Covering Staff</th>
                        <th>Location</th>
                        <th>Behaviour of Student Involved</th>
                        <th>Comments</th>
                        <th>Iniial Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($ngtvBehaviour)>0)
                  @foreach($ngtvBehaviour as $ngtRecrd)
                      <tr id="tbl_show{{$ngtRecrd->id}}">
                        <td>{{$ngtRecrd->id}}</td>
                        <td>{{$ngtRecrd->stdName}}</td>
                        <td>{{$ngtRecrd->incidentDate}}</td>
                        <td>{{$ngtRecrd->lessonPeriod}}</td>
                        <td>{{$ngtRecrd->lessonStyle}}</td>
                        <td>{{$ngtRecrd->seatingPlan}}</td>
                        <td>{{$ngtRecrd->workType}}</td>
                        <td>{{$ngtRecrd->reportingStaff}}</td>
                        <td>{{$ngtRecrd->coveringStaff}}</td>
                        <td>{{$ngtRecrd->location}}</td>
                        <td>{{$ngtRecrd->behaviourType}}</td>
                        <td>{{$ngtRecrd->comments}}</td>
                        <td>{{$ngtRecrd->actionTaken}}</td>
                        <td>

                          <a href="{{url('/adminView/editNegativeBehv/'.$ngtRecrd->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;
                          <a href="" data-toggle="modal" onclick="delete_negtvBehv('{{$ngtRecrd->id}}');"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                      </tr>
                  @endforeach
                  @endif
                  </tbody>
              </table>
            </div>
            <!-- End View -->
            <!-- Negative Behaviour -->
            <div class="box box-primary" id="negativeBehaviourForm" style="display: none;">
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