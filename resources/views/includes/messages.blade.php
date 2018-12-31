@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">
  {{$error}}
</div>
@endforeach
@endif
@if( \Session::has('success'))
<div class="alert alert-success alert-dismissible">
  <a href="#" id="closed" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{ \Session::get('success')}}
</div>
@endif
@if( \Session::has('red-alert'))
<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{ \Session::get('red-alert')}}
</div>
@endif
