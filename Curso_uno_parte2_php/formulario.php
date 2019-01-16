<?php include_once('datos_funciones_php.php'); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<a href="modificar_archivo_txt.php">Modificar archivo</a>
	<a href="formulario.php">Formulario</a>
	<a href="index.php">Inicio</a><br>
	<p>Hola, <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : "Invitado"; ?> </p>
<h3>Manejo de sesiones</h3>
<p>Modificar archivo desde la interfas web</p>
<form action="procesos_php.php" method="post" >
	
	<div class="formulario">
		<div class="largo">
		   <label >Nombre</label>
	    </div>
	    <div class="largo">
	       <input type="text" name="nombre">
	    </div>
	</div>

	<div class="formulario">
		<div class="largo">
		   <label class="">Idioma</label>
	    </div>
	    <div class="largo">
	      <select name="idioma">
	      	<?php  
	      	$i = 0;
	      	while ($i < count($idiomas) ) {
	      		?>
	      	<option name="" value="<?php echo $i; ?>"> <?php echo $idiomas[$i]; ?> </option>
	      	<?php
           $i++;
	      }?>
	  </select>
	    </div>
	</div>

	<div class="formulario">
		<div class="largo">
		   <label >Urgente</label>
	    </div>
	    <div class="largo">
	       <input type="radio" value="1" name="urgente"><label >Si</label>
	       <input type="radio" value="0" name="urgente"><label >No</label>
	    </div>
	</div>

	<div class="formulario">
		<div class="largo">
		   <label >Noticias</label>
	    </div>
	    <div class="largo">
	       <input type="checkbox" value="periodico" name="noticia[]"><label >Periodico</label>
	       <input type="checkbox" value="blog" name="noticia[]"><label >Blog</label>
	    </div>
	</div>
     <br>
	<button  type="submit">Enviar</button>
</form>

<footer > <?php debug($_SESSION); ?> Angel Ortiz Mota <?php  echo year(); ?></footer>


</body>
</html>