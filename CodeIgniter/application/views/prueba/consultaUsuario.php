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


</body>
</html>