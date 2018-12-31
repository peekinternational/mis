@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">

          <div id="academicRecord" class="tab-pane">
           
            <h3><strong>Academic Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addBtnAcadamic"><i class="fa fa-plus"></i></button></h3><br>
           
            <!-- End View -->
            <div class="box box-primary" id="academicRecordForm">
                <h3 class="box-title">Academic Record</h3>
              <!-- form start --><br>
              <form role="form" method="Post" action="{{url('adminView/academicRecord')}}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                     <label for="stdName">Student Name</label>
                    <input type="hidden" name="id" value="{{$academic_records->id}}">
                    <input type="text" name="stdName" value="{{$academic_records->stdName}}" class="form-control" disabled="">
                     
                  </div>
                  <!-- <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="stdName" placeholder="Name">
                  </div> -->
                  <div class="form-group">
                    <label for="rollNo">Roll No</label>
                    <input type="text" class="form-control" id="rollNo" name="rollNo" value="{{$academic_records->rollNo}}"  placeholder="Roll No" >
                  </div>
                  <div class="form-group">
                    <label for="admissionNo">Admission No</label>
                    <input type="text" class="form-control" id="admissionNo" name="admissionNo" value="{{$academic_records->admissionNo}}"placeholder="Admission No" readonly="" >
                  </div>
                  <div class="form-group">
                    <label for="cnicNumber">CNIC No</label>
                    <input type="text" class="form-control" id="cnicNumber" name="cnicNumber" value="{{$academic_records->cnicNumber}}"placeholder="CNIC No" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="class">Class</label>
                    <input type="text" class="form-control" id="class" name="class" value="{{$academic_records->class}}"  placeholder="Class">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
        <!-- End -->
      </div>
    </div>
  </div>
</div>
<!-- end main -->

@endsection