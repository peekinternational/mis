@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Library Stock/Accession Register -->
        @if(session()->has('AssignedTask'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('AssignedTask')}}
        </div>
        @endif
        <div class="box box-primary">
          <h3 class="box-title">Task</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post" action="{{url('adminView/assigned_task')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="taskDate" id="date">
              </div>
              <div class="form-group">
                <label for="time">Time</label>
                <input type="text" class="form-control" id="time" name="assignTime" placeholder="Time">
              </div>
              <div class="form-group">
                <label for="task">Task</label>
                <input type="text" class="form-control" id="task" name="taskName" placeholder="Task">
              </div>
              <div class="form-group">
                <label for="assignedTo">Assigned to</label>
                <input type="text" class="form-control" id="assignedTo" name="assignedTo" placeholder="Assigned to">
              </div>
              <div class="form-group">
                <label for="targetTime">Target time</label>
                <input type="text" class="form-control" id="targetTime" name="targetTime" placeholder="Target time">
              </div>
              <div class="form-group">
                <label for="remarks">Remarks</label>
                <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks"></textarea>
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
@endsection