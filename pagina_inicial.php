<?php 
$nombre='Miguel Ortiz';
$edad=22;
$tiene_hijos=false;
define('_CIUDAD', 'CDMX');//constante el valor no cambia
$cobro_x_hora=59.59;
$partner= new stdClass();
$partner->name='Angel Mota';
$partner->edad=25;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
	<div class="large-6 columns">
		<div class="panel">
			<h4>Datos del Usuario</h4>
			<div class="row">
				<div class="large-4 columns">
					<b>Nombre</b>
				</div>
				<div class="large-4 columns">
					<?php echo $nombre; ?>
				</div>
				<div class="large-4 columns">
					&nbsp;
				</div>
			</div>

			<div class="row">
				<div class="large-4 columns">
					<b>Edad</b>
				</div>
				<div class="large-4 columns">
					<?php echo $edad; ?>
				</div>
				<div class="large-4 columns">
					&nbsp;
				</div>
			</div>

			<div class="row">
				<div class="large-4 columns">
					<b>¿Tiene hijos?</b>
				</div>
				<div class="large-4 columns">
					<?php echo $tiene_hijos ? 'Si' : 'No' ; ?>
				</div>
				<div class="large-4 columns">
					&nbsp;
				</div>
			</div>

             <div class="row">
				<div class="large-4 columns">
					<b>Costo por hora</b>
				</div>
				<div class="large-4 columns">
					$<?php echo $cobro_x_hora; ?>USD
				</div>
				<div class="large-4 columns">
					&nbsp;
				</div>
			</div>

              <div class="row">
				<div class="large-4 columns">
					<b>Ciudad</b>
				</div>
				<div class="large-4 columns">
					<?php echo _CIUDAD; ?>
				</div>
				<div class="large-4 columns">
					&nbsp;
				</div>
			</div>

			<div class="row">
				<div class="large-4 columns">
					<b>Socio</b>
				</div>
				<div class="large-4 columns">
					<?php echo $partner->name; ?>
				</div>
				<div class="large-4 columns">
					&nbsp;
				</div>
			</div>

			<div class="row">
				<div class="large-4 columns">
					<b>Edad del socio</b>
				</div>
				<div class="large-4 columns">
					<?php echo $partner->edad; ?>
				</div>
				<div class="large-4 columns">
					&nbsp;
				</div>
			</div>

		</div>
	</div>

</div>
</body>
</html>