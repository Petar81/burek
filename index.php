<?php

?>
	<!DOCTYPE html>
	<html lang="sr">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" href="images/burek.gif" type="image/gif" sizes="16x16">
		<!-- HERE JavaScript Libs & Style Sheets-->
		<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
		<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
		<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
		<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
		<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
		<!-- HERE JavaScript Libs & Style Sheets end-->
		<title>Баци га по бурек! | Достава бурека | Београд | Србија</title>
		<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css"> </head>

	<body>
		<header>
			<h1 id="mainH1">Баци га по' бурек</h1>
			<h2 id="subHeader"> - Достава Бурека !</h2>
			<nav> <a href="">ENG</a> </nav>
		</header>
		<main>
			<!--In the div HERE Map will be rendered-->
			<article id="mapContainer" aria-label="Interactive map"> </article>
			<!-- GEOLOCATION TEXT ERROR -->
			<article>
				<h3 id="status">LLL</h3> </article>
		</main>
		<footer>
			<p>
				<?php echo '&copy; ' . date("Y");  ?>
			</p>
		</footer>
		<script src="js/map.js"></script>
	</body>

	</html>