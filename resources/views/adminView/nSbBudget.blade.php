@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Student FTF Collection -->
        @if(session()->has('nsb'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('nsb')}}
        </div>
        @endif
<<<<<<< HEAD
=======
        <!-- View -->
            <h3><strong>Nsb Budget Detail</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addsalryBudget"><i class="fa fa-plus"></i></button></h3><br>
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
                        <th>Excess</th>
                        <th>Consumed</th>
                        <th>Balance</th>
                        </tr>
                  </thead>
                  <tbody>
                    @if(count($showNsbBudget)>0)
                  @foreach($showNsbBudget as $shownsbBudget)
                      <tr id="tbl_show{{$shownsbBudget->id}}">
                        <td>{{$shownsbBudget->id}}</td>
                        <td>{{$shownsbBudget->DdoNo}}</td>
                        <td>{{$shownsbBudget->budgetYear}}</td>
                        <td>{{$shownsbBudget->description}}</td>
                        <td>{{$shownsbBudget->estimatedBudget}}</td>
                        <td>{{$shownsbBudget->allocatedBudget}}</td>
                        <td>{{$shownsbBudget->released}}</td>
                        <td>{{$shownsbBudget->consumed}}</td>
                        <td>{{$shownsbBudget->balance}}</td>
                        <td>
                          <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
                          <a href="" data-toggle="modal" onclick="delete_shownsbBudget('{{$shownsbBudget->id}}');"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                      </tr>
                  @endforeach
                  @endif
                  </tbody>
              </table>
              <div class="text-right pagination-table"><?php echo $showNsbBudget->render(); ?></div>
            </div>
            <!-- End View -->
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
        <div class="box box-primary">
            <h3 class="box-title">NSB</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/nsb_budget')}}">
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
    </div>
  </div>  
</div>
<!-- end main -->
<<<<<<< HEAD
=======
<script type="">
  $('#addBtn').click(function(){
    $('#admissionInqryForm').toggle();
  });

  function delete_shownsbBudget(id) {
    // alert(id);
      if(confirm('Are you sure want to delete this Record')) {
        $.ajax({
          url: "{{url('adminView/Dlete_nSbBudget')}}/"+id,
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
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
@endsection