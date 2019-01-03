@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
            

          
        <div class="box box-primary">
            <h3 class="box-title">Edit Employee Personal Information</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/employeeInfo')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <!-- <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" placeholder="ID">
              </div> -->
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="hidden" name="id" value="{{$staffInfo->id}}">
                <input type="text" class="form-control" id="name" name="name" value="{{$staffInfo->name}}" placeholder="Enter Name">
              </div>
              <div class="form-group col-md-6">
                <label for="fatherName">Father's Name</label>
                <input type="text" class="form-control" id="fatherName" name="fatherName" value="{{$staffInfo->fatherName}}" placeholder="Father's Name">
              </div>
              <div class="form-group col-md-6">
                <label for="cnicNumber">CNIC No</label>
                <input type="text" class="form-control" id="cnicNumber" name="cnicNumber" value="{{$staffInfo->cnicNumber}}" placeholder="CNIC No">
              </div>
              <div class="form-group col-md-6">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" value="{{$staffInfo->designation}}" placeholder="Designation">
              </div>
              <div class="form-group col-md-6">
                <label for="basicScale">BPS</label>
                <input type="text" class="form-control" id="basicScale" name="basicScale" value="{{$staffInfo->basicScale}}" placeholder="Basic Pay Scale">
              </div>
              <div class="form-group col-md-6">
                <label for="dateOfBirth">Date of Birth</label>
                <input type="date" class="form-control" id="dateOfBirth" name="dob" value="{{$staffInfo->dob}}" placeholder="Date of Birth">
              </div>
              <div class="form-group col-md-6">
                <label for="domicile">Domicile</label>
                <input type="text" id="domicile" class="form-control" name="domicile" value="{{$staffInfo->domicile}}" placeholder="Domicile">
              </div>
              <div class="form-group col-md-6">
                <label for="qualification">Qualification(Academic/Professional)</label>
                <input type="text" class="form-control" id="qualification" name="qualification" value="{{$staffInfo->qualification}}" placeholder="Qualification">
              </div>
              <div class="form-group col-md-6">
                <label for="dateOfFirstEntry">Date of First Entry in Govt Service with Post</label>
                <input type="text" class="form-control" id="dateOfFirstEntry" name="serviceEntryDate" value="{{$staffInfo->serviceEntryDate}}" placeholder="Date of First Entry in Govt Service with Post">
              </div>
              <div class="form-group col-md-6">
                <label for="firstOrderNo">First Order No. Date & Authority</label>
                <input type="text" class="form-control" id="firstOrderNo" name="firstOrderNo" value="{{$staffInfo->firstOrderNo}}" placeholder="First Order No">
              </div>
              <div class="form-group col-md-6">
                <label for="dateOfPresentJoining">Date of Present Joining with Post</label>
                <input type="text" class="form-control" id="dateOfPresentJoining" name="presentJoiningDate" value="{{$staffInfo->presentJoiningDate}}" placeholder="Date of Present Joining with Post">
              </div>
              <div class="form-group col-md-6">
                <label for="orderNoDate">Order No. Date & Authority</label>
                <input type="text" class="form-control" id="orderNoDate" name="orderNo" value="{{$staffInfo->orderNo}}" placeholder="Order No. Date & Authority">
              </div>
              <div class="form-group col-md-6">
                <label for="joiningPresentDistrict">Date of Joining Present District (in case of Inter-district Transfer)</label>
                <input type="text" class="form-control" id="joiningPresentDistrict" name="districtJoiningDate" value="{{$staffInfo->districtJoiningDate}}" placeholder="Date of Joining Present District">
              </div>
              <div class="form-group col-md-6">
                <label for="CMPackage">CM Package/ Selection Grade/Move Over Grade with Date</label>
                <input type="text" class="form-control" id="CMPackage" name="selectionGrade" value="{{$staffInfo->selectionGrade}}" placeholder="CM Package/ Selection Grade/Move Over Grade with Date">
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
                <input type="text" class="form-control" id="personalNo" name="personalNo" value="{{$staffInfo->personalNo}}" placeholder="Personal No">
              </div>
              <div class="form-group col-md-6">
                <label for="gpfNo">GPF No</label>
                <input type="text" class="form-control" name="gpfNo" id="gpfNo" value="{{$staffInfo->gpfNo}}" placeholder="GPF No">
              </div>
              <div class="form-group col-md-6">
                <label for="ntn">NTN</label>
                <input type="text" class="form-control" id="ntn" name="ntnNumber" value="{{$staffInfo->ntnNumber}}" placeholder="National text Number">
              </div>
              <div class="form-group col-md-6">
                <label for="bankAcNo">Bank A/C No.</label>
                <input type="text" class="form-control" id="bankAcNo" name="bankAccNo" value="{{$staffInfo->bankAccNo}}" placeholder="Bank A/C No">
              </div>
              <div class="form-group col-md-6">
                <label for="bankName">Bank Name with Branch</label>
                <input type="text" class="form-control" id="bankName" name="bankName" value="{{$staffInfo->bankName}}" placeholder="Bank Name with Branch">
              </div>
              <div class="form-group col-md-6">
                <label for="branchCode">Branch Code</label>
                <input type="text" class="form-control" id="branchCode" name="branchCode" value="{{$staffInfo->branchCode}}" placeholder="Branch Code">
              </div>
              <div class="form-group col-md-6">
                <label for="contactNo">Contact No. Home & Mobile</label>
                <input type="text" class="form-control" id="contactNo" name="bankContact" value="{{$staffInfo->bankContact}}" placeholder="Contact No">
              </div>
              <div class="form-group col-md-6">
                <label for="emailAddress">Bank Email Address</label>
                <input type="email" class="form-control" id="emailAddress" name="bankEmail" value="{{$staffInfo->bankEmail}}" placeholder="MEmail Address">
              </div>
              <div class="form-group col-md-12">
                <label for="homeAddress">Home Address</label>
                <input type="text" class="form-control" id="homeAddress" name="homeAddress" value="{{$staffInfo->homeAddress}}" placeholder="Home Address">
              </div>
              <div class="form-group col-md-6">
                <label for="schoolName">School Name</label>
                <input type="text" class="form-control" id="schoolName" name="schoolName" value="{{$staffInfo->schoolName}}" placeholder="School Name">
              </div>
              <div class="form-group col-md-6">
                <label for="schoolAddress">School Address</label>
                <input type="text" class="form-control" id="schoolAddress" name="schoolAddress" value="{{$staffInfo->schoolAddress}}" placeholder="School Address">
              </div>
              <div class="form-group col-md-6">
                <label for="EMIsCode">EMIS Code</label>
                <input type="text" class="form-control" id="EMIsCode" name="emisCode" value="{{$staffInfo->emisCode}}" placeholder="EMIS Code">
              </div>
              <div class="form-group col-md-6">
                <label for="ucName">UC Name & No</label>
                <input type="text" class="form-control" id="ucName" name="ucName" value="{{$staffInfo->ucName}}" placeholder="UC Name & No">
              </div>
              <div class="form-group col-md-6">
                <label for="ppNo">PP No</label>
                <input type="text" class="form-control" id="ppNo" name="ppNo" value="{{$staffInfo->ppNo}}" placeholder="PP No">
              </div>
              <div class="form-group col-md-6">
                <label for="naNo">NA No. Markaz</label>
                <input type="text" class="form-control" id="naNo" name="Na" value="{{$staffInfo->Na}}" placeholder="NA No. Markaz">
              </div>
              <div class="form-group col-md-6">
                <label for="tehsil">Tehsil</label>
                <input type="text" class="form-control" id="tehsil" name="tehsil" value="{{$staffInfo->tehsil}}" placeholder="Tehsil">
              </div>
              <div class="form-group col-md-6">
                <label for="district">District</label>
                <input type="text" class="form-control" id="district" name="district" value="{{$staffInfo->district}}" placeholder="District">
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