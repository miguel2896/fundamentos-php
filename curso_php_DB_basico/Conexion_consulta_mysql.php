<?php 
require_once('Conexion_credenciales.php');

$mysqli= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);//conexion a la base de datos

$resultado='';

if ($mysqli->connect_errno) {
	echo 'Error de conexion';
	exit;
}

function run_query(){
	global $mysqli, $resultado; //variables globales
	$sql='SELECT * FROM usuario'; //Consulta a la BD
	return $mysqli->query($sql); //Retorna los datos de la consulta

}

function delete($id){
global $mysqli;
$sql="DELETE from usuario where id = {$id}";
$mysqli->query($sql);
}
 ?>
}
