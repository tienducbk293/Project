<!-- Start Header Area -->
<header class="default-header">
	<nav class="navbar navbar-expand-lg navbar-light nav-pills">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{route('homepage')}}">
      				<img style = "height: 40px; width: 40px" src="public/img/logo.png" alt="">
      			</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
	        	</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
           			<li class="active"><a href="{{route('homepage')}}">Home</a></li>
           			<li><a href="#">Infomation</a></li>
        		</ul>
        		<ul class="nav navbar-nav navbar-right">
        			@if(Auth::check())
	        			<li><a href="{{route('admin.pages.survey')}}"><span class="glyphicon glyphicon-user"> {{Auth::user()->name}}</a></li>
	        			<li><a href="{{route('logout')}}"> Log Out</a></li>
	        		@else
	        			<li><a href="{{route('login')}}"> Log In</a></li>
	        			<li><a href="{{route('signup')}}"></span> Sign Up</a></li>
	        		@endif
      			</ul>
			</div>
		</div>
	</nav>
</header>
<!-- End Header Area -->
