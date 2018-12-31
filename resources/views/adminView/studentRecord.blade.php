@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Library Stock/Accession Register -->
        @if(session()->has('studentR'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('studentR')}}
        </div>
        @endif
        <div class="box box-primary">
            <h3 class="box-title">Student Participation Record</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/student_record')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <!-- <div class="form-group">
                <label for="srNo">Sr no.</label>
                <input type="text" class="form-control" id="srNo" placeholder="Student name">
              </div> -->
              <div class="form-group">
                <label for="studentName">Student name</label>
                <select class="form-control" name="studentName" id="stdName">
                  <option value="">Select</option>
                  @foreach($studentInfo as $student)
                  <option value="{{$student->id}}">{{$student->stdName}}</option>
                  @endforeach
                </select>
                <!-- <input type="text" class="form-control" id="studentName" name="stdName" placeholder="Student name"> -->
              </div>
              <div class="form-group">
                <label for="fatherName">Father name</label>
                <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Father name" readonly="">
              </div>
              <div class="form-group">
                <label for="dob">Date of birth</label>
                <input type="date" class="form-control" name="dob" id="dob" readonly="">
              </div>
              <div class="form-group">
                <label for="admissionNo">Admission no.</label>
                <input type="text" class="form-control" id="admissionNo" name="admissionNo" placeholder="Admission No" readonly="">
              </div>
              <div class="form-group">
                <label for="rollNo">Roll No</label>
                <input type="text" class="form-control" id="rollNo" name="rollNo" placeholder="Roll No" readonly="">
              </div>
              <div class="form-group">
                <label for="class">Class</label>
                <input type="text" class="form-control" id="class" name="class" placeholder="Class">
              </div>
              <div class="form-group">
                <label for="attendanceDuringYear">Attendance during year</label>
                <input type="text" class="form-control" id="attendanceDuringYear" name="attendanceDuringYear" placeholder="Adttendance during year">
              </div>
              <div class="form-group">
                <label for="maxAttendance">Max. adttendance</label>
                <input type="text" class="form-control" id="maxAttendance" name="maxAttendance" placeholder="Max. Adttendance">
              </div>
              <div class="form-group">
                <label for="homeAddress">Home address</label>
                <textarea id="homeAddress" class="form-control" name="homeAddress" placeholder="Home address"></textarea>
              </div>
              <div class="form-group">
                <label for="studentPhoto">Photo</label>
                <input type="file" class="form-control" name="stdPhoto" id="studentPhoto">
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
<script type="text/javascript">
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $('#stdName').change(function(){
    var studentId = $(this).val();
    var url = "{{url('adminView/student_record')}}";
    $.ajax({
      url: url,
      type: 'get',
      data: {id:studentId},
      dataType: 'json',
      success: function(data){
        $('#fatherName').val(data.fatherName);
        $('#dob').val(data.stdDob);
        $('#rollNo').val(data.rollNo);
        $('#admissionNo').val(data.admissionNo); 
      }
    });
  });
</script>
@endsection