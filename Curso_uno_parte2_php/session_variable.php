<?php //varaibles de sesion
include_once('datos_funciones_php.php');
$name= isset($_GET['nuevo_valor']) ? $_GET['nuevo_valor'] : '';  
$_SESSION['name']=$name;//asignar un valor a la variable de valor
header('Location: index.php');

 ?>