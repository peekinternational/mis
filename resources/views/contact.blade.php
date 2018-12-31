@extends('layouts.app')
@section('content')
<!-- start main -->
<!-- <div class="main_bg">
	<div class="container">
		<div class="main">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
		</div>
	</div>
</div> -->
<!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
		    <div class="col-md-4 company_ad">
			    <h3>Find Address :</h3>
  				<address>
					 <p>GHS BHADANA</p>
					 <p>Village Bhadana P.O Bhadana</p>
					 <p>Tehsil Gujar Khan District Rawalpidni </p>
					 <p>Pakistan</p>
			   		<p>Phone: (051) 3583507</p>
			   		<p>Fax: (051) 3583507</p>
			 	 	<p>Email: <a href="mailto:info@mycompany.com">Ghsbhadana.Gk@Gmail.Com</a></p>
			   	</address>
			</div>
			<div class="col-md-8">
			  <div class="contact-form">
			  	<h3>Contact Us</h3>
				    <form method="post" action="contact-post.html" style="background: transparent;">
				    	<div>
					    	<span>name</span>
					    	<span><input type="username" class="form-control" id="userName"></span>
					    </div>
					    <div>
					    	<span>e-mail</span>
					    	<span><input type="email" class="form-control" id="inputEmail3"></span>
					    </div>
					    <div>
					    	<span>subject</span>
					    	<span><textarea name="userMsg"> </textarea></span>
					    </div>
					   <div>
					   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit us"></label>
					  </div>
				    </form>
			    </div>
			</div>		
			<div class="clearfix"></div>		
	</div> 
</div>
</div>
@endsection