<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="source/assets/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->

	<title>Environment</title>
	{!! Charts::styles() !!}
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<!--
	CSS
	============================================= -->
	<link rel="stylesheet" href="source/assets/css/linearicons.css">
	<link rel="stylesheet" href="source/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="source/assets/css/bootstrap.css">
	<link rel="stylesheet" href="source/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="source/assets/css/main.css">
	<link rel="stylesheet" href="source/assets/css/style.css">
	<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<style>
      #map {
        width: 500px;
        height: 400px;
      }
    </style>
</head>
<body background="source/assets/img/environment_background.jpg">
	@include('header')
	@yield('content')

	<script src="source/assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/	U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="source/assets/js/vendor/bootstrap.min.js"></script>
	<script src="source/assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="source/assets/js/parallax.min.js"></script>			
	<script src="source/assets/js/owl.carousel.min.js"></script>		
	<script src="source/assets/js/jquery.magnific-popup.min.js"></script>				
	<script src="source/assets/js/jquery.sticky.js"></script>
	<script src="source/assets/js/main.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&sensor=true&key=AIzaSyDa-JT08xt97W6UPBDoOzi34vEtkWLv-j4&callback=initMap" async defer>
	</script>
	
</body>
</html>
