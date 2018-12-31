@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <!-- Employee Performance Record -->
        <div class="box box-primary">
            <h3 class="box-title">Employee Performance Record</h3>
          <!-- form start --><br>
          <form role="form">
            <div class="box-body">
              <h2>Result 1</h2>
              <div class="form-group">
                <label for="srNo">Sr No.</label>
                <input type="text" class="form-control" id="srNo" placeholder="Sr No.">
              </div>
              <div class="form-group">
                <label for="nameOfSchool">Name of School</label>
                <input type="text" class="form-control" id="nameOfSchool" placeholder="Name of School">
              </div>
              <div class="form-group">
                <label for="headOfInstituation">Name of Head of Instituation</label>
                <input type="text" class="form-control" id="headOfInstituation" placeholder="Name of Head of Instituation">
              </div>
              <div class="form-group">
                <label for="basicScale">BPS</label>
                <input type="text" class="form-control" id="basicScale" placeholder="Basic Pay Scale">
              </div>
              <div class="form-group">
                <label for="PostingInPresentSchool">Date of Posting in Present School</label>
                <input type="date" class="form-control" id="PostingInPresentSchool" placeholder="Date of Posting in Present School">
              </div>
              <div class="form-group">
                <label for="studentAdmittedIn2015">No. of Student Admitted in 9th Class in 2015</label>
                <input type="text" class="form-control" id="studentAdmittedIn2015" placeholder="No. of Student Admitted in 9th Class">
              </div>
              <div class="form-group">
                <label for="studentAppearedIn2016">No. of Student Appeared in 10th Class in 2016</label>
                <input type="text" class="form-control" id="studentAppearedIn2016" placeholder="No. of Student Appeared in 10th Class">
              </div>
              <div class="form-group">
                <label for="passed">Passed</label>
                <input type="text" class="form-control" id="passed" placeholder="Passed">
              </div>
              <div class="form-group">
                <label for="failed">Failed</label>
                <input type="text" class="form-control" id="failed" placeholder="Failed">
              </div>
              <div class="form-group">
                <label for="result">Result %</label>
                <input type="text" class="form-control" id="result" placeholder="Result %">
              </div>
              <div class="form-group">
                <label for="boardResult">Board Result %</label>
                <input type="text" class="form-control" id="boardResult" placeholder="Board Result %">
              </div>
              <div class="form-group">
                <label for="gradeA+">Grade A+</label>
                <input type="text" class="form-control" id="gradeA+" placeholder="Grade A+">
              </div>
              <div class="form-group">
                <label for="gradeA">Grade A</label>
                <input type="text" class="form-control" id="gradeA" placeholder="Grade A">
              </div>
              <div class="form-group">
                <label for="gradeB">GradeB</label>
                <input type="text" class="form-control" id="gradeB" placeholder="Grade B">
              </div>
              <div class="form-group">
                <label for="gradeC">Grade C</label>
                <input type="text" class="form-control" id="gradeC" placeholder="Grade C">
              </div>
              <div class="form-group">
                <label for="gradeD">Grade D</label>
                <input type="text" class="form-control" id="gradeD" placeholder="Grade D">
              </div>
              <div class="form-group">
                <label for="gradeD">Grade D</label>
                <input type="text" class="form-control" id="gradeD" placeholder="Grade D">
              </div>
              <div class="form-group">
                <label for="gradeE">Grade E</label>
                <input type="text" class="form-control" id="gradeE" placeholder="Grade E">
              </div>

              <h2>Result 2</h2>
              <div class="form-group">
                <label for="srNo">Sr No.</label>
                <input type="text" class="form-control" id="srNo" placeholder="Sr No.">
              </div>
              <div class="form-group">
                <label for="nameOfSchool">Name of School</label>
                <input type="text" class="form-control" id="nameOfSchool" placeholder="Name of School">
              </div>
              <div class="form-group">
                <label for="headOfTeacher">Name of Teacher</label>
                <input type="text" class="form-control" id="headOfTeacher" placeholder="Name of Teacher">
              </div>
              <div class="form-group">
                <label for="basicScale">BPS</label>
                <input type="text" class="form-control" id="basicScale" placeholder="Basic Pay Scale">
              </div>
              <div class="form-group">
                <label for="PostingInPresentSchool">Date of Posting in Present School</label>
                <input type="date" class="form-control" id="PostingInPresentSchool" placeholder="Date of Posting in Present School">
              </div>
              <div class="form-group">
                <label for="basicTaught">Class Taught</label>
                <input type="text" class="form-control" id="basicTaught" placeholder="Basic Pay Taught">
              </div>
              <div class="form-group">
                <label for="school">School</label>
                <input type="text" class="form-control" id="school" placeholder="School">
              </div>
              <div class="form-group">
                <label for="studentAdmittedIn2015">No. of Student Admitted in 9th Class in 2015</label>
                <input type="text" class="form-control" id="studentAdmittedIn2015" placeholder="No. of Student Admitted in 9th Class">
              </div>
              <div class="form-group">
                <label for="studentAppearedIn2016">No. of Student Appeared in 10th Class in 2016</label>
                <input type="text" class="form-control" id="studentAppearedIn2016" placeholder="No. of Student Appeared in 10th Class">
              </div>
              <div class="form-group">
                <label for="passed">Passed</label>
                <input type="text" class="form-control" id="passed" placeholder="Passed">
              </div>
              <div class="form-group">
                <label for="failed">Failed</label>
                <input type="text" class="form-control" id="failed" placeholder="Failed">
              </div>
              <div class="form-group">
                <label for="result">Result %</label>
                <input type="text" class="form-control" id="result" placeholder="Result %">
              </div>
              <div class="form-group">
                <label for="boardResult">Board Result %</label>
                <input type="text" class="form-control" id="boardResult" placeholder="Board Result %">
              </div>
              <div class="form-group">
                <label for="gradeA+">Grade A+</label>
                <input type="text" class="form-control" id="gradeA+" placeholder="Grade A+">
              </div>
              <div class="form-group">
                <label for="gradeA">Grade A</label>
                <input type="text" class="form-control" id="gradeA" placeholder="Grade A">
              </div>
              <div class="form-group">
                <label for="gradeB">GradeB</label>
                <input type="text" class="form-control" id="gradeB" placeholder="Grade B">
              </div>
              <div class="form-group">
                <label for="gradeC">Grade C</label>
                <input type="text" class="form-control" id="gradeC" placeholder="Grade C">
              </div>
              <div class="form-group">
                <label for="gradeD">Grade D</label>
                <input type="text" class="form-control" id="gradeD" placeholder="Grade D">
              </div>
              <div class="form-group">
                <label for="gradeD">Grade D</label>
                <input type="text" class="form-control" id="gradeD" placeholder="Grade D">
              </div>
              <div class="form-group">
                <label for="gradeE">Grade E</label>
                <input type="text" class="form-control" id="gradeE" placeholder="Grade E">
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