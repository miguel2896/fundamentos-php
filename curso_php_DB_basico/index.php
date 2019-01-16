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
	 </tr>
	<?php 
     }
      ?>
</tbody>
</table>
 </section></div>
 </body>
 </html>