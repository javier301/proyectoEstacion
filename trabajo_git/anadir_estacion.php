<?php 	
	$insertar = 1;
	$id = $_GET["id"];
	echo $id;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Añadir Estación</title>
		<meta charset="UTF-8">	
	</head>
	<body>
		<h1 align="center">Introduce los datos de una nueva Estación</h1><br><br><br><br><br>
		<form action="index.php" method="get">
			<p align = "center">Nombre de usuario: <input size="15" name="nom_usu" value="nom_usu"><br><br><br>
			Correo: <input size="15" name="correo_n" value="correo_n"><br><br><br><br>
			Cooredenadas de la estación meteorologica: <br><br>
			Latitud: <input size="15" name="latutid_n" value="latutid_n"><br><br><br>
			Longitud: <input size="15" name="longitud_n" value="longitud_n"><br><br><br><br>
			Nota: Asegurese de tener los siguientes sensores: <br><br>
			<input type=checkbox value=si name=temperatura> Temperatura<br>
			<input type=checkbox value=si name=presion> Presión<br>
			<input type=checkbox value=si name=humedad> Humedad<br><br><br><br>
			
			<input size="0" value=<?php echo $insertar?> name="insertar">
			<input size="0" value=<?php echo $id?> name="id">
			<input size="0" value="0" name=d_h>
			<input type="submit" value="Enviar"></p>
		</form>
	</body>
</html>
