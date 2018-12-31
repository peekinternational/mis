@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Academic Record -->
        <div class="box box-primary">
          <h3 class="box-title">Seating Plan</h3>
          <!-- form start --><br>
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="datesheet">Upload Seating Plan</label>
                <input type="file" class="form-control" id="datesheet">
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