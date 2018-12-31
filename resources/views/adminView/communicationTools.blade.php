@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        @if(session()->has('communication'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('communication')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Communication Tools Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addTools"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Home Address</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showTools)>0)
                @foreach($showTools as $tools)
                  <tr id="tbl_show{{$tools->id}}">
                    <td>{{$tools->id}}</td>
                    <td>{{$tools->mobileNo}}</td>
                    <td>{{$tools->email}}</td>
                    <td>{{$tools->homeAddress}}</td>
                    <td>
                      <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_communicationTools('{{$tools->id}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
                @else
                <tr>
                  <td>No Record added to Show Please add new record</td>
                </tr>
              @endif
              </tbody>
          </table>
          <div class="text-right"><?php echo $showTools->render(); ?></div>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="communicationToolsForm" style="display: none;">
          <h3 class="box-title">Communication Tools</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post" action="{{url('adminView/communication_tools')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="mobileNo">Mobile No.</label>
                <input type="text" class="form-control" id="mobileNo" name="mobileNo" placeholder="Mobile No">
              </div>
              <div class="form-group">
                <label for="emailAddress">Email address</label>
                <input type="email" class="form-control" id="emailAddress" name="email" placeholder="Email Address">
              </div>
              <div class="form-group">
                <label for="homeAddress">Home address</label>
                <input type="text" class="form-control" id="homeAddress" name="homeAddress" placeholder="Home Address">
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
            </div>
          </form>
        </div>
        <!-- End -->
      </div>
    </div>
  </div>
</div>
<!-- end main -->

<script>
  $('#addTools').click(function(){
    $('#communicationToolsForm').toggle();
  });


  function delete_communicationTools(id)
  {
    if(confirm("Are you sure you want to delete employee logs")){
      $.ajax({
        url: "{{url('adminView/delete_communicationTools')}}/"+id,
        success: function(response){
          console.log(response);
          if(response == "1"){
            $('#tbl_show'+id).remove();
          }
        }
      });
    }
  }
</script>
@endsection