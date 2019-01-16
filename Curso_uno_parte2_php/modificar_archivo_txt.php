<?php 
include_once('datos_funciones_php.php');
$contenido= file_get_contents('archivo.txt');
 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Modificar archivo txt</title>
 	<link rel="stylesheet" type="text/css" href="../css/Style.css">
 </head>
 <body>
 	<a href="modificar_archivo_txt.php">Modificar archivo</a>
	<a href="formulario.php">Formulario</a>
	<a href="index.php">Inicio</a><br>
<p>Hola, <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : "Invitado"; ?> </p>
<h3>Manejo de Archivos</h3>
<p>Modificar archivo desde la interfas web</p>
<section>
	<h5>archivo.txt</h5>
	<form action="modificar_archivo.php" method="post">
		<div>
			<textarea name="contenedor"><?php echo $contenido; ?></textarea>
		</div>
		<button type="submit">Modificar</button>
	</form>
</section>

 </body>
 </html>