@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 

        <div class="tab-content">
           
          <div class="box box-primary">
              <h3 class="box-title">Contingent Budget</h3>
            <!-- form start --><br>
            <form role="form" method="Post" action="{{url('adminView/contingent_budget')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="DdoNo">DDO No.</label>
                  <input type="hidden" name="id" value="{{$data->id}}">
                  <input type="text" class="form-control" id="DdoNo" name="conDdoNo" value="{{$data->conDdoNo}}" placeholder="DDO No">
                </div>
                <div class="form-group">
                  <label for="budgetyear">Budget year</label>
                  <input type="text" class="form-control" id="budgetyear" name="conBudgetYear" value="{{$data->conBudgetYear}}" placeholder="Budget year">
                </div>
                <!-- <div class="form-group">
                  <label for="subjectCode">Subject code</label>
                  <input type="text" class="form-control" id="subjectCode" placeholder="Subject code">
                </div> -->
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="conDescription" value="{{$data->conDescription}}" placeholder="Description">
                </div>
                <div class="form-group">
                  <label for="estimatedBudget">Estimated budget</label>
                  <input type="text" class="form-control" id="estimatedBudget" name="conEstimatedBudget" value="{{$data->conEstimatedBudget}}" placeholder="Estimated budget">
                </div>
                <div class="form-group">
                  <label for="allocatedBudget">Allocated budget</label>
                  <input type="text" class="form-control" id="allocatedBudget" name="conAllocatedBudget" value="{{$data->conAllocatedBudget}}" placeholder="Allocated budget">
                </div>
                <div class="form-group">
                  <label for="released">Released</label>
                  <input type="text" class="form-control" id="released" name="conReleased" value="{{$data->conReleased}}" placeholder="Released">
                </div>
                <div class="form-group">
                  <label for="consumed">Consumed</label>
                  <input type="text" class="form-control" id="consumed" name="conConsumed" value="{{$data->conConsumed}}" placeholder="Consumed">
                </div>
                <div class="form-group">
                  <label for="balance">Balance</label>
                  <input type="text" class="form-control" id="balance" name="conBalance" value="{{$data->conBalance}}" placeholder="Balance">
                </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
              </div>
            </form>
          </div><!-- /.box -->
          
        </div>
        <!-- End -->
      </div>
    </div>
  </div>  
</div>
<!-- end main -->

@endsection