<?php include_once('datos_funciones_php.php'); 

$idioma[] = 'Español';
$idioma[] = 'Frances';
$idioma[] = 'Ingles';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

<form action="funcion_php.php" method="GET" >	

	<div class="formulario">
		<div class="largo">
		   <label class="">Idioma</label>
	    </div>
	    <div class="largo ">
	      <select name="idioma">
	      	<?php  
	      	$i = 0;
	      	while ($i < count($idioma) ) {
	      		?>
	      	<option name="" value="<?php echo $i; ?>"> <?php echo $idioma[$i]; ?> </option>
	      	<?php
           $i++;
	      }?>
	  </select>
	    </div>
	</div>
     <br>
	<button  type="submit">Enviar</button>
</form>

<footer > Miguel Angel Ortiz Mota <?php  echo year(); ?></footer>


</body>
</html>