<?php 
require_once('Conexion_credenciales.php');

$mysqli= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

$resultado='';

if ($mysqli->connect_errno) {
	echo 'Error de conexion';
	exit;
}

function run_query(){
	global $mysqli, $resultado;
	$sql='SELECT * FROM prueba';
	
}
 ?>}
