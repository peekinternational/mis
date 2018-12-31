@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <!-- Achievement Record -->
        @if(session()->has('alumni'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('alumni')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Alumni Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addAlumni"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Father Name</th>
                    <th>Last Class</th>
                    <th>Year of Leaving School</th>
                    <th>Address</th>
                    <th>Phone No</th>
                    <th>Job Status</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showAlumni)>0)
                @foreach($showAlumni as $almniRecrd)
                  <tr id="tbl_show{{$almniRecrd->id}}">
                    <td>{{$almniRecrd->id}}</td>
                    <td>{{$almniRecrd->name}}</td>
                    <td>{{$almniRecrd->fatherName}}</td>
                    <td>{{$almniRecrd->lastClass}}</td>
                    <td>{{$almniRecrd->year}}</td>
                    <td>{{$almniRecrd->address}}</td>
                    <td>{{$almniRecrd->phoneNo}}</td>
                    <td>{{$almniRecrd->jobStatus}}</td>
                    <td>
                 <a href="{{url('/adminView/edit_ex_student/'.$almniRecrd->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;

                      <a href="" data-toggle="modal" onclick="delete_alumniRecord('{{$almniRecrd->id}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
              @endif
              </tbody>
          </table>
          <div class="text-right"><?php echo $showAlumni->render(); ?></div>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="alumniForm" style="display: none;">
          <h3 class="box-title">Alumni Ex-Student Record</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post" action="{{url('adminView/exStudent_record')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="fatherName">Father's Name</label>
                <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Father's Name">
              </div>
              <div class="form-group">
                <label for="lastClassAttended">Last Class Attended</label>
                <input type="text" class="form-control" id="lastClassAttended" name="lastClass" placeholder="Last Class Attended">
              </div>
              <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="year">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
              </div>
              <div class="form-group">
                <label for="phoneNo">Phone No</label>
                <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Phone No">
              </div>
              <div class="form-group">
                <label for="jobStatus">Present Job Status</label>
                <input type="text" class="form-control" id="jobStatus" name="jobStatus" placeholder="Job Status">
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
<script>
  $('#addAlumni').click(function() {
    $('#alumniForm').toggle();
  });


  function delete_alumniRecord(id) {
    // alert(id);
    if (confirm('Are you sure want to delete this user')) {
        $.ajax({
          url: "{{url('adminView/deleteAlmniRecrd')}}/"+id,
          success: function (response) {
            console.log(response);
            if (response == "1") {
              $('#tbl_show'+id).remove();

            }
          }
        });
    }
  }
</script>
@endsection