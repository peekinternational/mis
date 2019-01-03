@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <!-- Achievement Record -->
        @if(session()->has('reward'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('reward')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Employee Rewards and Punishment Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addReward"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Employee Name</th>
                    <th>Reward</th>
                    <th>Date</th>
                    <th>Comments</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showReward)>0)
                @foreach($showReward as $reward)
                  <tr id="tbl_show{{$reward->id}}">
                    <td>{{$reward->id}}</td>
                    <td>{{$reward->name}}</td>
                    <td>{{$reward->reward}}</td>
                    <td>{{$reward->date}}</td>
                    <td>{{$reward->comments}}</td>
                    <td>
                      <a href="{{url('/adminView/edit-employeeReward/'.$reward->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_rewardRecord('{{$reward->id}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
              @endif
              </tbody>
          </table>
          <div class="text-right"><?php echo $showReward->render(); ?></div>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="rewardForm" style="display: none;">
          <h3 class="box-title">Rewards & Punishment</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/faculty_reward')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="professionalQualification">Employee Name</label>
               <select class="form-control" name="faculty_id">
                 <option value="">Select Employeer</option>
                 
                @foreach($facultyR as $record)
                 <option value="{{$record->id}}">{{$record->name}}</option>
                @endforeach
               </select>
              </div>
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="date">
              </div>
              <div class="form-group">
                <label for="reward">Reward/Punishment</label>
                <input type="text" class="form-control" id="reward" name="reward" placeholder="Reward/Punishment">
              </div>
              <div class="form-group">
                <label for="comments">Comments</label>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comments"></textarea>
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

<script>
  $('#addReward').click(function(){
    $('#rewardForm').toggle();
  });


  function delete_rewardRecord(id)
  {
    if(confirm('Are you sure to delete Record')){
      $.ajax({
        url: "{{url('adminView/delete_reward')}}/"+ id,
        success: function(response){
          console.log(response);
          if(response == "1"){
            $('#tbl_show'+ id).remove();
          }
        }
      });
    }
  }


</script>
@endsection