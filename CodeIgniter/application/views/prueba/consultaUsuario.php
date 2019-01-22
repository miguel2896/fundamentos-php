<form action="borrar" method="POST">
   <h4>Eliminar por id</h4>
   <label>ID</label>
   <input type="texto" name="id">
    
   <br><br>
   <input type="submit" name="" value="Enviar">

</form>
<br>
<h4>Consultar para editar por id</h4>
<form action="editar" method="POST">
   
   <label>ID</label>
   <input type="texto" name="id">


   <br><br>
   <input type="submit" name="" value="Enviar">

</form>

</body>
</html>
<?php 
if(isset($usuario)){
foreach ($usuario->result() as $user) { ?>
	<ul>
		<li><a href="<?php echo $user->id; ?>"><?php echo $user->id; ?></a></li>
		<li><?php echo $user->nombre; ?></li>
		<li><?php echo $user->password; ?></li>
	</ul>
<?php  }
}else{
	echo "<p>Error en la aplicación</p>";
}
 ?>
