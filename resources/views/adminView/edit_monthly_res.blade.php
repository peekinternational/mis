 @extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
 <div class="box box-primary" id="monthlyResultSec">
                <h3 class="box-title">Monthly Result</h3>
              <!-- form start --><br>
              <form role="form" method="Post" id="monthlyResultForm" action="{{url('adminView/academicRecord')}}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="stdName">Student Name</label>
                    <input type="hidden" name="id" value="{{$academic_records->id}}">
                   <input type="text" name="stdName" value="{{$academic_records->stdName}}" class="form-control" disabled="">
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
                    <input type="text" class="form-control" id="obtainedMarks" name="obtMarks" value="{{$academic_records->obtMarks}}"  placeholder="Obtained Marks">
                  </div>
                  <div class="form-group">
                    <label for="positionInClass">Position in Class</label>
                    <input type="text" class="form-control" id="positionInClass" name="classPosition"value="{{$academic_records->classPosition}}"classPosition" placeholder="Position in Class">
                  </div>
                  <div class="form-group">
                    <label for="remarks">Remarks</label>
                    <textarea id="remarks" class="form-control" name="remarks">{{$academic_records->remarks}}</textarea>
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          </div>
          </div>
          </div>

            @endsection