@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a data-toggle="tab" href="#dateSheet">Date Sheet</a></li>
          <li><a data-toggle="tab" href="#monthlyExam">Monthly Exam Schedule</a></li>
          <li><a data-toggle="tab" href="#terminalExam">Terminal Exam Schedule</a></li>
          <li><a data-toggle="tab" href="#finalExam">Final Exam Schedule</a></li>
        </ul>

        <div class="tab-content">
          <div id="dateSheet" class="tab-pane fade in active">
            <!-- Academic Record -->
            <div class="box box-primary">
                <h3 class="box-title">Date Sheet</h3>
              <!-- form start --><br>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="datesheet">Upload dateSheet</label>
                    <input type="file" class="form-control" id="datesheet">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="monthlyExam" class="tab-pane fade">
            <!-- Previous Result -->
            <div class="box box-primary">
                <h3 class="box-title">Monthly Exam Schedule</h3>
              <!-- form start --><br>
              <form role="form">
                 <div class="box-body">
                   <div class="form-group">
                     <label for="schedule">Upload schedule</label>
                     <input type="file" class="form-control" id="schedule">
                   </div>
                 </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="terminalExam" class="tab-pane fade">
            <!-- Previous Result -->
            <div class="box box-primary">
                <h3 class="box-title">Terminal Exam Schedule</h3>
              <!-- form start --><br>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="schedule">Upload schedule</label>
                    <input type="file" class="form-control" id="schedule">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="finalExam" class="tab-pane fade">
            <!-- Previous Result -->
            <div class="box box-primary">
                <h3 class="box-title">Final Exam Schedule</h3>
              <!-- form start --><br>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="schedule">Upload schedule</label>
                    <input type="file" class="form-control" id="schedule">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
        </div>
        <!-- End -->
      </div>
    </div>
  </div>
</div>
<!-- end main -->
@endsection