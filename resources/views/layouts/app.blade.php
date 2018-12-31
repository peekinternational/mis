
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>GHS Bhandana</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

     <!-- Bootstrap checking -->
    <link href="{{url('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{url('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    
     <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- start plugins -->
    <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
    <!-- <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script> -->
    <!-- <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script> -->
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- start slider -->
    <link href="{{url('css/slider.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{url('js/modernizr.custom.28468.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.cslider.js')}}"></script>
        
    
    <!-- Owl Carousel Assets -->
    <link href="{{url('css/owl.carousel.css')}}" rel="stylesheet">
     
	
  </head>
  <body>
    @include('includes.header')

    <!-- @yield('inner-header') -->

    @yield('content')

    @include('includes.footer')


    <!--Scroll to top Button-->
    
    @yield('page-footer')

<div class="modal fade" id="login" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 style="margin: 0;">Login</h4>
      </div>
      @include('includes.messages')
      <div class="modal-body">
        <form  method="post" action="{{url('login')}}">
          {{csrf_field()}}
          <div class="form-group">
            <label for="email">User Type</label><br>
            <select class="form-control" name="userType">
              <option>--Select--</option>
              <option>Admin</option>
              <option>Staff</option>
              <option>Student</option>
            </select>
          </div>
          <div class="form-group {{ $errors->first('email', 'has-error') }}">
            <label for="uname">Login Id</label><br>
            <input type="text" name="uname" class="form-control" required="">
          </div>
          <!-- <span class="help-block">{{ $errors->first('email', ':message') }}</span> -->
          <div class="form-group {{ $errors->first('password', 'has-error') }}">
            <label for="password">Password</label><br>
            <input type="password" name="password" class="form-control" required="">
          </div>
          <div class="modal-footer" style="padding-bottom: 0;">
            <button type="submit" class ="btn btn-primary"> Submit</button>
            <a class ="btn btn-danger" data-dismiss="modal">Close</a>    
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<form role="form" id="registerUser" method="POST" action="{{url('store')}}">
  <div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 style="margin: 0;">Sign Up</h4>
        </div>
        <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="email">User Type</label><br>
            <select class="form-control" id="userType" name="userType">
              <option>--Select--</option>
              <option>Staff</option>
              <option>Student</option>
            </select>
          </div>
          <div class="form-group">
            <label for="fullname">Full Name</label><br>
            <input type="text" name="fullname" id="fullname" class="form-control">
          </div>
          <div class="form-group">
            <label for="uname">User name</label><br>
            <input type="text" name="uname" id="uname" class="form-control">
          </div>
          <div class="form-group">
            <label for="mblNumbr">Mobile No</label><br>
            <input type="text" name="mblNumbr" id="mblNumbr" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm password</label><br>
            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control">
          </div>

          <div class="modal-footer" style="padding-bottom: 0;">
            <button type="submit" class="btn btn-primary" >Submit</button> 
            <a class ="btn btn-danger" data-dismiss="modal">Close</a>    
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>
    <script type="text/javascript">
        $(function() {

            $('#da-slider').cslider({
                autoplay : true,
                bgincrement : 450
            });

        });
    </script>
    <!--
    <script src="js/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {

                    $("#owl-demo").owlCarousel({
                        items : 4,
                        lazyLoad : true,
                        autoPlay : true,
                        navigation : true,
                        navigationText : ["", ""],
                        rewindNav : false,
                        scrollPerPage : false,
                        pagination : false,
                        paginationNumbers : false,
                    });

                });
            </script>
    -->
    <script type="text/javascript">
        // $(document).ready(function(){
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
           // $( "#registerUser" ).submit(function( event ) {
           //      event.preventDefault();
           //      var form = $(this).serialize();
           //      var url = $(this).attr('action');
                
           //      $.ajax({
           //          type: "post",
           //          url: url,
           //          data: form,
           //          dataType: 'json',
           //          success: function(data) {
           //              console.log(data);
                    // if(json=="no_errors"){
                    //         window.location = url('/education');
                    // }
                    // else{
                        
                    // }
        //             },
        //             error: function(json) {
        //                 console.log(json);
        //             },
        //         });

        //     });
        // })
      
    </script>
    <script>
    $(document).ready(function(){
      $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
    </script>

    <script src="{{('https://use.fontawesome.com/7518055ce7.js')}}"></script>
    </body>
</html>