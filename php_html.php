<?php 
$today= date('d/m/Y'); //variable de fecha actual
$name= "Miguel";
$apellido="Ortiz";
$url= "http://www.duga.com/"
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>CURSO PHP</title>
</head>
<body>

<h2><?php echo $today; //imprimir la fecha?></h2> 
<a href="<?php echo $url; ?>"> Alguna Acción</a>

<footer>
	
  <p>&copy; Copyright <?php echo $name." ".$apellido; ?></p>

</footer>
</body>
</html>