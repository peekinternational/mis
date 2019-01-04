@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Student FTF Collection -->
        @if(session()->has('reconsileState'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('reconsileState')}}
        </div>
        @endif
        <h3><strong>Faroogh-e-Taleem Summary Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addstatement"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table previousTables" id="previousTable">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Month</th>
                    <th>Class</th>
                    <th>No. of students</th>
                    <th>FTF</th>
                    <th>Total</th>
                    <th>Class Incharge</th>
                    <th>Prepared By</th>
                    <th>Verified By</th>
                    <th>Principal/DDO</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @if(count($showStatement)>0)
              @foreach($showStatement as $statement)
                  <tr id="tbl_show{{$statement->id}}">
                    <td>{{$statement->id}}</td>
                    <td>{{$statement->month}}</td>
                    <td>{{$statement->class}}</td>
                    <td>{{$statement->noOfStudent}}</td>
                    <td>{{$statement->fundCollection}}</td>
                    <td>{{$statement->totalFund}}</td>
                    <td>{{$statement->inchargeName}}</td>
                    <td>{{$statement->preparedBy}}</td>
                    <td>{{$statement->verifiedBy}}</td>
                    <td>{{$statement->principalName}}</td>
                    <td>
                      <a href="{{url('adminView/edit-statement/'.$statement->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_statement('{{$statement->id}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
              @endforeach
              @endif
              </tbody>
          </table>
          <div class="text-right pagination-table"><?php echo $showStatement->render(); ?></div>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="statementForm" style="display: none;">
            <h3 class="box-title">Faroogh-e-Taleem Summary</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/reconsile_statement')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="month">Month</label>
                <input type="text" class="form-control" name="month" id="month" placeholder="Month">
              </div>
              <div class="form-group">
                <label for="class">Class</label>
                <input type="text" class="form-control" name="class" id="class" placeholder="Class">
              </div>
              <div class="form-group">
                <label for="noOfStudent">No. of students</label>
                <input type="text" class="form-control" id="noOfStudent" name="noOfStudent" placeholder="No. of Students">
              </div>
              <div class="form-group">
                <label for="fTF">FTF</label>
                <input type="text" class="form-control" name="fundCollection" id="fTF" placeholder="FTF">
              </div>
              <div class="form-group">
                <label for="total">Total</label>
                <input type="text" class="form-control" name="totalFund" id="total" placeholder="Total">
              </div>
              <div class="form-group">
                <label for="inchargeName">Name of class incharge</label>
                <input type="text" class="form-control" id="inchargeName" name="inchargeName" placeholder="Name of class incharge">
              </div>
              <div class="form-group">
                <label for="preparedBy">Prepared by</label>
                <input type="text" class="form-control" id="preparedBy" name="preparedBy" placeholder="Prepared by">
              </div>
              <div class="form-group">
                <label for="verifiedBy">Verified by</label>
                <input type="text" class="form-control" id="verifiedBy" name="verifiedBy" placeholder="Verified by">
              </div>
              <div class="form-group">
                <label for="principal">Principal/DDO</label>
                <input type="text" class="form-control" id="principal" name="principalName" placeholder="Principal/DDO">
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

<script>
  $('#addstatement').click(function(){
    $('#statementForm').toggle();
  });


  function delete_statement(id) {
    // alert(id);
      if (confirm('Are you sure want to delete this user')) {
          $.ajax({
            url: "{{url('adminView/delete_reconcileStatement')}}/"+id,
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