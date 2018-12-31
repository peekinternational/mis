@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
            <!-- Employee Info -->
            @if(session()->has('faculty'))
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              {{session()->get('faculty')}}
            </div>
            @endif

            <!-- View -->
            <h3><strong>Emplyees Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addEmployee"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>CNIC</th>
                        <th>DOB</th>
                        <th>Domicile</th>
                        <th>Qualification</th>
                        <th>Designation</th>
                        <th>BPS</th>
                        <th>Entry in Govt Service with Post</th>
                        <th>First Order No. Date & Authority</th>
                        <th>Date of Present Joining with Post</th>
                        <th>Order No. Date & Authority</th>
                        <th>Date of Joining Present District</th>
                        <th>CM Package/ Selection Grade</th>
                        <th>Job Type</th>
                        <th>Promotion Procedure</th>
                        <th>Personal No</th>
                        <th>GPF No</th>
                        <th>NTN</th>
                        <th>Bank A/C No.</th>
                        <th>Bank Name & Branch</th>
                        <th>Branch Code</th>
                        <th>Contact No. Home & Mobile</th>
                        <th>Email Address</th>
                        <th>Home Address</th>
                        <th>School Name</th>
                        <th>School Address</th>
                        <th>EMIS Code</th>
                        <th>UC Name & No</th>
                        <th>PP No</th>
                        <th>NA No. Markaz</th>
                        <th>Tehsil</th>
                        <th>District</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  @if(count($facultyRrd)>0)
                    @foreach($facultyRrd as $facultyRecrd)
                      <tr id="tbl_show{{$facultyRecrd->id}}">
                        <td>{{$facultyRecrd->id}}</td>
                        <td>{{$facultyRecrd->name}}</td>
                        <td>{{$facultyRecrd->fatherName}}</td>
                        <td>{{$facultyRecrd->cnicNumber}}</td>
                        <td>{{$facultyRecrd->dob}}</td>
                        <td>{{$facultyRecrd->domicile}}</td>
                        <td>{{$facultyRecrd->qualification}}</td>
                        <td>{{$facultyRecrd->designation}}</td>
                        <td>{{$facultyRecrd->basicScale}}</td>
                        <td>{{$facultyRecrd->serviceEntryDate}}</td>
                        <td>{{$facultyRecrd->firstOrderNo}}</td>
                        <td>{{$facultyRecrd->presentJoiningDate}}</td>
                        <td>{{$facultyRecrd->orderNo}}</td>
                        <td>{{$facultyRecrd->districtJoiningDate}}</td>
                        <td>{{$facultyRecrd->selectionGrade}}</td>
                        <td>{{$facultyRecrd->jobType}}</td>
                        <td>{{$facultyRecrd->procedure}}</td>
                        <td>{{$facultyRecrd->personalNo}}</td>
                        <td>{{$facultyRecrd->gpfNo}}</td>
                        <td>{{$facultyRecrd->ntnNumber}}</td>
                        <td>{{$facultyRecrd->bankAccNo}}</td>
                        <td>{{$facultyRecrd->bankName}}</td>
                        <td>{{$facultyRecrd->branchCode}}</td>
                        <td>{{$facultyRecrd->bankContact}}</td>
                        <td>{{$facultyRecrd->bankEmail}}</td>
                        <td>{{$facultyRecrd->homeAddress}}</td>
                        <td>{{$facultyRecrd->schoolName}}</td>
                        <td>{{$facultyRecrd->schoolAddress}}</td>
                        <td>{{$facultyRecrd->emisCode}}</td>
                        <td>{{$facultyRecrd->ucName}}</td>
                        <td>{{$facultyRecrd->ppNo}}</td>
                        <td>{{$facultyRecrd->Na}}</td>
                        <td>{{$facultyRecrd->tehsil}}</td>
                        <td>{{$facultyRecrd->district}}</td>
                        <td>
                          <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
                          <a href="" data-toggle="modal" onclick="delete_fcultyRecord('{{$facultyRecrd->id}}');"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  @endif
                  </tbody>
              </table>
              <div class="text-right"><?php echo $facultyRrd->render(); ?></div>
            </div>
            <!-- End View -->

        <div class="box box-primary" id="employeeForm" style="display: none;">
            <h3 class="box-title">Employee Personal Information</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/faculty_info')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <!-- <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" placeholder="ID">
              </div> -->
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
              </div>
              <div class="form-group col-md-6">
                <label for="fatherName">Father's Name</label>
                <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Father's Name">
              </div>
              <div class="form-group col-md-6">
                <label for="cnicNumber">CNIC No</label>
                <input type="text" class="form-control" id="cnicNumber" name="cnicNumber" placeholder="CNIC No">
              </div>
              <div class="form-group col-md-6">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
              </div>
              <div class="form-group col-md-6">
                <label for="basicScale">BPS</label>
                <input type="text" class="form-control" id="basicScale" name="basicScale" placeholder="Basic Pay Scale">
              </div>
              <div class="form-group col-md-6">
                <label for="dateOfBirth">Date of Birth</label>
                <input type="date" class="form-control" id="dateOfBirth" name="dob" placeholder="Date of Birth">
              </div>
              <div class="form-group col-md-6">
                <label for="domicile">Domicile</label>
                <input type="text" id="domicile" class="form-control" name="domicile" placeholder="Domicile">
              </div>
              <div class="form-group col-md-6">
                <label for="qualification">Qualification(Academic/Professional)</label>
                <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification">
              </div>
              <div class="form-group col-md-6">
                <label for="dateOfFirstEntry">Date of First Entry in Govt Service with Post</label>
                <input type="text" class="form-control" id="dateOfFirstEntry" name="serviceEntryDate" placeholder="Date of First Entry in Govt Service with Post">
              </div>
              <div class="form-group col-md-6">
                <label for="firstOrderNo">First Order No. Date & Authority</label>
                <input type="text" class="form-control" id="firstOrderNo" name="firstOrderNo" placeholder="First Order No">
              </div>
              <div class="form-group col-md-6">
                <label for="dateOfPresentJoining">Date of Present Joining with Post</label>
                <input type="text" class="form-control" id="dateOfPresentJoining" name="presentJoiningDate" placeholder="Date of Present Joining with Post">
              </div>
              <div class="form-group col-md-6">
                <label for="orderNoDate">Order No. Date & Authority</label>
                <input type="text" class="form-control" id="orderNoDate" name="orderNo" placeholder="Order No. Date & Authority">
              </div>
              <div class="form-group col-md-6">
                <label for="joiningPresentDistrict">Date of Joining Present District (in case of Inter-district Transfer)</label>
                <input type="text" class="form-control" id="joiningPresentDistrict" name="districtJoiningDate" placeholder="Date of Joining Present District">
              </div>
              <div class="form-group col-md-6">
                <label for="CMPackage">CM Package/ Selection Grade/Move Over Grade with Date</label>
                <input type="text" class="form-control" id="CMPackage" name="selectionGrade" placeholder="CM Package/ Selection Grade/Move Over Grade with Date">
              </div>
              <div class="form-group col-md-6">
                <label for="contract">Job Type</label>
                <select class="form-control" name="jobType">
                  <option>Contract</option>
                  <option>Pernament</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="promoted">Promotion Procedure</label>
                <select class="form-control" name="procedure">
                  <option>Selected</option>
                  <option>Promoted</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="personalNo">Personal No</label>
                <input type="text" class="form-control" id="personalNo" name="personalNo" placeholder="Personal No">
              </div>
              <div class="form-group col-md-6">
                <label for="gpfNo">GPF No</label>
                <input type="text" class="form-control" name="gpfNo" id="gpfNo" placeholder="GPF No">
              </div>
              <div class="form-group col-md-6">
                <label for="ntn">NTN</label>
                <input type="text" class="form-control" id="ntn" name="ntnNumber" placeholder="National text Number">
              </div>
              <div class="form-group col-md-6">
                <label for="bankAcNo">Bank A/C No.</label>
                <input type="text" class="form-control" id="bankAcNo" name="bankAccNo" placeholder="Bank A/C No">
              </div>
              <div class="form-group col-md-6">
                <label for="bankName">Bank Name with Branch</label>
                <input type="text" class="form-control" id="bankName" name="bankName" placeholder="Bank Name with Branch">
              </div>
              <div class="form-group col-md-6">
                <label for="branchCode">Branch Code</label>
                <input type="text" class="form-control" id="branchCode" name="branchCode" placeholder="Branch Code">
              </div>
              <div class="form-group col-md-6">
                <label for="contactNo">Contact No. Home & Mobile</label>
                <input type="text" class="form-control" id="contactNo" name="bankContact" placeholder="Contact No">
              </div>
              <div class="form-group col-md-6">
                <label for="emailAddress">Email Address</label>
                <input type="email" class="form-control" id="emailAddress" name="bankEmail" placeholder="MEmail Address">
              </div>
              <div class="form-group col-md-12">
                <label for="homeAddress">Home Address</label>
                <input type="text" class="form-control" id="homeAddress" name="homeAddress" placeholder="Home Address">
              </div>
              <div class="form-group col-md-6">
                <label for="schoolName">School Name</label>
                <input type="text" class="form-control" id="schoolName" name="schoolName" placeholder="School Name">
              </div>
              <div class="form-group col-md-6">
                <label for="schoolAddress">School Address</label>
                <input type="text" class="form-control" id="schoolAddress" name="schoolAddress" placeholder="School Address">
              </div>
              <div class="form-group col-md-6">
                <label for="EMIsCode">EMIS Code</label>
                <input type="text" class="form-control" id="EMIsCode" name="emisCode" placeholder="EMIS Code">
              </div>
              <div class="form-group col-md-6">
                <label for="ucName">UC Name & No</label>
                <input type="text" class="form-control" id="ucName" name="ucName" placeholder="UC Name & No">
              </div>
              <div class="form-group col-md-6">
                <label for="ppNo">PP No</label>
                <input type="text" class="form-control" id="ppNo" name="ppNo" placeholder="PP No">
              </div>
              <div class="form-group col-md-6">
                <label for="naNo">NA No. Markaz</label>
                <input type="text" class="form-control" id="naNo" name="Na" placeholder="NA No. Markaz">
              </div>
              <div class="form-group col-md-6">
                <label for="tehsil">Tehsil</label>
                <input type="text" class="form-control" id="tehsil" name="tehsil" placeholder="Tehsil">
              </div>
              <div class="form-group col-md-6">
                <label for="district">District</label>
                <input type="text" class="form-control" id="district" name="district" placeholder="District">
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
  $('#addEmployee').click(function() {
    $('#employeeForm').toggle();
  });


  function delete_fcultyRecord(id) {
    // alert(id);
    if (confirm('Are you sure want to delete this user')) {
        $.ajax({
          url: "{{url('adminView/delete_employeeInfo')}}/"+id,
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