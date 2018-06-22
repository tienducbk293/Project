<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="public/img/fav.png">
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
	<link rel="stylesheet" href="public/css/linearicons.css">
	<link rel="stylesheet" href="public/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet" href="public/css/owl.carousel.css">
	<link rel="stylesheet" href="public/css/main.css">
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">

	<style type="text/css">
    	#map {
      		border:1px solid red;
      		width: 100%; 
      		height: 340px
    	}
  	</style>
</head>
<body background="public/img/environment_background.jpg">
	@include('header')
	@yield('content')

	<script src="public/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="public/js/vendor/bootstrap.min.js"></script>
	<script src="public/js/jquery.ajaxchimp.min.js"></script>
	<script src="public/js/parallax.min.js"></script>			
	<script src="public/js/owl.carousel.min.js"></script>		
	<script src="public/js/jquery.magnific-popup.min.js"></script>				
	<script src="public/js/jquery.sticky.js"></script>
	<script src="public/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDefelIjrBjLQtkK9SJmXzh83J5omlql9M&callback=initMap"
  type="text/javascript"></script>
	<script src="{{ asset('public/js/Chart.js') }}"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
	<script type="text/javascript">
    var locations = [
  ['Hoàn Kiếm', 21.03075400, 105.85239200, 1],
  ['Thành Công', 21.02035900, 105.81430400, 2],
  ['Tân Mai', 20.98368700, 105.84815600, 3],
  ['Kim Liên', 21.00669400, 105.83563500, 4],
  ['Phạm Văn Đồng', 21.062451, 105.784071, 5],
  ['Tây Mỗ', 21.00885300, 105.74391900, 6],
  ['Mỹ Đình', 21.02039900, 105.76396500, 7],
  ['Hàng Đậu', 21.04038100, 105.84889100, 8],
  ['Chi cục bảo vệ môi trường', 21.01528400, 105.79999600, 9],
  ['Minh Khai - Bắc Từ Liêm', 21.06047200, 105.74978800, 10]
];

function initMap() {
  var myLatLng = {lat: 21.062451, lng: 105.784071};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: myLatLng
    });

  var count;

  for (count = 0; count < locations.length; count++) {  
    new google.maps.Marker({
      position: new google.maps.LatLng(locations[count][1], locations[count][2]),
      map: map,
      title: locations[count][0]
      });
   }
}
  </script>
	<script>
		new Chart(document.getElementById("canvas"),{
			"type":
			"bar",
			"data":{
				"labels":["10-05-2018","11-05-2018","12-05-2018","13-05-2018","14-05-2018"], // Tiêu đề các cột
				"datasets":[{
					"label":"My First Dataset",
					"data": [46.0, 57.0, 35.6, 34.7, 35.0], // Thay mảng data mà Đức lấy đc để vào đây
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
