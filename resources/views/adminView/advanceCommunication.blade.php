@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12">
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a data-toggle="tab" href="#bulkSms">Bulk SMS</a></li>
          <li><a data-toggle="tab" href="#bulkEmail">Bulk Email</a></li>
        </ul>

        <div class="tab-content">
          <div id="bulkSms" class="tab-pane fade in active">
            <!-- Academic Record -->
            <div class="box box-primary">
                <h3 class="box-title">Bulk SMS</h3>
              <!-- form start --><br>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="mobileNo">Mobile No.</label>
                    <input type="text" class="form-control" id="mobileNo" placeholder="Mobile No">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Send</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="bulkEmail" class="tab-pane fade">
            <!-- Previous Result -->
            <div class="box box-primary">
                <h3 class="box-title">Bulk Email</h3>
              <!-- form start --><br>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="emailAddress">Email Address</label>
                    <input type="email" class="form-control" id="emailAddress" placeholder="Email Address">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Send</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
        </div>
        <!-- End -->
      </div>
    </div>
  </div>
</div>
<!-- end main -->
@endsection