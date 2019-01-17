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

function delete($id){ // Función para eliminar un dato de la BD
global $mysqli;
$sql="DELETE from usuario where id = {$id}";
$mysqli->query($sql);
}

function nuevo($id, $nombre, $password){ //función para insertar datos a la BD
	global $mysqli; //la variable de conexion se hace global
	$sql="INSERT into usuario (id,nombre,password) values ('{$id}','{$nombre}','{$password}')";
	$mysqli->query($sql);
}

function obtener_usuario_por_id($id){//función para consultar datos de la BD
	global $mysqli;
	$sql="SELECT nombre,password from usuario where id={$id}";
	$resultado=$mysqli->query($sql);
	if ($resultado->num_rows) {
		return $resultado->fetch_assoc();
		return false;
	}
}

function actualizar($id, $nombre, $password){//Función para actulizar datos de la BD
    global $mysqli;
    $sql="UPDATE usuario set nombre='{$nombre}', password='{$password}' where id='{$id}'";	
    $mysqli->query($sql);
}

 ?>

