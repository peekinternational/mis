@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <!-- Achievement Record -->
        @if(session()->has('ratio'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('ratio')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Student Teacher Ratio</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addRatio"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Total Students</th>
                    <th>Total Teachers</th>
                    <th>Ratio</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showRatio)>0)
                @foreach($showRatio as $ratio)
                  <tr id="tbl_show{{$ratio->id}}">
                    <td>{{$ratio->id}}</td>
                    <td>{{$ratio->totalStudents}}</td>
                    <td>{{$ratio->totalTeachers}}</td>
                    <td>{{$ratio->ratio}}</td>
                    <td>
                      <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_totalRatio('{{$ratio->id}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
              @endif
              </tbody>
          </table>
          <div class="text-right"><?php echo $showRatio->render(); ?></div>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="ratioForm" style="display: none;">
          <h3 class="box-title">Student Teacher Ratio</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post" action="{{url('adminView/ratio')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="noOfStudents">No. of Students</label>
                <input type="number" class="form-control" id="noOfStudents" name="totalStudents" min="0">
              </div>
              <div class="form-group">
                <label for="noOfteacher">No. of Teachers</label>
                <input type="number" class="form-control" id="noOfteacher" name="totalTeachers" min="0" onfocusout="average()">
              </div>
              <div class="form-group">
                <label for="ratio">Ratio(total students/total teacher)</label>
                <input type="text" class="form-control" name="ratio" id="ratio" readonly="">
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



  $('#addRatio').click(function(){
    $('#ratioForm').toggle();
  });

  function delete_totalRatio(id)
  {
    if(confirm("Are you sure you want to delete employee logs")){
      $.ajax({
        url: "{{url('adminView/delete_Ratio')}}/"+id,
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