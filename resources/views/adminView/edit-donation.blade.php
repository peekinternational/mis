@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <div class="box box-primary">
          <h3 class="box-title">Donations</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post" action="{{url('adminView/donation_page')}}">
                {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="date" class="form-control" id="date" name="donationDate" value="{{$data->donationDate}}" placeholder="Date">
              </div>
              <div class="form-group">
                <label for="donor">Donor</label>
                <input type="text" class="form-control" id="donor" name="donorName" value="{{$data->donorName}}" placeholder="Donor">
              </div>
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" value="{{$data->amount}}" placeholder="Amount">
              </div>
              <div class="form-group">
                <label for="purpose">Purpose</label>
                <input type="text" class="form-control" id="purpose" name="purpose" value="{{$data->purpose}}" placeholder="Purpose">
              </div>
              <div class="form-group">
                <label for="depositedA/CNo">Deposited in A/C No</label>
                <input type="text" class="form-control" id="depositedA/CNo" name="depositAccNo" value="{{$data->depositAccNo}}" placeholder="Deposited in A/C No">
              </div>
              <div class="form-group">
                <label for="bankBranch">Bank branch</label>
                <input type="text" class="form-control" id="bankBranch" name="bankBranch" value="{{$data->bankBranch}}" placeholder="Bank branch">
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
<script type="">
  $('#adddonation').click(function(){
    $('#donationForm').toggle();
  });

  function delete_donation(id) {
    // alert(id);
      if(confirm('Are you sure want to delete this Record')) {
        $.ajax({
          url: "{{url('adminView/Dlete_Donation')}}/"+id,
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
@endsection