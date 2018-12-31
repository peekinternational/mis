@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
      
        <div class="box box-primary" id="alumniForm">
          <h3 class="box-title">Edit Alumni Ex-Student Record</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post" action="{{url('adminView/exStudent')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="Name">Name</label>
                  <input type="hidden" name="id" value="{{$alumni_Edit->id}}">
                <input type="text" class="form-control" id="Name" name="name" value="{{$alumni_Edit->name}}" placeholder="Enter Name">
                </div>
              <div class="form-group">
                <label for="fatherName">Father's Name</label>
                <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Father's Name" value="{{$alumni_Edit->fatherName}}">
              </div>
              <div class="form-group">
                <label for="lastClassAttended">Last Class Attended</label>
                <input type="text" class="form-control" id="lastClassAttended" name="lastClass" value="{{$alumni_Edit->lastClass}}" placeholder="Last Class Attended">
              </div>
              <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{$alumni_Edit->year}}" placeholder="year">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$alumni_Edit->address}}" placeholder="Address">
              </div>
              <div class="form-group">
                <label for="phoneNo">Phone No</label>
                <input type="text" class="form-control" id="phoneNo" name="phoneNo" value="{{$alumni_Edit->phoneNo}}"  placeholder="Phone No">
              </div>
              <div class="form-group">
                <label for="jobStatus">Present Job Status</label>
                <input type="text" class="form-control" id="jobStatus" name="jobStatus" value="{{$alumni_Edit->jobStatus}}"  placeholder="Job Status">
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

@endsection