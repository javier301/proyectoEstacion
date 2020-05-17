<?php 	
	include_once './clases.php';
	include_once './conexion_consultas.php';
	include './imagen.php';
	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Principal</title>
		<meta charset="UTF-8">
		
	</head>
	
	
	<body>
		
		 <img src="<?= "/trabajo_final/imagenes/".$imagen.".jpg"?>" width=100% height="200">
		
		
		
		
		
		
		
		<table height="70" width=100%>
			<tr>
			<?php if($inicio4 == 0){ ?>
				<form action="index.php?id=<?php echo $inicio3?>&d_h=1" method="post">
					<td width=33.33% align="center"><input type="submit" value="Registro Diario"></td>
					<td width=33.33% align="center">Te muestra el regitro por horas</td>
				</form>
			<?php }else{ ?>
				<form action="index.php?id=<?php echo $inicio3?>&d_h=0" method="post">
					<td width=33.33% align="center"><input type="submit" value="Registro Horario"></td>
					<td width=33.33% align="center">Te muestra el registro por dias</td>
				</form>
			<?php }; ?>
			<form action="anadir_estacion.php?id=<?php echo $inicio3?>" method="post">
				<td width=33.33% align="center"><input type="submit" value="Nueva Estación"></td>
			</form>
			</tr>
		</table>
		
		
		
		
		
		
		
		<?php include './mapa1.js'; ?>
		<div id="map" style="width:100%;height:400px;"></div>
		<script src="http://maps.google.com/maps/api/js?sensor=false&callback=iniciar"></script>

		
		
		
		
		
		
		<?php if($inicio4 == 0){ ?>
			<table height="80" width=100%>
				<tr>
					<td width=33.33% align="center">Ultima temperatura: <?php echo $final_temperatura;?></td>
					<td width=33.33% align="center">Ultima Presion: <?php echo $final_presion;?></td>
					<td width=33.33% align="center">Ultima humedad: <?php echo $final_humedad;?></td>
				</tr>
			</table>
		<?php }else{ ?>
			<table height="80" width=100%>
				<tr>
					<td width=33.33% align="center">Temperatura media del dia anterior anterior: <?php echo $final_temperatura;?></td>
					<td width=33.33% align="center">Presion media del dia anterioranterior: <?php echo $final_presion;?></td>
					<td width=33.33% align="center">humedad media del dia anterior anterior: <?php echo $final_humedad;?></td>
				</tr>
			</table>
			<table height="80" width=100%>
				<tr>
					<td width=50% align="center">Temperatura maxima del dia anteriror: <?php echo $ultimo_maximo;?></td>
					<td width=50% align="center">Temperatura minima del dia anterior: <?php echo $ultimo_minimo;?></td>
				</tr>
			</table>
		<?php }?>
		
		
		
		
		
		
		<?php if($inicio4 == 0){ ?>
			<img src="grafico.php?id2=<?php echo $inicio3?>" alt="" border=100% align="center">
		<?php }else{ ?>
			<img src="grafico_D.php?id2=<?php echo $inicio3?>" alt="" border=100% align="center">
		<?php }?>
		
	</body>
</html>
