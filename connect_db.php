<?php
	function conexion(){
		$servidor="localhost";
		$usuario="japaricio15";
		$password="isc2349";
		$bd="japaricio15";
		$mysqli=mysqli_connect($servidor,$usuario,$password,$bd);
		return $mysqli;
	}
?>
