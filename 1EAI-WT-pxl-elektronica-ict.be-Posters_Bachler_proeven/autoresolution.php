<?php

		require_once 'Mobile_Detect.php';

		$detect = new Mobile_Detect;



		if($detect->isMobile()) {

			header('Location: http://11900765.pxl-ea-ict.be/phone.php/');

			exit;

			}

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta http-equiv="content-type" content="text/html;charset=UTF-8">

		<title>PC Resolution</title>

		<meta name="viewport" content="width=device-width,intial-scale">

		<script src="../../js/ios-orientationchange-fix.min.js"></script>

		<style type="text/css">

			img[usemap]

			{

				border: none;

				height: auto;

				max-width: 100vw;

				width: auto;

			}

		</style>

	</head>

	<body>

		<h1>PC Poster</h1>

		<img src="4K.png" width="4942" height="2160" alt="PC Poster" usemap="#imagemap">

			<map name="imagemap">

		    <area target="" alt="Snelheid" title="Snelheid" href="lightbox.html" coords="67,1332,551,2021" shape="rect">

		    <area target="" alt="Academic research autonome driving" title="Academic research autonome driving" href="lightbox.html" coords="608,1401,1093,2095" shape="rect">

		    <area target="" alt="Accurancy freq. and phase measurements" title="Accurancy freq. and phase measurements" href="lightbox.html" coords="1150,1191,1639,1881" shape="rect">

		    <area target="" alt="Electronic methods" title="Electronic methods" href="lightbox.html" coords="1145,441,1634,1122" shape="rect">

		    <area target="" alt="Eurofins" title="Eurofins" href="lightbox.html" coords="1687,441,2176,1122" shape="rect">

		    <area target="" alt="Biosensor" title="Biosensor" href="lightbox.html" coords="2228,969,2713,284" shape="rect">

		    <area target="" alt="Landingsbeacon" title="Landingsbeacon" href="lightbox.html" coords="2769,1305,3254,1995" shape="rect">

		    <area target="" alt="Smart Suit" title="Smart Suit" href="lightbox.html" coords="3848,1410,4332,2100" shape="rect">

		    <area target="" alt="Fruitsector" title="Fruitsector" href="lightbox.html" coords="4393,1262,4878,1951" shape="rect">

		    <area target="" alt="Energie Efficient" title="Energie Efficient" href="lightbox.html" coords="3306,66,4000,67,4000,486,3935,472,3922,555,3311,555" shape="poly">

		    <area target="" alt="Data App" title="Data App" href="lightbox.html" coords="63,1000,551,996,551,856,503,564,551,564,551,311,63,311" shape="poly">

		    <area target="" alt="Textielsensor" title="Textielsensor" href="lightbox.html" coords="613,1248,1093,1178,984,493,512,567" shape="poly">

		    <area target="" alt="Improving the Quality" title="Improving the Quality" href="lightbox.html" coords="1852,2095,2328,1969,2132,1305,1660,1441" shape="poly">

		    <area target="" alt="Electronic Toll" title="Electronic Toll" href="lightbox.html" coords="2717,1868,2298,1864,2224,1611,2228,1179,2717,1179" shape="poly">

		    <area target="" alt="Draagbare ethernet" title="Draagbare ethernet" href="lightbox.html" coords="3359,2123,3839,2006,3673,1325,3254,1430,3258,1687" shape="poly">

		    <area target="" alt="Difference Image Proc." title="Difference Image Proc." href="lightbox.html" coords="2861,1128,3346,1028,3210,356,2730,452" shape="poly">

		    <area target="" alt="Ridder IQ" title="Ridder IQ" href="lightbox.html" coords="3306,1294,3797,1298,3800,600,3311,600,3311,831,3341,1019,3311,1036" shape="poly">

		    <area target="" alt="Dynamic Keyboard" title="Dynamic Keyboard" href="lightbox.html" coords="3839,1154,4315,1228,4415,548,3935,478" shape="poly">

		    <area target="" alt="Modulaire SmartBike" title="Modulaire SmartBike" href="lightbox.html" coords="4389,1058,4878,1062,4874,369,4389,369,4389,534,4420,539,4393,744" shape="poly">

				</map>

		<p>Deze afbeelding is 2160p hoog.</p>

	--Om de coords van de afbeelding te vinden/aan te passen kun je de site https://www.image-map.net/ gebruiken die voor jou dan een code genereert


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script src="jquery.rwdImageMaps.min.js"></script>

	<script>

	$(document).ready(function(e) {

		$('img[usemap]').rwdImageMaps();



		$('area').on('click', function() {

			alert($(this).attr('alt') + ' clicked');

		});

	});

	</script>

	</body>

</html>

