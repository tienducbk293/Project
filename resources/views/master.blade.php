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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">

	<style type="text/css">
    	#mymap {
      		border:1px solid red;
      		width: 100%; 
      		height: 340px
    	}
  	</style>
</head>
<body style="background-image: url(source/assets/img/environment_background.jpg);">
	@include('header')
	@yield('content')

	<script src="source/assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="source/assets/js/vendor/bootstrap.min.js"></script>
	<script src="source/assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="source/assets/js/parallax.min.js"></script>			
	<script src="source/assets/js/owl.carousel.min.js"></script>		
	<script src="source/assets/js/jquery.magnific-popup.min.js"></script>				
	<script src="source/assets/js/jquery.sticky.js"></script>
	<script src="source/assets/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&sensor=true&key=AIzaSyDefelIjrBjLQtkK9SJmXzh83J5omlql9M&callback=initMap" async defer>
	</script>
	<script src="{{ asset('js/Chart.js') }}"></script>
	<script>
		new Chart(document.getElementById("canvas"),{
			"type":
			"bar",
			"data":{
				"labels":["10-05-2018","11-05-2018","12-05-2018","13-05-2018","14-05-2018"], // Tiêu đề các cột
				"datasets":[{
					"label":"My First Dataset",
					"data":[44.0,42.0,56.0,54.0,38.0], // Thay mảng data mà Đức lấy đc để vào đây
					"fill":false,
					"backgroundColor":[
						"rgba(255, 99, 132, 0.2)",
						"rgba(255, 159, 64, 0.2)",
						"rgba(255, 205, 86, 0.2)",
						"rgba(75, 192, 192, 0.2)",
						"rgba(54, 162, 235, 0.2)",
						"rgba(153, 102, 255, 0.2)",
						"rgba(201, 203, 207, 0.2)"],
					"borderColor":[
						"rgb(255, 99, 132)",
						"rgb(255, 159, 64)",
						"rgb(255, 205, 86)",
						"rgb(75, 192, 192)",
						"rgb(54, 162, 235)",
						"rgb(153, 102, 255)",
						"rgb(201, 203, 207)"],
					"borderWidth":1
				}]
			},
			"options":{
				"scales":{
					"yAxes":[{
						"ticks":{"beginAtZero":true}
					}]
				}
			}
		});

		new Chart(document.getElementById("canvas1"),{
			"type":
			"bar",
			"data":{
				"labels":["10-05-2018","11-05-2018","12-05-2018","13-05-2018","14-05-2018"], // Tiêu đề các cột
				"datasets":[{
					"label":"My First Dataset",
					"data":[44.0,42.0,56.0,54.0,38.0], // Thay mảng data mà Đức lấy đc để vào đây
					"fill":false,
					"backgroundColor":[
						"rgba(255, 99, 132, 0.2)",
						"rgba(255, 159, 64, 0.2)",
						"rgba(255, 205, 86, 0.2)",
						"rgba(75, 192, 192, 0.2)",
						"rgba(54, 162, 235, 0.2)",
						"rgba(153, 102, 255, 0.2)",
						"rgba(201, 203, 207, 0.2)"],
					"borderColor":[
						"rgb(255, 99, 132)",
						"rgb(255, 159, 64)",
						"rgb(255, 205, 86)",
						"rgb(75, 192, 192)",
						"rgb(54, 162, 235)",
						"rgb(153, 102, 255)",
						"rgb(201, 203, 207)"],
					"borderWidth":1
				}]
			},
			"options":{
				"scales":{
					"yAxes":[{
						"ticks":{"beginAtZero":true}
					}]
				}
			}
		});
    </script>

</body>
</html>
