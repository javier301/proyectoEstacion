<?php

class Estacion{
	var $idEstacion;
	var $latitud;
	var $longitud;
	var $nom_dueno;
	
	function __construct($idEstacion, $latitud, $longitud, $nom_dueno){
		$this->idEstacion = $idEstacion;
		$this->latitud = $latitud;
		$this->longitud = $longitud;
		$this->nom_dueno = $nom_dueno;
	}
}


	
class Registro{
	var $idEstacion2;
	var $idRegistro;
	var $temperatura;
	var $presion;
	var $humedad;
	var $fecha;
	var $num_registro;
	
	function __construct($IdEstacion2, $IdRegistro, $Temperatura, $Presion, $Humedad, $Fecha, $Num_registro){
		$this->idEstacion2 = $IdEstacion2;
		$this->idRegistro = $IdRegistro;
		$this->temperatura = $Temperatura;
		$this->presion = $Presion;
		$this->humedad = $Humedad;
		$this->fecha = $Fecha;
		$this->num_registro = $Num_registro;
	}
}

class Ultimo_registro{
	var $ultimo_idEstacion;
	var $ultimo_idRegistro;
	var $ultimo_temperatura;
	var $ultimo_presion;
	var $ultimo_humedad;
	
	function __construct($ultimo_IdEstacion2, $ultimo_IdRegistro, $ultimo_Temperatura, $ultimo_Presion, 
	$ultimo_Humedad){
		$this->ultimo_idEstacion = $ultimo_IdEstacion2;
		$this->ultimo_idRegistro = $ultimo_IdRegistro;
		$this->ultimo_temperatura = $ultimo_Temperatura;
		$this->ultimo_presion = $ultimo_Presion;
		$this->ultimo_humedad = $ultimo_Humedad;
	}
}


////////////////////////////////////////////////////////////////////////////////////


class Registro_D{
	var $idEstacion2;
	var $idRegistro;
	var $temperatura;
	var $presion;
	var $humedad;
	var $fecha;
	var $num_registro;
	
	function __construct($IdEstacion2, $IdRegistro, $Temperatura, $Presion, $Humedad, $Fecha, $Num_registro){
		$this->idEstacion2 = $IdEstacion2;
		$this->idRegistro = $IdRegistro;
		$this->temperatura = $Temperatura;
		$this->presion = $Presion;
		$this->humedad = $Humedad;
		$this->fecha = $Fecha;
		$this->num_registro = $Num_registro;
	}
}

class Ultimo_registro_D{
	var $ultimo_idEstacion;
	var $ultimo_idRegistro;
	var $ultimo_temperatura;
	var $ultimo_presion;
	var $ultimo_humedad;
	var $max_temperatura;
	var $min_temperatura;
	
	function __construct($ultimo_IdEstacion2, $ultimo_IdRegistro, $ultimo_Temperatura, $ultimo_Presion, 
	$ultimo_Humedad, $max_Temperatura, $min_Temperatura){
		$this->ultimo_idEstacion = $ultimo_IdEstacion2;
		$this->ultimo_idRegistro = $ultimo_IdRegistro;
		$this->ultimo_temperatura = $ultimo_Temperatura;
		$this->ultimo_presion = $ultimo_Presion;
		$this->ultimo_humedad = $ultimo_Humedad;
		$this->max_temperatura = $max_Temperatura;
		$this->min_temperatura = $min_Temperatura;
	}
}

?>
