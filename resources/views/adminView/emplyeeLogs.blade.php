@extends('layouts.app')
@section('content')

<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        @if(session()->has('logs'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('logs')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Employee Rewards</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addLogs"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Employee Name</th>
                    <th>Professional Qualification</th>
                    <th>Course Name</th>
                    <th>Course Venu</th>
                    <th>Course Date</th>
                    <th>Course Duration</th>
                    <th>Conducted By</th>
                    <th>Task Name</th>
                    <th>Task Date</th>
                    <th>Task Duration</th>
                    <th>Task Status</th>
                    <th>Comments</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showFacultyLogs)>0)
                @foreach($showFacultyLogs as $logsRecrd)
                  <tr id="tbl_show{{$logsRecrd->id}}">
                    <td>{{$logsRecrd->id}}</td>
                    <td>{{$logsRecrd->name}}</td>
                    <td>{{$logsRecrd->professionalQualification}}</td>
                    <td>{{$logsRecrd->courseName}}</td>
                    <td>{{$logsRecrd->courseVenu}}</td>
                    <td>{{$logsRecrd->courseDate}}</td>
                    <td>{{$logsRecrd->courseDuration}}</td>
                    <td>{{$logsRecrd->conductedBy}}</td>
                    <td>{{$logsRecrd->task}}</td>
                    <td>{{$logsRecrd->taskDate}}</td>
                    <td>{{$logsRecrd->duration}}</td>
                    <td>{{$logsRecrd->taskStatus}}</td>
                    <td>{{$logsRecrd->comments}}</td>
                    <td>
                      <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_logsRecord('{{$logsRecrd->id}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
              @endif
              </tbody>
          </table>
          <div class="text-right"><?php echo $showFacultyLogs->render(); ?></div>
        </div>
        <br><br>
        <!-- End View -->
        <form role="form" method="Post" action="{{url('adminView/employee_log')}}" id="employeeLogsForm" style="background: transparent; padding: 0; display: none;">
          {{ csrf_field() }}
          <!-- Employee Performance Record -->
          <div class="tab-content">
              <ul class="nav nav-tabs nav-justified">
            <li id="trainingRecord" class="active"><a data-toggle="tab" href="#training">Training Record</a></li>
            <li id="refresherCou" class=""><a data-toggle="tab" href="#refresher">Refresher Courses</a></li>
            <!-- <li ><a data-toggle="tab" href="#performance">Performance Record</a></li> -->
            <li id="other" class=""><a data-toggle="tab" href="#otherTask">Other Task</a></li>
          </ul>
         
            <div id="training" class="tab-pane fade in active">
              <!-- Academic Record -->
              <div class="box box-primary">
                  <h3 class="box-title">Training Record</h3>
                <!-- form start --><br>
                <div style="background: #dcdcdcba;padding: 15px;">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="professionalQualification">Employee Name</label>
                     <select class="form-control" name="faculty_id">
                       <option value="">Select Employeer</option>
                       
                      @foreach($facultyR as $record)
                       <option value="{{$record->id}}">{{$record->name}}</option>
                      @endforeach
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="professionalQualification">Professional Qualification(PTC.CT/BED/Med. etc)</label>
                      <input type="text" class="form-control" id="professionalQualification" name="professionalQualification" placeholder="Professional Qualification">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <a class="fa-btn btn-1 btn-1e" id="trainingNext" href="#refresher" data-toggle="tab" >Next</a>
                  </div>
                </div>
                  
              </div><!-- /.box -->
            </div>
            <div id="refresher" class="tab-pane fade in">
              <!-- Previous Result -->
              <div class="box box-primary">
                  <h3 class="box-title">Refresher Courses</h3>
                <!-- form start --><br>
                  <div style="background: #dcdcdcba;padding: 15px;">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="nameOfCourse">Name of Course</label>
                        <input type="text" class="form-control" id="nameOfCourse" name="courseName" placeholder="Name of Course">
                      </div>
                      <div class="form-group">
                        <label for="venue">Venue</label>
                        <input type="text" class="form-control" id="venue" name="courseVenu" placeholder="Venue">
                      </div>
                      <div class="form-group">
                        <label for="dateYear">Date/Year</label>
                        <input type="date" class="form-control" id="dateYear" name="courseDate" placeholder="Date/Year">
                      </div>
                      <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" id="duration" name="courseDuration" placeholder="Duration">
                      </div>
                      <div class="form-group">
                        <label for="conducted">Conducted By</label>
                        <input type="text" class="form-control" id="conducted" name="conductedBy" placeholder="Conducted By">
                      </div>
                    </div>
                    <div class="box-footer">
                      <a class="fa-btn btn-1 btn-1e" id="otherTaskNext" href="#otherTask" data-toggle="tab">Next</a>
                    </div>
                  </div>
              </div><!-- /.box -->
            </div>
            <div id="otherTask" class="tab-pane fade">
              <!-- Academic Record -->
              <div class="box box-primary">
                  <h3 class="box-title">Other Task Assigned</h3>
                <!-- form start --><br>
                <div style="background: #dcdcdcba;padding: 15px;">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="noStudents">Date</label>
                      <input type="date" class="form-control" id="date" name="taskDate" placeholder="No. Student">
                    </div>
                    <div class="form-group">
                      <label for="task">Task</label>
                      <input type="text" class="form-control" id="task" name="task" placeholder="Task">
                    </div>
                    <div class="form-group">
                      <label for="duration">Duration</label>
                      <input type="text" class="form-control" id="duration" name="duration" placeholder="Duration">
                    </div>
                    <div class="form-group">
                      <label for="duration">Task Status</label>
                      <select class="form-control" name="taskStatus">
                        <option>Completed</option>
                        <option>Not Completed</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="comments">Comments</label>
                      <textarea class="form-control" id="comments" name="comments" placeholder="Comments"></textarea>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                  </div>
                </div>  
                
              </div><!-- /.box -->
            </div>
           
          </div>
        </form>
        <!-- End -->
      </div>
    </div>
  </div>
</div>
<!-- end main -->
<script type="text/javascript">
  $('#trainingNext').click(function(){
    $('#trainingRecord').removeClass("active");
    $('#refresherCou').addClass("active");
  });

  $('#otherTaskNext').click(function(){
    $('#refresherCou').removeClass("active");
    $('#other').addClass("active");
  });

  $('#addLogs').click(function(){
    $('#employeeLogsForm').toggle();
  });


  function delete_logsRecord(id)
  {
    if(confirm("Are you sure you want to delete employee logs")){
      $.ajax({
        url: "{{url('adminView/delete_employeeLogs')}}/"+id,
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