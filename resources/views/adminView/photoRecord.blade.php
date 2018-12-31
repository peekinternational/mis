@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Procurement Documents -->
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a data-toggle="tab" href="#student">Student</a></li>
          <li><a data-toggle="tab" href="#staff">Staff</a></li>
        </ul>

        <div class="tab-content">
          <div id="student" class="tab-pane fade in active">
            <!-- Academic Record -->
            <div class="box box-primary">
                <h3 class="box-title">Student Record</h3>
              <!-- form start --><br>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="studentName">Student name</label>
                    <input type="text" class="form-control" id="studentName" placeholder="Student name">
                  </div>
                  <div class="form-group">
                    <label for="fatherName">Father name</label>
                    <input type="text" class="form-control" id="fatherName" placeholder="Father name">
                  </div>
                  <div class="form-group">
                    <label for="class">Class</label>
                    <input type="text" class="form-control" id="class" placeholder="Class">
                  </div>
                  <div class="form-group">
                    <label for="admissionNo">Admission no.</label>
                    <input type="text" class="form-control" id="admissionNo" placeholder="Admission no.">
                  </div>
                  <div class="form-group">
                    <label for="studentPhoto">Photo</label>
                    <input type="file" class="form-control" id="studentPhoto">
                  </div>
                  <div class="form-group">
                    <label for="studentDate">Date</label>
                    <input type="date" class="form-control" id="studentDate">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="staff" class="tab-pane fade">
            <!-- Previous Result -->
            <div class="box box-primary">
                <h3 class="box-title">Staff Record</h3>
              <!-- form start --><br>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="staffName">Staff name</label>
                    <input type="text" class="form-control" id="staffName" placeholder="Staff name">
                  </div>
                  <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" id="designation" placeholder="Designation">
                  </div>
                  <div class="form-group">
                    <label for="class">Class</label>
                    <input type="text" class="form-control" id="class" placeholder="Class">
                  </div>
                  <div class="form-group">
                    <label for="personalNo">Personal no.</label>
                    <input type="text" class="form-control" id="personalNo" placeholder="Admission no.">
                  </div>
                  <div class="form-group">
                    <label for="cnicNo">CNIC No.</label>
                    <input type="text" class="form-control" id="cnicNo" placeholder="CNIC No.">
                  </div>
                  <div class="form-group">
                    <label for="staffPhoto">Photo</label>
                    <input type="file" class="form-control" id="staffPhoto">
                  </div>
                  <div class="form-group">
                    <label for="staffDate">Date</label>
                    <input type="text" class="form-control" id="staffDate">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
        </div><!-- /.box -->
      </div>
    </div>
  </div>  
</div>
<!-- end main -->
@endsection