<?php ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta http-equiv="content-type" content="text/html;charset=UTF-8">

		<title>Mobile Resolution</title>

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

		<h1>Mobile Poster</h1>

		<img src="/hd.jpg"  width="2471" height="1080" alt="Mobile Poster" usemap="#imagemap">

			<map name="imagemap">

				<area target="" alt="Snelheid" title="Snelheid" href="lightbox.html" coords="33,665,272,1010" shape="rect">

				<area target="" alt="Academic research autonome driving" title="Academic research autonome driving" href="lightbox.html" coords="302,705,546,1047" shape="rect">

				<area target="" alt="Accurancy freq. and phase measurements" title="Accurancy freq. and phase measurements" href="lightbox.html" coords="577,598,818,943" shape="rect">

				<area target="" alt="Electronic methods " title="Electronic methods " href="lightbox.html" coords="569,223,816,560" shape="rect">

				<area target="" alt="Eurofins" title="Eurofins" href="lightbox.html" coords="842,223,1086,560" shape="rect">

				<area target="" alt="Biosensor" title="Biosensor" href="lightbox.html" coords="1110,145,1357,485" shape="rect">

				<area target="" alt="Landingsbeacon " title="Landingsbeacon " href="lightbox.html" coords="1382,653,1625,996" shape="rect">

				<area target="" alt="Smart Suit" title="Smart Suit" href="lightbox.html" coords="1924,704,2168,1046" shape="rect">

				<area target="" alt="Fruitsector" title="Fruitsector" href="lightbox.html" coords="2192,629,2437,974" shape="rect">

				<area target="" alt="Energie Efficient" title="Energie Efficient" href="lightbox.html" coords="1655,32,1653,280,1963,276,1970,237,2000,246,2000,32" shape="poly">

				<area target="" alt="Data App" title="Data App" href="lightbox.html" coords="31,153,274,153,274,280,252,282,276,444,278,498,31,498" shape="poly">

				<area target="" alt="Textielsensor" title="Textielsensor" href="lightbox.html" coords="304,625,544,586,498,248,256,283" shape="poly">

				<area target="" alt="Improving the Quality" title="Improving the Quality" href="lightbox.html" coords="926,1050,1160,983,1066,651,830,719" shape="poly">

				<area target="" alt="Electronic Toll" title="Electronic Toll" href="lightbox.html" coords="1149,933,1356,933,1356,588,1114,588,1110,804" shape="poly">

				<area target="" alt="Draagbare ethernet" title="Draagbare ethernet" href="lightbox.html" coords="1679,1061,1915,1002,1839,669,1627,712,1627,839" shape="poly">

				<area target="" alt="Difference Image Proc." title="Difference Image Proc." href="lightbox.html" coords="1433,564,1673,513,1603,177,1365,225" shape="poly">

				<area target="" alt="Ridder IQ" title="Ridder IQ" href="lightbox.html" coords="1653,647,1898,647,1898,304,1655,304,1655,424,1675,513,1655,522" shape="poly">

				<area target="" alt="Dynamic Keyboard" title="Dynamic Keyboard" href="lightbox.html" coords="1917,579,2157,614,2205,273,1967,239" shape="poly">

				<area target="" alt="Modulaire SmartBike" title="Modulaire SmartBike" href="lightbox.html" coords="2194,528,2439,530,2437,187,2194,186,2197,267,2208,273,2197,367" shape="poly">

			</map>

		<p>Deze afbeelding is 1080p hoog.</p>



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

