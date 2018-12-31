@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a data-toggle="tab" href="#academicRecord">Academic Record</a></li>
          <li><a data-toggle="tab" href="#previousResult">Previous Result</a></li>
          <li><a data-toggle="tab" href="#monthlyResult">Monthly Result</a></li>
        </ul>

        <div class="tab-content">
          <div id="academicRecord" class="tab-pane fade in active">
            <!-- Academic Record -->
            @if(session()->has('Acadmic'))
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              {{session()->get('Acadmic')}}
            </div>
            @endif
            <!-- View -->
            <h3><strong>Academic Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addBtnAcadamic"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Roll No</th>
                        <th>Admission No</th>
                        <th>CNIC No</th>
                        <th>Class</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  @if(count($showAcadmcRcrd)>0)
                    @foreach($showAcadmcRcrd as $acadmcRecd)
                      <tr id="tbl_show{{$acadmcRecd->id}}">
                        <td>{{$acadmcRecd->id}}</td>
                        <td>{{$acadmcRecd->stdName}}</td>
                        <td>{{$acadmcRecd->rollNo}}</td>
                        <td>{{$acadmcRecd->admissionNo}}</td>
                        <td>{{$acadmcRecd->cnicNumber}}</td>
                        <td>{{$acadmcRecd->class}}</td>
                        <td>

                          <a href="{{url('/adminView/edit_academic_rec/'.$acadmcRecd->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;

                          <a href="" data-toggle="modal" onclick="delete_academicRecord('{{$acadmcRecd->id}}');"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  @endif
                  </tbody>
              </table>
              <div class="text-right"><?php echo $showAcadmcRcrd->render(); ?></div>
            </div>
            <!-- End View -->
            <div class="box box-primary" id="academicRecordForm" style="display: none;">
                <h3 class="box-title">Academic Record</h3>
              <!-- form start --><br>
              <form role="form" method="Post" action="{{url('adminView/acadmic_Record')}}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                     <label for="stdName">Student Name</label>
                     <select class="form-control" name="stdName" id="stdName">
                       <option>Select</option>
                       @foreach($studentInfo as $studntRcrd)
                       <option value="{{$studntRcrd->id}}">{{$studntRcrd->stdName}}</option>
                       @endforeach
                     </select>
                  </div>
                  <!-- <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="stdName" placeholder="Name">
                  </div> -->
                  <div class="form-group">
                    <label for="rollNo">Roll No</label>
                    <input type="text" class="form-control" id="rollNo" name="rollNo" placeholder="Roll No" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="admissionNo">Admission No</label>
                    <input type="text" class="form-control" id="admissionNo" name="admissionNo" placeholder="Admission No" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="cnicNumber">CNIC No</label>
                    <input type="text" class="form-control" id="cnicNumber" name="cnicNumber" placeholder="CNIC No" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="class">Class</label>
                    <input type="text" class="form-control" id="class" name="class" placeholder="Class">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="previousResult" class="tab-pane fade">
            <!-- Previous Result -->
            @if(session()->has('prevResult'))
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              {{session()->get('prevResult')}}
            </div>
            @endif

            <!-- View -->
            <h3><strong>Previous Result Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="previousBtn"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table previousTables" id="previousTable">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>Studemt Name</th>
                        <th>Previous Class</th>
                        <th>School Name</th>
                        <th>Roll No</th>
                        <th>Year</th>
                        <th>Subject</th>
                        <th>Total Marks</th>
                        <th>Obtained Marks</th>
                        <th>Position</th>
                        <th>Remarks</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr class="recordRow" ></tr>
                    @if(count($showpreviusResult)>0)
                  @foreach($showpreviusResult as $previousResult)
                      <tr id="prevTbl_show{{$previousResult->id}}">
                        <td>{{$previousResult->id}}</td>
                        <td>{{$previousResult->stdName}}</td>
                        <td>{{$previousResult->previousClass}}</td>
                        <td>{{$previousResult->school}}</td>
                        <td>{{$previousResult->rollNo}}</td>
                        <td>{{$previousResult->year}}</td>
                        <td>{{$previousResult->subject}}</td>
                        <td>{{$previousResult->totalMarks}}</td>
                        <td>{{$previousResult->obtMarks}}</td>
                        <td>{{$previousResult->position}}</td>
                        <td>{{$previousResult->remarks}}</td>
                        <td>

                          <a href="{{url('/adminView/previous_academic_rec/'.$previousResult->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;

                          <a href="" data-toggle="modal" onclick="delete_previousResult('{{$previousResult->id}}');"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                      </tr>
                  @endforeach
                  @endif
                  </tbody>
              </table>
              <div class="text-right pagination-table"><?php echo $showpreviusResult->render(); ?></div>
            </div>
            <!-- End View -->

            <div class="box box-primary" id="previousResultSec" style="display: none;">
                <h3 class="box-title">Previous Result</h3>
              <!-- form start --><br>
              <form role="form" method="Post" id="previousResultForm" action="">
                {{ csrf_field() }}
               <div class="box-body">
                    <div class="form-group">
                      <label for="stdName">Student Name</label>
                      <select class="form-control" name="stdName" id="stdName">
                       <option>Select</option>
                       @foreach($studentInfo as $studntRcrd)
                       <option value="{{$studntRcrd->id}}">{{$studntRcrd->stdName}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="class">Class</label>
                      <input type="text" class="form-control" id="class" name="previousClass" placeholder="Class">
                    </div>
                    <div class="form-group">
                      <label for="school">School</label>
                      <input type="text" class="form-control" id="school" name="school" placeholder="School">
                    </div>
                    <div class="form-group">
                      <label for="rollNo">Roll No</label>
                      <input type="text" class="form-control" id="rollNo" name="rollNo" placeholder="Roll No">
                    </div>
                    <div class="form-group">
                      <label for="year">Year</label>
                      <input type="text" class="form-control" id="year" name="year" placeholder="Year">
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
                      <input type="text" class="form-control" id="totalMarks" name="totalMarks" placeholder="Total Marks">
                    </div>
                    <div class="form-group">
                      <label for="obtainedMarks">Obtained Marks</label>
                      <input type="text" class="form-control" id="obtainedMarks" name="obtMarks" placeholder="Obtained Marks">
                    </div>
                    <div class="form-group">
                      <label for="positionInClass">Position in Class</label>
                      <input type="text" class="form-control" id="positionInClass" name="position" placeholder="Position in Class">
                    </div>
                    <div class="form-group">
                      <label for="remarks">Remarks</label>
                      <textarea id="remarks" class="form-control" name="remarks"></textarea>
                    </div>
                  </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="monthlyResult" class="tab-pane fade">
            <!-- Previous Result -->
            @if(session()->has('monthResult'))
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              {{session()->get('monthResult')}}
            </div>
            @endif

            <!-- View -->
            <h3><strong>Monthly Result Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addBtnMonthlyRe"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table monthTables" id="monthTable">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Month</th>
                        <th>Subject</th>
                        <th>Total Marks</th>
                        <th>Obtained Marks</th>
                        <th>Class Position</th>
                        <th>Remarks</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr class="recordRowMonth" ></tr>
                    @if(count($showMonthResult)>0)
                  @foreach($showMonthResult as $monthResult)
                      <tr id="monthTbl_show{{$monthResult->id}}">
                        <td>{{$monthResult->id}}</td>
                        <td>{{$monthResult->stdName}}</td>
                        <td>{{$monthResult->month}}</td>
                        <td>{{$monthResult->subject}}</td>
                        <td>{{$monthResult->totalMarks}}</td>
                        <td>{{$monthResult->obtMarks}}</td>
                        <td>{{$monthResult->classPosition}}</td>
                        <td>{{$monthResult->remarks}}</td>
                        <td>

                          <a href="{{url('/adminView/edit_monthly_res/'.$monthResult->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;                          

                          <a href="" data-toggle="modal" onclick="delete_monthlyResult('{{$monthResult->id}}');"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                      </tr>
                  @endforeach
                  @endif
                  </tbody>
              </table>
              <div class="text-right pagination-table"><?php echo $showMonthResult->render(); ?></div>
            </div>
            <!-- End View -->

            <div class="box box-primary" id="monthlyResultSec" style="display: none;">
                <h3 class="box-title">Monthly Result</h3>
              <!-- form start --><br>
              <form role="form" method="Post" id="monthlyResultForm" action="">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="stdName">Student Name</label>
                    <select class="form-control" name="stdName" id="stdName">
                      <option>Select</option>
                      @foreach($studentInfo as $studntRcrd)
                      <option value="{{$studntRcrd->id}}">{{$studntRcrd->stdName}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="month">Month</label>
                    <input type="text" class="form-control" id="month" name="month" placeholder="Month">
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
                    <input type="text" class="form-control" id="totalMarks" name="totalMarks" placeholder="Total Marks">
                  </div>
                  <div class="form-group">
                    <label for="obtainedMarks">Obtained Marks</label>
                    <input type="text" class="form-control" id="obtainedMarks" name="obtMarks" placeholder="Obtained Marks">
                  </div>
                  <div class="form-group">
                    <label for="positionInClass">Position in Class</label>
                    <input type="text" class="form-control" id="positionInClass" name="classPosition" placeholder="Position in Class">
                  </div>
                  <div class="form-group">
                    <label for="remarks">Remarks</label>
                    <textarea id="remarks" class="form-control" name="remarks"></textarea>
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
<script type="text/javascript">
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

 $( "#previousResultForm" ).submit(function( event ) {
      event.preventDefault();
      var form = $(this).serialize();
      var showRecord = "";
      $.ajax({
          type: "post",
          url: '/adminView/prev_Result',
          data: form,
          // dataType: 'json',
          success: function(data) {
              
              // if (data === true) {
                // console.log("daatttaaa" + data);
              // var result = data;
              $('#previousResultForm')[0].reset();
                  // var studentId = $(this).val();
                  var url = "{{url('adminView/showPrev_result')}}";
                  $.ajax({
                    url: url,
                    type: 'get',
                    // data: data,
                    success: function(response){
                      console.log("inner" +response);

                      showRecord = 
                      // '<thead>',
                        //     '<tr>',
                        //       '<th>ID</th>',
                        //       '<th>Previous Class</th>',
                        //      ' <th>School Name</th>',
                        //       '<th>Roll No</th>',
                        //       '<th>Year</th>',
                        //       '<th>Subject</th>',
                        //       '<th>Total Marks</th>',
                        //       '<th>Obtained Marks</th>',
                        //       '<th>Position</th>',
                        //       '<th>Remarks</th>',
                        //     '</tr>',
                        // '</thead>',
                        // '<tbody>
                        // '<tr>'
                              '<td>'+response.id+'</td>' +
                              '<td>'+response.previousClass+'</td>'+
                              '<td>'+response.school+'</td>'+
                              '<td>'+response.rollNo+'</td>'+
                              '<td>'+response.year+'</td>'+
                              '<td>'+response.subject+'</td>'+
                              '<td>'+response.totalMarks+'</td>'+
                              '<td>'+response.obtMarks+'</td>'+
                              '<td>'+response.position+'</td>'+
                              '<td>'+response.remarks+'</td>'+
                              '<td>'+
                                '<a href=""><i class="fa fa-pencil"></i></a>'+  
          '<a href="" data-toggle="modal" onclick="delete_previousResult('+response.id+');"><i class="fa fa-trash text-danger"></i></a>'+
                              '</td>';
                        console.log(showRecord);
                        $('table tbody tr.recordRow').append(showRecord);
                    },
                  });
                   // }
       
          },
          error: function(json) {
            console.log(json);
          },
      });

  });


 $( "#monthlyResultForm" ).submit(function( event ) {
      event.preventDefault();
      var form = $(this).serialize();
      var showMonthlyRecord = "";
      $.ajax({
          type: "post",
          url: '/adminView/monthly_Result',
          data: form,
          // dataType: 'json',
          success: function(data) {
              
              // if (data === true) {
                // console.log("daatttaaa" + data);
              // var result = data;
              $('#monthlyResultForm')[0].reset();
                  // var studentId = $(this).val();
                  var url = "{{url('adminView/showMonth_result')}}";
                    $.ajax({
                      url: url,
                      type: 'get',
                      // data: data,
                      success: function(response){
                        console.log("inner" +response);

                        showMonthlyRecord = 
                        // '<thead>',
                          //     '<tr>',
                          //       '<th>ID</th>',
                          //       '<th>Previous Class</th>',
                          //      ' <th>School Name</th>',
                          //       '<th>Roll No</th>',
                          //       '<th>Year</th>',
                          //       '<th>Subject</th>',
                          //       '<th>Total Marks</th>',
                          //       '<th>Obtained Marks</th>',
                          //       '<th>Position</th>',
                          //       '<th>Remarks</th>',<td>{{$monthResult->id}}</td>
                          //     '</tr>',
                          // '</thead>',
                          // '<tbody>
                          // '<tr>'
                                '<td>'+response.id+'</td>' +
                                '<td>'+response.stdName+'</td>'+
                                '<td>'+response.month+'</td>'+
                                '<td>'+response.subject+'</td>'+
                                '<td>'+response.totalMarks+'</td>'+
                                '<td>'+response.obtMarks+'</td>'+
                                '<td>'+response.classPosition+'</td>'+
                                '<td>'+response.remarks+'</td>'+
                                '<td>'+
                                  '<a href=""><i class="fa fa-pencil"></i></a>'+  
            '<a href="" data-toggle="modal" onclick="delete_monthlyResult('+response.id+');"><i class="fa fa-trash text-danger"></i></a>'+
                                '</td>';
                          console.log(showMonthlyRecord);
                          $('table tbody tr.recordRowMonth').append(showMonthlyRecord);
                      },
                    });
                   // }
       
          },
          error: function(json) {
            console.log(json);
          },
      });

  });



  $('#stdName').change(function(){
    var studentId = $(this).val();
    var url = "{{url('adminView/acadmc_record')}}";
    $.ajax({
      url: url,
      type: 'get',
      data: {id:studentId},
      success: function(data){
        $('#rollNo').val(data.rollNo);
        $('#admissionNo').val(data.admissionNo);
        $('#cnicNumber').val(data.stdCnic); 
      },
    });
  });


  $('#addBtnAcadamic').click(function(){
    $('#academicRecordForm').toggle();
  });


  function delete_academicRecord(id) {
    // alert(id);
      if (confirm('Are you sure want to delete this user')) {
          $.ajax({
            url: "{{url('adminView/deleteAcademicRecrd')}}/"+id,
            success: function (response) {
              console.log(response);
              if (response == "1") {
                $('#tbl_show'+id).remove();

              }
            }
          });
      }
    }

  $('#previousBtn').click(function(){
    // alert(show);
    $('#previousResultSec').toggle();
  });
  

  function delete_previousResult(id) {
    // alert(id);
      if (confirm('Are you sure want to delete this user')) {
          $.ajax({
            url: "{{url('adminView/deletePreviousResult')}}/"+id,
            success: function (response) {
              console.log(response);
              if (response == "1") {
                $('#monthTbl_show'+id).remove();

              }
            }
          });
      }
    }

    $('#addBtnMonthlyRe').click(function(){
    // alert(show);
    $('#monthlyResultSec').toggle();
  });
  function delete_monthlyResult(id) {
    // alert(id);
      if (confirm('Are you sure want to delete this user')) {
          $.ajax({
            url: "{{url('adminView/deleteMonthlyResult')}}/"+id,
            success: function (response) {
              console.log(response);
              if (response == "1") {
                $('#prevTbl_show'+id).remove();

              }
            }
          });
      }
    }

</script>
@endsection