<?php 
require_once('Conexion_credenciales.php');
require_once('Conexion_consulta_mysql.php');

$resultado = run_query();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Consulta mysql php</title>
 </head>
 <body>
 <h3>Manejo de BD</h3>
 <a href="insertar_mysql_php.php">Nuevo Usuario</a>
 <p>Listado</p>
 <div><section>
 	<table width="30%"> 
<thead>
	<tr>
		<th>ID</th>
		<th>Usuario</th>
		<th>Password</th>
		<th>Acción</th>
	</tr>
</thead>
<tbody>
	<?php while ($user = $resultado->fetch_assoc()) { ?>
	
	 <tr>
	 	<td><?php echo $user['id']; ?></td>
	 	<td><?php echo $user['nombre']; ?></td>
	 	<td><?php echo $user['password']; ?></td>
	 	<td>
	 		<a href="modificar_mysql_php.php?id=<?php echo $user['id']; ?>">Detalles</a>
	 		<a href="eliminar.php?id=<?php echo $user['id']; ?>">Eliminar</a>
	 	</td>
	 </tr>
	<?php 
     }
      ?>
</tbody>
</table>
 </section></div>

 <div>
 	<section>
 		<h3>Manejo de fechas</h3>
 		<ul>
 			<li><?php echo date('m-d-Y'); ?></li>
 			<li><?php echo date('y'); ?></li>
 			<li><?php echo date('t'); ?></li>
 			<li><?php echo date('a'); ?></li>
 			<li><?php echo date('H'); ?></li>
 		</ul>
 	</section>
 </div>
 </body>
 </html>