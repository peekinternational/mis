@extends('layouts.app')
@section('content')
<div class="container slider-container">
	 <div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active">
	      <img src="{{asset('images/5.JPG')}}" alt="School" style="width:100%; height: 520px;">
	    </div>

	    <div class="item">
	      <img src="{{('images/4.JPG')}}" alt="School" style="width:100%; height: 520px;">
	    </div>
	  
	    <div class="item">
	      <img src="{{('images/2.jpg')}}" alt="Award Distribution" style="width:100%; height: 520px;">
	    </div>
	  
	    <div class="item">
	      <img src="{{('images/3.jpg')}}" alt="Award Distribution" style="width:100%; height: 520px;">
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>   

<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			<div class="col-md-3 images_1_of_4 text-center">
				<span class="bg"><i class="fa fa-globe"></i></span>
				<h4><a href="#">Sed Porta Dolor</a></h4>
				<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 1500s.</p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-laptop"></i></span>
				<h4><a href="#">IT Information</a></h4>
				<p class="para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.industry's standard dummy</p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-cog"></i></span>
				<h4><a href="#">Sed Porta Dolor</a></h4>
				<p class="para">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32  by H. Rackham.industry's standard.</p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-shield"></i> </span>
				<h4><a href="#">Contrary  belief</a></h4>
				<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			<div class="col-md-6 content_left">
				<img src="images/pic1.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 content_right">
				<h4>Lorem Ipsum is simply <span>dummy text of the ornare  </span> vulputate printing and  There are many variations of passages.</h4>
				<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. </p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
		</div>
		<!----start-img-cursual---->
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">vehicula diam</a></h4>
					<p>
						Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Morbi nunc</a></h4>
					<p>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Lorem ipsum</a></h4>
					<p>
						On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Sed faucibus</a></h4>
					<p>
						Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Lorem ipsum</a></h4>
					<p>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Lorem ipsum</a></h4>
					<p>
						On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">vehicula diam</a></h4>
					<p>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Lorem ipsum</a></h4>
					<p>
						On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Lorem ipsum</a></h4>
					<p>
						Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">vehicula diam</a></h4>
					<p>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Lorem ipsum</a></h4>
					<p>
						On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Morbi nunc</a></h4>
					<p>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
					</p>
				</div>
			</div>
		</div>
		<!----//End-img-cursual---->
	</div>
</div>
@endsection