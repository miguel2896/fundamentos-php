<?php 
require_once('Conexion_credenciales.php');
require_once('Conexion_consulta_mysql.php');

if ($_POST) { //si hay metodo post para enviar datos
	header('Location: index.php');

$id=isset($_POST['id']) ? $_POST['id'] : 0;//pregunta si esta el dato si SI lo inserta si no asigna otro valor
	$nombre=isset($_POST['nombre']) ? $_POST['nombre'] : '';
	$password=isset($_POST['password']) ? $_POST['password'] : '';

	nuevo($id, $nombre, $password);//funcion para insertar datos a la BD
	die();//finaliza la funcion
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Insertar en BD con php</title>
 </head>
 <body>
 <form action="" method="POST" >
	
	<div class="formulario">
		<div class="largo">
		   <label >Id</label>
	    </div>
	    <div class="largo">
	       <input type="text" name="id">
	    </div>
	</div>
	
	<div class="formulario">
		<div class="largo">
		   <label >Usuario</label>
	    </div>
	    <div class="largo">
	       <input type="text" name="nombre">
	    </div>
	</div>

	<div class="formulario">
		<div class="largo">
		   <label class="">Password</label>
	    </div>
	    <div class="largo">
	       <input type="text" name="password">
	    </div>
	</div>
	<br>
	<button  type="submit">Enviar</button>
</form>
 </body>
 </html>