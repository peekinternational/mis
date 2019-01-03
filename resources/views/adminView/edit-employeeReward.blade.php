@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <!-- Achievement Record -->
       
        <div class="box box-primary">
          <h3 class="box-title">Rewards & Punishment</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/faculty_reward')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <input type="hidden" name="id" value="{{$rewardData->id}}">
                <label for="professionalQualification">Employee Name</label>
                 <select class="form-control" name="faculty_id">
                   
                   <option value="{{$rewardData->id}}">{{$rewardData->name}}</option>
                 </select>
              </div>
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{$rewardData->date}}" placeholder="date">
              </div>
              <div class="form-group">
                <label for="reward">Reward/Punishment</label>
                <input type="text" class="form-control" id="reward" name="reward" value="{{$rewardData->reward}}" placeholder="Reward/Punishment">
              </div>
              <div class="form-group">
                <label for="comments">Comments</label>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comments">{{$rewardData->comments}}</textarea>
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
        <!-- End -->
      </div>
    </div>
  </div>
</div>
<!-- end main -->
@endsection