<?php echo form_open("/consulta/recibirdatos") //nombre del controlador y la funcion ?>
<?php
$id = array(//arreglo donde se especifican los parametros del input='Caja de texto'
   'name'=>'id',
   'placeholder' =>'Ingresa el ID'
);
$nombre = array(//arreglo donde se especifican los parametros del input='Caja de texto'
   'name'=>'nombre',
   'placeholder' =>'Ingresa tu usuario'
);
$password = array(
   'name'=>'password',
   'placeholder' =>'Ingresa tu password'
);
?> 

	<?php echo form_label('Id','id') //la etiqueta para el label con funcion de codeigniter?>
	<?php echo form_input($id) //la etiqueta para el input con funcion de codeigniter?>
<br><br>
<?php echo form_label('Nombre','nombre') ?>
	<?php echo form_input($nombre) ?>
<br><br>
<?php echo form_label('Password','password') ?>
	<?php echo form_input($password) ?>
<br><br>
 
 <?php echo form_submit('','Enviar') ?>
 <?php echo form_close() ?>
</body>
</html>