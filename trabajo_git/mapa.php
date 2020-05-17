<!DOCTYPE html>
<html>
	<head>
		<title>introduccion</title>
		<meta charset="UTF-8">
		<script src="http://maps.google.com/maps?file=api&v=2&key=COLOCAR_AQUI_NUESTRA_KEY" 
		type="text/javascript"></script>
		<script type="text/javascript">
			function iniciar() {
				var mapOptions = {
					center: new google.maps.LatLng(40.416728, -3.703801),
					zoom: 10,
					mapTypeId: google.maps.MapTypeId.HYBRID};
			var map = new google.maps.Map(document.getElementById("map"),mapOptions);}		
		</script>
	</head>
	<body>		
		<?php echo $_GET["latitud"]?>
		<?php echo $_GET["longitud"]?>
		<div id="map" style="width:500px;height:250px;"></div>
		<script src="http://maps.google.com/maps/api/js?sensor=false&callback=iniciar"></script>
		
	</body>
</html>




<?php/*enlaces
	https://developers.google.com/maps/documentation/javascript/examples/event-simple?hl=es
	* http://www.rubenalcaraz.es/pinakes/informatica/introduccion-a-google-maps-apiv3-parte-5-multiples-marcadores-con-infowindow/#codesyntax_4
	* http://w3.unpocodetodo.info/utiles/mapa-con-chincheta.php*/?>
	
	
