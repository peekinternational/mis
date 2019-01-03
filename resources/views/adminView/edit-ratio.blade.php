@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <!-- Achievement Record -->
        
        
        <div class="box box-primary" id="ratioForm">
          <h3 class="box-title">Student Teacher Ratio</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post" action="{{url('adminView/ratio')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="noOfStudents">No. of Students</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="number" class="form-control" id="noOfStudents" name="totalStudents" min="0" value="{{$data->totalStudents}}">
              </div>
              <div class="form-group">
                <label for="noOfteacher">No. of Teachers</label>
                <input type="number" class="form-control" id="noOfteacher" name="totalTeachers" min="0" onfocusout="average()" value="{{$data->totalTeachers}}">
              </div>
              <div class="form-group">
                <label for="ratio">Ratio(total students/total teacher)</label>
                <input type="text" class="form-control" name="ratio" id="ratio" value="{{$data->ratio}}" readonly="">
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
        <!-- End -->
      </div>
    </div>
  </div>
</div>
<!-- end main -->
<script type="text/javascript">
  var students = $("#noOfStudents");
  var teachers = $("#noOfteacher");
  var answer = $("#ratio");

  function average(){
    var ans = students.val() /teachers.val();
    var totalRatio = Math.round(ans);
    answer.val(totalRatio);
  }

</script>
@endsection