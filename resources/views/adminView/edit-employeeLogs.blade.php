@extends('layouts.app')
@section('content')

<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        
        <form role="form" method="Post" action="{{url('adminView/employee_log')}}" id="employeeLogsForm" style="background: transparent; padding: 0;">
          {{ csrf_field() }}
          <!-- Employee Performance Record -->
          <div class="tab-content">       
            <div id="training" class="tab-pane fade in active">
              <!-- Academic Record -->
              <div class="box box-primary">
                  <h3 class="box-title">Training Record</h3>
                <!-- form start --><br>
                <div style="background: #dcdcdcba;padding: 15px;">
                  <div class="box-body">
                    <div class="form-group">
                      <input type="hidden" name="id" value="{{$logsData->id}}">
                      <label for="professionalQualification">Employee Name</label>
                     <select class="form-control" name="faculty_id">
                       <option value="{{$logsData->faculty_id}}">{{$logsData->name}}</option>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="professionalQualification">Professional Qualification(PTC.CT/BED/Med. etc)</label>
                      <input type="text" class="form-control" id="professionalQualification" name="professionalQualification" value="{{$logsData->professionalQualification}}" placeholder="Professional Qualification">
                    </div>
                    <div class="form-group">
                      <label for="nameOfCourse">Name of Course</label>
                      <input type="text" class="form-control" id="nameOfCourse" name="courseName" value="{{$logsData->courseName}}" placeholder="Name of Course">
                    </div>
                    <div class="form-group">
                      <label for="venue">Venue</label>
                      <input type="text" class="form-control" id="venue" name="courseVenu" value="{{$logsData->courseVenu}}" placeholder="Venue">
                    </div>
                    <div class="form-group">
                      <label for="dateYear">Date/Year</label>
                      <input type="date" class="form-control" id="dateYear" name="courseDate" value="{{$logsData->courseDate}}" placeholder="Date/Year">
                    </div>
                    <div class="form-group">
                      <label for="duration">Duration</label>
                      <input type="text" class="form-control" id="duration" name="courseDuration" value="{{$logsData->courseDuration}}" placeholder="Duration">
                    </div>
                    <div class="form-group">
                      <label for="conducted">Conducted By</label>
                      <input type="text" class="form-control" id="conducted" name="conductedBy" value="{{$logsData->conductedBy}}" placeholder="Conducted By">
                    </div>
                    <div class="form-group">
                      <label for="noStudents">Date</label>
                      <input type="date" class="form-control" id="date" name="taskDate" value="{{$logsData->taskDate}}" placeholder="No. Student">
                    </div>
                    <div class="form-group">
                      <label for="task">Task</label>
                      <input type="text" class="form-control" id="task" name="task" value="{{$logsData->task}}" placeholder="Task">
                    </div>
                    <div class="form-group">
                      <label for="duration">Duration</label>
                      <input type="text" class="form-control" id="duration" name="duration" value="{{$logsData->duration}}" placeholder="Duration">
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
                      <textarea class="form-control" id="comments" name="comments" placeholder="Comments">{{$logsData->comments}}</textarea>
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