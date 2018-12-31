@extends('layouts.app')
@section('content')

<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Student FTF Collection -->
        @if(session()->has('fundsCollection'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('fundsCollection')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Faroogh-e-Taleem Fund Collection Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addFtfCollection"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table previousTables" id="previousTable">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Studemt Name</th>
                    <th>Roll No</th>
                    <th>Admission No</th>
                    <th>Month</th>
                    <th>Received Funds</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                <tr class="recordRow" ></tr>
                @if(count($showftfCollection)>0)
              @foreach($showftfCollection as $ftfCollection)
                  <tr id="tbl_show{{$ftfCollection->id}}">
                    <td>{{$ftfCollection->id}}</td>
                    <td>{{$ftfCollection->stdName}}</td>
                    <td>{{$ftfCollection->rollNo}}</td>
                    <td>{{$ftfCollection->admisssionNo}}</td>
                    <td>{{$ftfCollection->month}}</td>
                    <td>{{$ftfCollection->receivedFunds}}</td>
                    <td>{{$ftfCollection->total}}</td>
                    <td>
                      <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_ftfCollection('{{$ftfCollection->id}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
              @endforeach
              @endif
              </tbody>
          </table>
          <div class="text-right pagination-table"><?php echo $showftfCollection->render(); ?></div>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="ftfCollectionForm" style="display: none;">
          <h3 class="box-title">FTF Collection</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/Ftf_collection')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="name">Name</label>
                <select class="form-control" name="stdName" id="stdName">
                   <option value="">Select</option>
                  @foreach($studentInfo as $student)
                  <option id="studentId" value="{{$student->id}}">{{$student->stdName}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="rollNo">Roll No.</label>
                <input type="text" class="form-control" id="rollNo" name="rollNo" placeholder="Roll No." readonly="">
              </div>
              <div class="form-group">
                <label for="admisssionNo">Admission No.</label>
                <input type="text" class="form-control" id="admisssionNo" name="admisssionNo" placeholder="Admission No." readonly="">
              </div>
              <div class="form-group">
                <label for="month">Month</label>
                <input type="text" class="form-control" id="month" name="month" placeholder="Month">
              </div>
              <div class="form-group">
                <label for="FTFreceived">FTF received</label>
                <input type="text" class="form-control" id="FTFreceived" name="receivedFunds" placeholder="FTF received">
              </div>
              <div class="form-group">
                <label for="total">Total</label>
                <input type="text" class="form-control" id="total" name="total" placeholder="Total">
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
<script type="text/javascript">
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $('#stdName').change(function(){
    var studentId = $(this).val();
    var url = "{{url('adminView/Ftf_collection')}}";
    $.ajax({
      url: url,
      type: 'get',
      data: {id:studentId},
      success: function(data){
        $('#rollNo').val(data.rollNo);
        $('#admisssionNo').val(data.admissionNo); 
      },
    });
  });


  $('#addFtfCollection').click(function(){
    $('#ftfCollectionForm').toggle();
  });


  function delete_ftfCollection(id) {
    // alert(id);
      if (confirm('Are you sure want to delete this user')) {
          $.ajax({
            url: "{{url('adminView/deleteftfCollection')}}/"+id,
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