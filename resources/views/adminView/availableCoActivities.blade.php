@extends('layouts.app')
@section('content')

<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Procurement Documents -->
        <ul class="nav nav-tabs nav-justified">
          @foreach($mainCat as $main)
          <li class="" id="{{$main->cat_id}}"><a data-toggle="tab" href="#sports{{$main->cat_id}}">{{$main->name}}</a></li>
          @endforeach
        </ul>

        <div class="tab-content">
          <div id="sports1" class="tab-pane fade in active">
            <!-- Academic Record -->
            <div class="box box-primary">
                <h3 class="box-title">Sports</h3>
              <!-- form start --><br>
              <form role="form" method="Post" action="{{url('adminView/sports_cat')}}">
                <div class="box-body">
                  <div class="">
                    <input type="hidden" name="">
                  </div>
                  <div class="form-group">
                    <label for="studentName">Sports</label>
                    <select class="form-control sports_option" id="sports_option">
                      
                    </select>
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="sports2" class="tab-pane fade">
            <!-- Previous Result -->
            <div class="box box-primary">
                <h3 class="box-title">Athletics</h3>
              <!-- form start --><br>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="staffName">Athletics Games</label>
                    <select class="form-control ath_option">
                     
                    </select>
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="sports3" class="tab-pane fade">
            <!-- Previous Result -->
            <div class="box box-primary">
                <h3 class="box-title">Literature</h3>
              <!-- form start --><br>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="staffName">Literature Activities</label>
                    <select class="form-control literature_option">
                    </select>
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
          <div id="sports4" class="tab-pane fade">
            <!-- Previous Result -->
            <div class="box box-primary">
                <h3 class="box-title">Cultural Events</h3>
              <!-- form start --><br>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="staffName">Performing Art/Cultural Events</label>
                    <select class="form-control culture_option">
                    </select>
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div>
        </div><!-- /.box -->
      </div>
    </div>
  </div>  
</div>
<!-- end main -->
<script >

  $(document).ready(function(){

    var url = "{{url('adminView/sports_cat')}}";
    $.ajax({
      url: url,
      type: 'get',
      data: {id:1},
      dataType: 'json',
      success: function(data){
        var htmls='';
        for(var i=0; i<data.length; i++)
        {
          htmls ='<option value="'+data[i].id+'">'+data[i].name+'</option>';
          $('#sports_option').append(htmls);
        }
      }
    });
  });

  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });
  $('.nav-tabs li').click(function(){
    var categryId = $(this).attr('id');
    var output = [];
    var outputs = [];
    var outputLit = [];
    var outputCul = [];
    var url = "{{url('adminView/sports_cat')}}";
    $.ajax({
      url: url,
      type: 'get',
      data: {id:categryId},
      dataType: 'json',
      success: function(data){
        var htmls='';
        var htmlss='';
       for(var i=0; i<data.length; i++)
       {
        if(data[i].cat_id==1){
            output.push('<option value="'+data[i].id+'">'+data[i].name+'</option>');   
        }

        else if(data[i].cat_id==2){
             outputs.push('<option value="'+data[i].id+'">'+data[i].name+'</option>');
        }

        else if(data[i].cat_id==3){
             outputLit.push('<option value="'+data[i].id+'">'+data[i].name+'</option>');
        }
        else{
          outputCul.push('<option value="'+data[i].id+'">'+data[i].name+'</option>');
        }

       }
        $('#sports_option').html(output.join(''));
        $('.ath_option').html(outputs.join(''));
        $('.literature_option').html(outputLit.join(''));
        $('.culture_option').html(outputCul.join('')); 
      },
    });
  });
</script>
@endsection