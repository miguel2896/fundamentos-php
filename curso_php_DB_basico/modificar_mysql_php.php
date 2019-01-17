<?php 
require_once('Conexion_credenciales.php');
require_once('Conexion_consulta_mysql.php');

$id=isset($_GET['id']) ? $_GET['id'] : 0;

if ($_POST) { //¿si hay metodo post para enviar datos
	header('Location: index.php');//para dejar en la pagina principa

	$nombre=isset($_POST['nombre']) ? $_POST['nombre'] : '';
	$password=isset($_POST['password']) ? $_POST['password'] : '';	

	actualizar($id, $nombre, $password);
	die();//finaliza la funcion
}

$usuario=obtener_usuario_por_id($id);
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
		   <label >Usuario</label>
	    </div>
	    <div class="largo">
	       <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>">
	    </div>
	</div>

	<div class="formulario">
		<div class="largo">
		   <label class="">Password</label>
	    </div>
	    <div class="largo">
	       <input type="text" name="password" value="<?php echo $usuario['password']; ?>" >
	    </div>
	</div>
	<br>
	<button  type="submit">Enviar</button>
</form>
 </body>
 </html>