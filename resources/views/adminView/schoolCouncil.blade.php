@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- School Council -->
        @if(session()->has('scholCouncil'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('scholCouncil')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Class wise time table</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addSchoolCouncil"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>CNIC</th>
                    <th>Phone No</th>
                    <th>Designation</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showRecord)>0)
                @foreach($showRecord as $schoolCouncil)
                  <tr id="tbl_show{{$schoolCouncil->id}}">
                    <td>{{$schoolCouncil->id}}</td>
                    <td>{{$schoolCouncil->name}}</td>
                    <td>{{$schoolCouncil->cnic}}</td>
                    <td>{{$schoolCouncil->phoneNo}}</td>
                    <td>{{$schoolCouncil->designation}}</td>
                    <td>{{$schoolCouncil->address}}</td>
                    <td>
                      <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_schoolCouncil('{{$schoolCouncil->id}}');"><i class="fa fa-trash text-danger"></i></a>
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
          <div class="text-right"><?php echo $showRecord->render(); ?></div>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="scholCouncilForm" style="display: none;">
            <h3 class="box-title">School Council</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/school_council')}}" autocomplete="off">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
              </div>
              <div class="form-group">
                <label for="cnicNo">CNIC No</label>
                <input type="text" class="form-control" id="cnicNo" name="cnic" placeholder="CNIC No">
              </div>
              <div class="form-group">
                <label for="phoneNo">Phone No</label>
                <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Phone No">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" placeholder="Address" name="address"></textarea>
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
  $('#addSchoolCouncil').click(function(){
    $('#scholCouncilForm').toggle();
  });


  function delete_schoolCouncil(id)
  {
    if(confirm("Are you sure you want to delete class time table")){
      $.ajax({
        url: "{{url('adminView/delete_schoolCouncil')}}/"+id,
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