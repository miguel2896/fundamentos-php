<?php 
$nuevo_contenido= isset($_POST['contenedor']) ? $_POST['contenedor'] : '';//modificando contenido preguntando
file_put_contents('archivo.txt', $nuevo_contenido); //el archivo.txt con el nuevo contenido
$contenido= file_get_contents('archivo.txt'); //retornar el contenido del archivo 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Modificar archivo txt</title>
 	<link rel="stylesheet" type="text/css" href="../css/Style.css">
 </head>
 <body>
 
<h3>Manejo de Archivos</h3>
<p>Modificar archivo desde la interfas web</p>
<section>
	<h5>archivo modificado</h5>
		<div>
		<pre><?php echo $contenido; ?></pre>
		</div>
		<a href="./modificar_archivo_txt.php"></a>
	
</section>

 </body>
 </html>