<?php 
include_once('datos_funciones_php.php');// funciones o datos que se encuntran en otra hoja el include funciona
                                     //  include funciona para traer esos datos o funciones a esta hoja
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Prueba3</title>
</head>
<body>
<div class="row">
<div class="large-12 columns">
<table width="30%"> 
<thead>
	<tr>
		<th>Nombre</th>
		<th>Edad</th>
		<th>Dirección</th>
		<th>Telefono</th>
		<th>Disponible</th>
	</tr>
</thead>
<tbody>
	<?php foreach ($datos_generales as $persona) {  // foreach= por cada uno ?> 
	<tr>
		<td><?php echo $persona['nombre'];  // el primer dato del arreglo?></td> 
		<td><?php echo $persona['edad']; // segunda dato del arreglo?></td>
		<td><?php echo $persona['direccion']; //dato del arreglo ?></td>
		<td><?php echo $persona['telefono']; //dato del arreglo?></td>
		<td><?php  disponible($persona['disponible']); //dato del arreglo tipo de dato booleano?></td>
	</tr>
	<?php } //pasa por cada uno de los datos y devuelve cada uno de ellos en su campo ?>
</tbody>
</table>
</div>
</div>
<br>
<footer > Miguel Angel Ortiz Mota <?php  echo year(); ?></footer>
</body>
</html>

