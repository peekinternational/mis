@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <!-- Admission Inquiries -->
        @if(session()->has('admission'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('admission')}}
        </div>
        @endif
        <div class="box box-primary" id="admissionInqryForm">
          <h3 class="box-title">Admission Inquiries</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post"  action="{{url('adminView/admissionInqry')}}">
            {{ csrf_field() }}
          @foreach($inquiryRecord as $inqryRecrd)
          <div class="box-body">
            <div class="form-group">
              <label for="studentName">Student Name</label>
              <input type="hidden" name="inquiryId" value="{{$inqryRecrd->inquiryId}}">
              <input type="text" class="form-control" id="studentName" name="stdName" value="{{$inqryRecrd->stdName}}" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="fatherName">Father's Name</label>
              <input type="text" class="form-control" id="fatherName" name="fatherName" value="{{$inqryRecrd->fatherName}}" placeholder="Father's Name">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="stdAddress" value="{{$inqryRecrd->stdAddress}}" placeholder="Address">
            </div>
            <div class="form-group">
              <label for="phoneNo">Phone No</label>
              <input type="text" class="form-control" id="phoneNo" name="phoneNo" value="{{$inqryRecrd->phoneNo}}" placeholder="Phone No">
            </div>
            <div class="form-group">
              <label for="AdmissionSought">Addmission Sought in Class</label>
              <input type="text" class="form-control" id="AdmissionSought" name="AdmissionSought" value="{{$inqryRecrd->admissionSought}}" placeholder="Address">
            </div>
          </div><!-- /.box-body -->

          @endforeach

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
<script type="">
  
  function delete_record(id) {
    // alert(id);
      if(confirm('Are you sure want to delete this Record')) {
        $.ajax({
          url: "{{url('adminView/deleteAdmissionInqury')}}/"+id,
          success: function (response) {
            // console.log(response);
            if (response == "1") {
              $('#tbl_show'+id).remove();

            }
          }
        });
      }
    }
</script>
@endsection