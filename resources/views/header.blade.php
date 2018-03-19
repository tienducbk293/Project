<!-- Start Header Area -->
<header class="default-header">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
	        <a class="navbar-brand" href="{{route('homepage')}}">
		        <img style = "height: 40px; width: 90px" src="source/assets/img/environment_logo.jpg" alt="">
	        </a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
			    <ul class="navbar-nav">
	        <li><a href="{{route('homepage')}}#home">Home</a></li>
	        <li><a href="{{route('homepage')}}#travel">Information</a></li>
	        <li><a href="{{route('homepage')}}#news">News</a></li>
	        <!-- Dropdown -->
				        <li class="dropdown">
						    <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							        Pages
						    </a>
						    <div class="dropdown-menu">
							     <a class="dropdown-item" href="{{route('search')}}">Search</a>
						    </div>
				        </li>								
			        </ul>
	        </div>						
		</div>
	</nav>
</header>
<!-- End Header Area -->
