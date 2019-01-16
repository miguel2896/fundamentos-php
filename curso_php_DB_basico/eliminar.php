<?php 
require_once('Conexion_credenciales.php');
require_once('Conexion_consulta_mysql.php');

header('location: index.php');
$id=isset($_GET['id']) ? $_GET['id'] : 0;

delete($id);
 ?>