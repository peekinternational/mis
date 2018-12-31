@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Donations -->
        @if(session()->has('donatio'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('donatio')}}
        </div>
        @endif
<<<<<<< HEAD
=======
         <h3><strong>Donation  Detail</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addsalryBudget"><i class="fa fa-plus"></i></button></h3><br>
            <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
              <table class="table table-hover stdnt-table previousTables" id="previousTable">
                <thead>
                      <tr>
                        <th>ID</th>
                        <th>token</th>
                        <th>Donation</th>
                        <th>Donor NAme</th>
                        <th> Amount</th>
                        <th>Purpose</th>
                        <th>deposit Account no</th>
                        <th>Bank Branch</th>
                        
                        </tr>
                  </thead>
                  <tbody>
                    @if(count($showdonation)>0)
                  @foreach($showdonation as $show_Donation)
                      <tr id="tbl_show{{$show_Donation->id}}">
                        <td>{{$show_Donation->id}}</td>
                        <td>{{$show_Donation->_token}}</td>
                        <td>{{$show_Donation->donationDate}}</td>
                        <td>{{$show_Donation->donorName}}</td>
                        <td>{{$show_Donation->amount}}</td>
                        <td>{{$show_Donation->purpose}}</td>
                        <td>{{$show_Donation->depositAccNo}}</td>
                        <td>{{$show_Donation->bankBranch}}</td>
                        
                        <td>
                          <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
                          <a href="" data-toggle="modal" onclick="delete_donation('{{$show_Donation->id}}');"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                      </tr>
                  @endforeach
                  @endif
                  </tbody>
              </table>
              <div class="text-right pagination-table"><?php echo $showdonation->render(); ?></div>
            </div>
            <!-- End View -->
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
        <div class="box box-primary">
          <h3 class="box-title">Donations</h3>
          <br>
          <!-- form start -->
          <form role="form" method="Post" action="{{url('adminView/donation_page')}}">
                {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="donationDate" placeholder="Date">
              </div>
              <div class="form-group">
                <label for="donor">Donor</label>
                <input type="text" class="form-control" id="donor" name="donorName" placeholder="Donor">
              </div>
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
              </div>
              <div class="form-group">
                <label for="purpose">Purpose</label>
                <input type="text" class="form-control" id="purpose" name="purpose" placeholder="Purpose">
              </div>
              <div class="form-group">
                <label for="depositedA/CNo">Deposited in A/C No</label>
                <input type="text" class="form-control" id="depositedA/CNo" name="depositAccNo" placeholder="Deposited in A/C No">
              </div>
              <div class="form-group">
                <label for="bankBranch">Bank branch</label>
                <input type="text" class="form-control" id="bankBranch" name="bankBranch" placeholder="Bank branch">
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
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
@endsection