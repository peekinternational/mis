@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a data-toggle="tab" href="#salary">Salary Budget</a></li>
          <li><a data-toggle="tab" href="#excess">Excess & Surrender</a></li>
          <li><a data-toggle="tab" href="#contingent">Contingent Budget</a></li>
        </ul>

        <div class="tab-content">
          <div id="salary" class="tab-pane  fade in active">
            <!-- Previous Result -->
            @if(session()->has('salary'))
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              {{session()->get('salary')}}
            </div>
            @endif
            <!-- View -->
            <h3><strong>Salary Budget Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addsalryBudget"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table previousTables" id="previousTable">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>DDo No</th>
                        <th>Budget year</th>
                        <th>Description</th>
                        <th>Estimated Budget</th>
                        <th>Allocated Budget</th>
                        <th>Released</th>
                        <th>Consumed</th>
                        <th>Balance</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($showSalaryBudget)>0)
                  @foreach($showSalaryBudget as $salryBudget)
                      <tr id="tbl_show{{$salryBudget->id}}">
                        <td>{{$salryBudget->id}}</td>
                        <td>{{$salryBudget->DdoNo}}</td>
                        <td>{{$salryBudget->budgetYear}}</td>
                        <td>{{$salryBudget->description}}</td>
                        <td>{{$salryBudget->estimatedBudget}}</td>
                        <td>{{$salryBudget->allocatedBudget}}</td>
                        <td>{{$salryBudget->released}}</td>
                        <td>{{$salryBudget->consumed}}</td>
                        <td>{{$salryBudget->balance}}</td>
                        <td>
                          <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
<<<<<<< HEAD
                          <a href="" data-toggle="modal" onclick="delete_salartBudget('{{$salryBudget->id}}');"><i class="fa fa-trash text-danger"></i></a>
=======
                          <a href="" data-toggle="modal" onclick="delete_salaryBudget('{{$salryBudget->id}}');"><i class="fa fa-trash text-danger"></i></a>
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
                        </td>
                      </tr>
                  @endforeach
                  @endif
                  </tbody>
              </table>
              <div class="text-right pagination-table"><?php echo $showSalaryBudget->render(); ?></div>
            </div>
            <!-- End View -->
<<<<<<< HEAD
            <div class="box box-primary" id="salaryBudgetForm" style="display: none;">
=======
            <div class="box box-primary">
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
                <h3 class="box-title">Salary Budget</h3>
              <!-- form start --><br>
              <form role="form" method="Post" action="{{url('adminView/salary_budget')}}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="DdoNo">DDO No.</label>
                    <input type="text" class="form-control" id="DdoNo" name="DdoNo" placeholder="DDO No">
                  </div>
                  <div class="form-group">
                    <label for="budgetyear">Budget year</label>
                    <input type="text" class="form-control" id="budgetyear" name="budgetYear" placeholder="Budget year">
                  </div>
                  <!-- <div class="form-group">
                    <label for="subjectCode">Subject code</label>
                    <input type="text" class="form-control" id="subjectCode"  placeholder="Subject code">
                  </div> -->
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="estimatedBudget">Estimated budget</label>
                    <input type="text" class="form-control" id="estimatedBudget" name="estimatedBudget" placeholder="Estimated budget">
                  </div>
                  <div class="form-group">
                    <label for="allocatedBudget">Allocated budget</label>
                    <input type="text" class="form-control" id="allocatedBudget" name="allocatedBudget" placeholder="Allocated budget">
                  </div>
                  <div class="form-group">
                    <label for="released">Released</label>
                    <input type="text" class="form-control" id="released" name="released" placeholder="Released">
                  </div>
                  <div class="form-group">
                    <label for="consumed">Consumed</label>
                    <input type="text" class="form-control" id="consumed" name="consumed" placeholder="Consumed">
                  </div>
                  <div class="form-group">
                    <label for="balance">Balance</label>
                    <input type="text" class="form-control" id="balance" name="balance" placeholder="Balance">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="excess" class="tab-pane fade">
            <!-- Previous Result -->
            @if(session()->has('excess'))
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              {{session()->get('excess')}}
            </div>
            @endif
            <!-- View -->
            <h3><strong>Excess & Surrender Budget Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addsalryBudget"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table previousTables" id="previousTable">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>DDo No</th>
                        <th>Budget year</th>
                        <th>Description</th>
                        <th>Allocated Budget</th>
                        <th>Released</th>
                        <th>Consumed</th>
                        <th>Excess</th>
                        <th>Surrender</th>
                        <th>Reallocation</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($showExcessBudget)>0)
                  @foreach($showExcessBudget as $excessBudget)
<<<<<<< HEAD
                      <tr id="tbl_show{{$excessBudget->id}}">
                        <td>{{$excessBudget->id}}</td>
                        <td>{{$excessBudget->DdoNo}}</td>
                        <td>{{$excessBudget->budgetYear}}</td>
                        <td>{{$excessBudget->description}}</td>]
                        <td>{{$excessBudget->allocatedBudget}}</td>]
                        <td>{{$excessBudget->released}}</td>]
=======
                      <tr id="tbl_showExcess{{$excessBudget->id}}">
                        <td>{{$excessBudget->id}}</td>
                        <td>{{$excessBudget->DdoNo}}</td>
                        <td>{{$excessBudget->budgetYear}}</td>
                        <td>{{$excessBudget->description}}</td>
                        <td>{{$excessBudget->allocatedBudget}}</td>
                        <td>{{$excessBudget->released}}</td>
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
                        <td>{{$excessBudget->consumed}}</td>
                        <td>{{$excessBudget->excess}}</td>
                        <td>{{$excessBudget->surrender}}</td>
                        <td>{{$excessBudget->reallocation}}</td>
                        <td>
                          <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
<<<<<<< HEAD
                          <a href="" data-toggle="modal" onclick="delete_salartBudget('{{$excessBudget->id}}');"><i class="fa fa-trash text-danger"></i></a>
=======
                          <a href="" data-toggle="modal" onclick="delete_ExcessBudget('{{$excessBudget->id}}');"><i class="fa fa-trash text-danger"></i></a>
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
                        </td>
                      </tr>
                  @endforeach
                  @endif
                  </tbody>
              </table>
              <div class="text-right pagination-table"><?php echo $showExcessBudget->render(); ?></div>
            </div>
            <!-- End View -->
            <div class="box box-primary">
                <h3 class="box-title">Excess & Surrender</h3>
              <!-- form start --><br>
              <form role="form" method="Post" action="{{url('adminView/excess_budget')}}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="DdoNo">DDO No.</label>
                    <input type="text" class="form-control" id="DdoNo" name="DdoNo" placeholder="DDO No">
                  </div>
                  <div class="form-group">
                    <label for="budgetyear">Budget year</label>
                    <input type="text" class="form-control" id="budgetyear" name="budgetYear" placeholder="Budget year">
                  </div>
                  <!-- <div class="form-group">
                    <label for="subjectCode">Subject code</label>
                    <input type="text" class="form-control" id="subjectCode" placeholder="Subject code">
                  </div> -->
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="allocatedBudget">Allocated budget</label>
                    <input type="text" class="form-control" id="allocatedBudget" name="allocatedBudget" placeholder="Allocated budget">
                  </div>
                  <div class="form-group">
                    <label for="released">Released</label>
                    <input type="text" class="form-control" id="released" name="released" placeholder="Released">
                  </div>
                  <div class="form-group">
                    <label for="consumed">Consumed</label>
                    <input type="text" class="form-control" id="consumed" name="consumed" placeholder="Consumed">
                  </div>
                  <div class="form-group">
                    <label for="excess">Excess</label>
                    <input type="text" class="form-control" id="excess" name="excess" placeholder="Excess">
                  </div>
                  <div class="form-group">
                    <label for="surrender">Surrender</label>
                    <input type="text" class="form-control" id="surrender" name="surrender" placeholder="Surrender">
                  </div>
                  <div class="form-group">
                    <label for="reallocation">Reallocation</label>
                    <input type="text" class="form-control" id="reallocation" name="reallocation" placeholder="Reallocation">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="contingent" class="tab-pane fade">
            <!-- Previous Result -->
            @if(session()->has('contingent'))
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              {{session()->get('contingent')}}
            </div>
            @endif
            <!-- View -->
            <h3><strong>Contingent Budget Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addsalryBudget"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table previousTables" id="previousTable">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>DDo No</th>
                        <th>Budget year</th>
                        <th>Description</th>
                        <th>Estimated Budget</th>
                        <th>Allocated Budget</th>
                        <th>Released</th>
                        <th>Consumed</th>
                        <th>Balance</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($showContingentBudget)>0)
                  @foreach($showContingentBudget as $contingentBudget)
<<<<<<< HEAD
                      <tr id="tbl_show{{$contingentBudget->id}}">
=======
                      <tr id="tbl_showcontingent{{$contingentBudget->id}}">
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
                        <td>{{$contingentBudget->id}}</td>
                        <td>{{$contingentBudget->conDdoNo}}</td>
                        <td>{{$contingentBudget->conBudgetYear}}</td>
                        <td>{{$contingentBudget->conDescription}}</td>
                        <td>{{$contingentBudget->conEstimatedBudget}}</td>
                        <td>{{$contingentBudget->conAllocatedBudget}}</td>
                        <td>{{$contingentBudget->conReleased}}</td>
                        <td>{{$contingentBudget->conConsumed}}</td>
                        <td>{{$contingentBudget->conBalance}}</td>
                        <td>
                          <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
<<<<<<< HEAD
                          <a href="" data-toggle="modal" onclick="delete_salartBudget('{{$contingentBudget->id}}');"><i class="fa fa-trash text-danger"></i></a>
=======
                          <a href="" data-toggle="modal" onclick="deleteContingentBudget('{{$contingentBudget->id}}');"><i class="fa fa-trash text-danger"></i></a>
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
                        </td>
                      </tr>
                  @endforeach
                  @endif
                  </tbody>
              </table>
              <div class="text-right pagination-table"><?php echo $showContingentBudget->render(); ?></div>
            </div>
            <!-- End View -->
            <div class="box box-primary">
                <h3 class="box-title">Contingent Budget</h3>
              <!-- form start --><br>
              <form role="form" method="Post" action="{{url('adminView/contingent_budget')}}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="DdoNo">DDO No.</label>
                    <input type="text" class="form-control" id="DdoNo" name="conDdoNo" placeholder="DDO No">
                  </div>
                  <div class="form-group">
                    <label for="budgetyear">Budget year</label>
                    <input type="text" class="form-control" id="budgetyear" name="conBudgetYear" placeholder="Budget year">
                  </div>
                  <!-- <div class="form-group">
                    <label for="subjectCode">Subject code</label>
                    <input type="text" class="form-control" id="subjectCode" placeholder="Subject code">
                  </div> -->
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="conDescription" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="estimatedBudget">Estimated budget</label>
                    <input type="text" class="form-control" id="estimatedBudget" name="conEstimatedBudget" placeholder="Estimated budget">
                  </div>
                  <div class="form-group">
                    <label for="allocatedBudget">Allocated budget</label>
                    <input type="text" class="form-control" id="allocatedBudget" name="conAllocatedBudget" placeholder="Allocated budget">
                  </div>
                  <div class="form-group">
                    <label for="released">Released</label>
                    <input type="text" class="form-control" id="released" name="conReleased" placeholder="Released">
                  </div>
                  <div class="form-group">
                    <label for="consumed">Consumed</label>
                    <input type="text" class="form-control" id="consumed" name="conConsumed" placeholder="Consumed">
                  </div>
                  <div class="form-group">
                    <label for="balance">Balance</label>
                    <input type="text" class="form-control" id="balance" name="conBalance" placeholder="Balance">
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
<<<<<<< HEAD
<script>
  $('#addsalryBudget').click(function(){
    $('#salaryBudgetForm').toggle();
  });

  function delete_salartBudget(id) {
    // alert(id);
      if (confirm('Are you sure want to delete this user')) {
          $.ajax({
            url: "{{url('adminView/delete_salaryBudget')}}/"+id,
            success: function (response) {
              console.log(response);
              if (response == "1") {
                $('#tbl_show'+id).remove();

              }
            }
          });
      }
    }

    $('#addpstvBtn').click(function(){
      $('#postivBehavioursForm').toggle();
    });

    function delete_pstvBehv(id) {
    // alert(id);
      if (confirm('Are you sure want to delete this user')) {
          $.ajax({
            url: "{{url('adminView/deletePositiveBhv')}}/"+id,
            success: function (response) {
              console.log(response);
              if (response == "1") {
                $('#tbl_showPostv'+id).remove();

              }
            }
          });
      }
    }
</script>
=======
<script type="">
  $('#addBtn').click(function(){
    $('#admissionInqryForm').toggle();
  });

  function delete_salarBudget(id) {
    // alert(id);
      if(confirm('Are you sure want to delete this Record')) {
        $.ajax({
          url: "{{url('adminView/delete_salarybudget')}}/"+id,
          success: function (response) {
            // console.log(response);
            if (response == "1") {
              $('#tbl_show'+id).remove();

            }
          }
        });
      }
    }
</script>
<script type="">
  $('#addBtn').click(function(){
    $('#admissionInqryForm').toggle();
  });

  function delete_ExcessBudget(id) {
    // alert(id);
      if(confirm('Are you sure want to delete this Record')) {
        $.ajax({
          url: "{{url('adminView/delete_ExcessBudget')}}/"+id,
          success: function (response) {
            // console.log(response);
            if (response == "1") {
              $('#tbl_showExcess'+id).remove();

            }
          }
        });
      }
    }
    function deleteContingentBudget(id) {
    // alert(id);
      if(confirm('Are you sure want to delete this Record')) {
        $.ajax({
          url: "{{url('adminView/delete_Contingentbudget')}}/"+id,
          success: function (response) {
            // console.log(response);
            if (response == "1") {
              $('#tbl_showcontingent'+id).remove();

            }
          }
        });
      }
    }
    
</script>

>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
@endsection