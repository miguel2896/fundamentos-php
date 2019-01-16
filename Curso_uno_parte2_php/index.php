<?php 
include_once('datos_funciones_php.php');
//$_SESSION['name']="Miguel"; //arreglo asociativo
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
<link rel="stylesheet" type="text/css" href="../css/Style.css">
</head>
<body>
	<p>Hola, <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : "Invitado"; ?> </p>
	<a href="modificar_archivo_txt.php">Modificar archivo</a>
	<a href="formulario.php">Formulario</a>
<h3>Manejo de Archivos</h3>
<p>Modificar archivo desde la interfas web</p>
	<a href="session_variable.php?nuevo_valor=Miguel">Asignar 1</a>
	<a href="session_variable.php?nuevo_valor=Angel">Asignar 2</a>

<footer >  Angel Ortiz Mota <?php  echo year(); ?></footer>
</body>
</html>