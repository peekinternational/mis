@extends('layouts.app')
@section('content')
<!-- start main -->

<div class="main_bg">
	<div class="container">
		<div class="main row">
			<div class="col-md-12">
				
				<div class="box box-primary" id="recordForm">
				    <h3 class="box-title"><strong>Personal Record</strong></h3>
				  <!-- form start --><br>
				  <form role="form" method="Post" action="{{url('adminView/studentRegistration')}}" class="registrationForm" enctype="multipart/form-data">
				  	{{ csrf_field() }}
				    <div class="box-body student-register">
				      <!-- <div  class="form-group col-md-6">
				        <label for="stdId">Student ID</label>
				        <input type="text" class="form-control" id="stdId" name="stdId" placeholder="Enter ID">
				      </div> -->
				      <div  class="form-group col-md-6">
				        <label for="stdName">Student Name</label>
				        <input type="hidden" name="id" id="id" value="{{$studentInfo->id}}">
				        <input type="text" class="form-control" id="stdName" name="stdName" value="{{$studentInfo->stdName}}" placeholder="Enter Name">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="stdCnic">Bay Form/CNIC No</label>
				        <input type="text" class="form-control" id="stdCnic" name="stdCnic" value="{{$studentInfo->stdCnic}}" placeholder="Bay Form/CNIC No">
				      </div>
				      <div class="form-group col-md-6">
				        <label for="stdPhone">Phone Number</label>
				        <input type="number" class="form-control" id="stdPhone" name="stdPhone" value="{{$studentInfo->stdPhone}}" placeholder="Phone Number" min="0">
				      </div>
				      <div class="form-group col-md-6">
				        <label for="stdDob">Date of Birth</label>
				        <input type="date" class="form-control" id="stdDob" name="stdDob" value="{{$studentInfo->stdDob}}" placeholder="Date of Birth">
				      </div>
				      <div class="form-group col-md-6">
				        <label for="stdPhoto">Photo</label>
				        <input type="file" id="stdntPhoto" name="stdntPhoto" >
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="stdNationality">Nationality</label>
				        <input type="text" class="form-control" id="stdNationality" name="stdNationality" value="{{$studentInfo->stdNationality}}" placeholder="Nationality">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="stdCaste">Caste</label>
				        <input type="text" class="form-control" id="stdCaste" name="stdCaste" value="{{$studentInfo->stdCaste}}" placeholder="Caste">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="stdReligion">Religion</label>
				        <input type="text" class="form-control" id="stdReligion" name="stdReligion" value="{{$studentInfo->stdReligion}}" placeholder="Religion">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="stdFatherProfession">Father's Profession</label>
				        <input type="text" class="form-control" id="stdFatherProfession" value="{{$studentInfo->stdFatherProfession}}" name="stdFatherProfession" placeholder="Father's Profession">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="admissionNo">Admission No</label>
				        <input type="text" class="form-control" id="admissionNo" name="admissionNo" value="{{$studentInfo->admissionNo}}" placeholder="Admission No">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="admissionDate">Date of Admission</label>
				        <input type="date" class="form-control" id="admissionDate" name="admissionDate" value="{{$studentInfo->admissionDate}}" placeholder="Date of Admission">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="admittedInClass">Admitted in Class</label>
				        <input type="date" class="form-control" id="admittedInClass" name="admittedInClass" value="{{$studentInfo->admittedInClass}}" placeholder="Admitted in Class">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="rollNo">Roll No</label>
				        <input type="text" class="form-control" id="rollNo" name="rollNo" value="{{$studentInfo->rollNo}}" placeholder="Roll No">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="regsNumber1regs">BISE 9th Registration No</label>
				        <input type="text" class="form-control" id="regsNumber1" name="regsNumber1" value="{{$studentInfo->regsNumber1}}" placeholder="BISE 9th Registration No.">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="regsNumber2">BISE 11th Registration No.</label>
				        <input type="text" class="form-control" id="regsNumber2" name="regsNumber2" value="{{$studentInfo->regsNumber2}}" placeholder="BISE 11th Registration No">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="leavingDate">Date of Leaving</label>
				        <input type="text" class="form-control" id="leavingDate" name="leavingDate"  value="{{$studentInfo->leavingDate}}" placeholder="Date of Leaving">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="reasonOfLeaving">Reason of Leaving</label>
				        <input type="text" class="form-control" id="reasonOfLeaving" name="reasonOfLeaving"  value="{{$studentInfo->reasonOfLeaving}}" placeholder="Reason of Leaving">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="lastAttendedClass">Class Last Attended</label>
				        <input type="text" class="form-control" id="lastAttendedClass" name="lastAttendedClass" value="{{$studentInfo->lastAttendedClass}}" placeholder="Class Last Attended">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="fatherName">Father's Name</label>
				        <input type="text" class="form-control" id="fatherName" name="fatherName" value="{{$studentInfo->fatherName}}" placeholder="Father's Name">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="fatherCnic">Father's CNIC</label>
				        <input type="text" class="form-control" id="fatherCnic" name="fatherCnic" value="{{$studentInfo->fatherCnic}}" placeholder="Father's CNIC">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="fatherPhone">Father's Phone No</label>
				        <input type="text" class="form-control" id="fatherPhone" name="fatherPhone" value="{{$studentInfo->fatherPhone}}" placeholder="Father's Phone No">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="fatherAddress">Address</label>
				        <input type="text" class="form-control" id="fatherAddress" name="fatherAddress" value="{{$studentInfo->fatherAddress}}" placeholder="Address">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="motherName">Mother's Name</label>
				        <input type="text" class="form-control" id="motherName" name="motherName" value="{{$studentInfo->motherName}}" placeholder="Mother's Name">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="motherCnic">Mother's CNIC</label>
				        <input type="text" class="form-control" id="motherCnic" name="motherCnic" value="{{$studentInfo->motherCnic}}" placeholder="Mother's CNIC">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="motherPhone">Mother's Phone No</label>
				        <input type="text" class="form-control" id="motherPhone" name="motherPhone" value="{{$studentInfo->motherPhone}}" placeholder="Mother's Phone No">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="motherAddress">Address</label>
				        <input type="text" class="form-control" id="motherAddress" name="motherAddress" value="{{$studentInfo->motherAddress}}" placeholder="Address">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="guardianName">Guardian's Name</label>
				        <input type="text" class="form-control" id="guardianName" name="guardianName" value="{{$studentInfo->guardianName}}" placeholder="Guardian's Name">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="guardianCnic">Guardian's CNIC</label>
				        <input type="text" class="form-control" id="guardianCnic" name="guardianCnic" value="{{$studentInfo->guardianCnic}}" placeholder="Guardian's CNIC">
				      </div>
				      <div  class="form-group col-md-6">
				        <label for="guardianPhone">Guardian's Phone No</label>
				        <input type="text" class="form-control" id="guardianPhone" name="guardianPhone" value="{{$studentInfo->guardianPhone}}" placeholder="Guardian's Phone No">
				      </div>
				      <div class="form-group col-md-6">
				        <label for="guardianAddress">Address</label>
				        <input type="text" class="form-control" id="guardianAddress" name="guardianAddress" value="{{$studentInfo->guardianAddress}}" placeholder="Address">
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
	

	function delete_student(id) {
    // alert(id);
	    if (confirm('Are you sure want to delete this user')) {
	      	$.ajax({
	      		url: "{{url('adminView/deleteStudentRe')}}/"+id,
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