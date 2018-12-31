@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
	<div class="container">
		<div class="main row">
			<div class="col-md-12">
				<!-- Student Registration Form -->
				<div class="box box-primary">
				    <h3 class="box-title"><strong>Personal Record</strong></h3>
				  <!-- form start --><br>
				  <form role="form" class="registrationForm">
				  	{{ csrf_field() }}
				    <div class="box-body student-register">
				      <div  class="form-group col-md-6">
				        <label for="studentId">Student ID</label>
				        <input type="text" class="form-control" id="studentId" placeholder="Enter ID">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="studentName">Student Name</label>
				        <input type="text" class="form-control" id="studentName" placeholder="Enter Name">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="cnicNumber">Bay Form/CNIC No</label>
				        <input type="text" class="form-control" id="cnicNumber" placeholder="Bay Form/CNIC No">
				      </div>
				      <div class="form-group col-md-6">
				        <label for="phoneNumber">Phone Number</label>
				        <input type="number" class="form-control" id="phoneNumber" placeholder="Phone Number" min="0">
				      </div>
				      <div class="form-group col-md-12">
				        <label for="dateOfBirth">Date of Birth</label>
				        <input type="date" class="form-control" id="dateOfBirth" placeholder="Date of Birth">
				      </div>
				      <div class="form-group col-md-12">
				        <label for="photo">Photo</label>
				        <input type="file" id="photo">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="nationality">Nationality</label>
				        <input type="text" class="form-control" id="nationality" placeholder="Nationality">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="caste">Caste</label>
				        <input type="text" class="form-control" id="caste" placeholder="Caste">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="religion">Religion</label>
				        <input type="text" class="form-control" id="religion" placeholder="Religion">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="fatherProfession">Father's Profession</label>
				        <input type="text" class="form-control" id="fatherProfession" placeholder="Father's Profession">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="admissionNo">Admission No</label>
				        <input type="text" class="form-control" id="admissionNo" placeholder="Admission No">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="dateOfAdmission">Date of Admission</label>
				        <input type="date" class="form-control" id="dateOfAdmission" placeholder="Date of Admission">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="admittedInClass">Admitted in Class</label>
				        <input type="date" class="form-control" id="admittedInClass" placeholder="Admitted in Class">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="rollNo">Roll No</label>
				        <input type="text" class="form-control" id="rollNo" placeholder="Roll No">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="registrationNumber1">BISE 9th Registration No</label>
				        <input type="text" class="form-control" id="registrationNumber1" placeholder="BISE 9th Registration No.">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="registrationNumber2">BISE 11th Registration No.</label>
				        <input type="text" class="form-control" id="registrationNumber2" placeholder="BISE 11th Registration No">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="dateOfLeaving">Date of Leaving</label>
				        <input type="text" class="form-control" id="dateOfLeaving" placeholder="Date of Leaving">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="reasonOfLeaving">Reason of Leaving</label>
				        <input type="text" class="form-control" id="reasonOfLeaving" placeholder="Reason of Leaving">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="lastAttendedClass">Class Last Attended</label>
				        <input type="text" class="form-control" id="lastAttendedClass" placeholder="Class Last Attended">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="fatherName">Father's Name</label>
				        <input type="text" class="form-control" id="fatherName" placeholder="Father's Name">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="fatherCNIC">Father's CNIC</label>
				        <input type="text" class="form-control" id="fatherCNIC" placeholder="Father's CNIC">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="fatherPhoneNo">Father's Phone No</label>
				        <input type="text" class="form-control" id="fatherPhoneNo" placeholder="Father's Phone No">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="address">Address</label>
				        <input type="text" class="form-control" id="address" placeholder="Address">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="motherName">Mother's Name</label>
				        <input type="text" class="form-control" id="motherName" placeholder="Mother's Name">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="motherCNIC">Mother's CNIC</label>
				        <input type="text" class="form-control" id="motherCNIC" placeholder="Mother's CNIC">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="motherPhoneNo">Mother's Phone No</label>
				        <input type="text" class="form-control" id="motherPhoneNo" placeholder="Mother's Phone No">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="address">Address</label>
				        <input type="text" class="form-control" id="address" placeholder="Address">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="guardianName">Guardian's Name</label>
				        <input type="text" class="form-control" id="guardianName" placeholder="Guardian's Name">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="guardianCNIC">Guardian's CNIC</label>
				        <input type="text" class="form-control" id="guardianCNIC" placeholder="Guardian's CNIC">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="guardianPhoneNo">Guardian's Phone No</label>
				        <input type="text" class="form-control" id="guardianPhoneNo" placeholder="Guardian's Phone No">
				      </div>
				      <div class="form-group col-md-12">
				        <label for="address">Address</label>
				        <input type="text" class="form-control" id="address" placeholder="Address">
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