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
        <!-- View -->
        <h3><strong>Admission Inquiry</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addBtn"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Father Name</th>
                    <th>Address</th>
                    <th>Father Phone</th>
                    <th>Admission Sought in Class</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @foreach($inquiryRecord as $inqryRecrd)
                  <tr id="tbl_show{{$inqryRecrd->inquiryId}}">
                    <td>{{$inqryRecrd->inquiryId}}</td>
                    <td>{{$inqryRecrd->stdName}}</td>
                    <td>{{$inqryRecrd->fatherName}}</td>
                    <td>{{$inqryRecrd->stdAddress}}</td>
                    <td>{{$inqryRecrd->phoneNo}}</td>
                    <td>{{$inqryRecrd->admissionSought}}</td>
                    <td>
                      <a href="{{url('/adminView/editAdmissionInquiries/'.$inqryRecrd->inquiryId)}}"><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_record('{{$inqryRecrd->inquiryId}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="admissionInqryForm" style="display: none;">
          <h3 class="box-title">Admission Inquiries</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post" action="{{url('adminView/admissionInqry')}}">
            {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label for="studentName">Student Name</label>
              <input type="text" class="form-control" id="studentName" name="stdName" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="fatherName">Father's Name</label>
              <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Father's Name">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="stdAddress" placeholder="Address">
            </div>
            <div class="form-group">
              <label for="phoneNo">Phone No</label>
              <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Phone No">
            </div>
            <div class="form-group">
              <label for="AdmissionSought">Addmission Sought in Class</label>
              <input type="text" class="form-control" id="AdmissionSought" name="AdmissionSought" placeholder="Address">
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
<script type="">
  $('#addBtn').click(function(){
    $('#admissionInqryForm').toggle();
  });

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