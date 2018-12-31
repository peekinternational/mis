@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <div id="previousResult">
            <h3><strong>Previous Result Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="previousBtn"><i class="fa fa-plus"></i></button></h3><br>
            <div class="box box-primary" id="previousResultSec">
                <h3 class="box-title">Previous Result</h3>
              <!-- form start --><br>
              <form role="form" method="Post" id="previousResultForm" action="{{url('adminView/academicRecord')}}">
                {{ csrf_field() }}
               <div class="box-body">
                    <div class="form-group">
                      <label for="stdName">Student Name</label>
                      <input type="hidden" name="id" value="{{$academic_records->id}}">
                   <input type="text" name="stdName" value="{{$academic_records->stdName}}" class="form-control" disabled="">
                    </div>
                    <div class="form-group">
                      <label for="class">Class</label>
                      <input type="text" class="form-control" id="class" name="previousClass" value="{{$academic_records->previousClass}}"placeholder="Class">
                    </div>
                    <div class="form-group">
                      <label for="school">School</label>
                      <input type="text" class="form-control" id="school" name="school" value="{{$academic_records->school}}" placeholder="School">
                    </div>
                    <div class="form-group">
                      <label for="rollNo">Roll No</label>
                      <input type="text" class="form-control" id="rollNo" name="rollNo" value="{{$academic_records->rollNo}}" placeholder="Roll No">
                    </div>
                    <div class="form-group">
                      <label for="year">Year</label>
                      <input type="text" class="form-control" id="year" name="year" value="{{$academic_records->year}}" placeholder="Year">
                    </div>
                    <div class="form-group">
                      <label for="subjects">Subjects</label>
                      <select class="form-control" name="subject">
                        <option>Urdu</option>
                        <option>English</option>
                        <option>Math</option>
                        <option>Islmiat</option>
                        <option>Social Studies</option>
                        <option>Physics/Education/Arabic</option>
                        <option>Chemistry/Islamic Studies/Agriculture</option>
                        <option>Bio/Computer Science/General Science</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="totalMarks">Total Marks</label>
                      <input type="text" class="form-control" id="totalMarks" name="totalMarks" value="{{$academic_records->totalMarks}}" placeholder="Total Marks">
                    </div>
                    <div class="form-group">
                      <label for="obtainedMarks">Obtained Marks</label>
                      <input type="text" class="form-control" id="obtainedMarks" name="obtMarks"  value="{{$academic_records->obtMarks}}"placeholder="Obtained Marks">
                    </div>
                    <div class="form-group">
                      <label for="positionInClass">Position in Class</label>
                      <input type="text" class="form-control" id="positionInClass" name="position" value="{{$academic_records->position}}" placeholder="Position in Class">
                    </div>
                    <div class="form-group">
                      <label for="remarks">{{$academic_records->remarks}}</label>
                      <textarea id="remarks" class="form-control" name="remarks"></textarea>
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