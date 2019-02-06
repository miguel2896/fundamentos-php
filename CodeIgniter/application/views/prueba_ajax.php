<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6" id="option">
					<h1>Izquierda</h1>
					<select class="selectpicker" id="select_productos">
					  <option value="1">Mostaza</option>
					  <option value="2">Catsup</option>
					  <option value="3">Barbecue</option>
					</select><br><br>

					<div class="input-group input-group-sm mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" >Vendedor</span>
					  </div>
					  <input type="text" class="form-control" id="ven" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div><br><br>

					<div class="radio">
					  <label><input type="radio" value="Activo" name="optradio" checked>Activo</label>
					</div>
					<div class="radio">
					  <label><input type="radio" value="Inactivo" name="optradio">Inactivo</label>
					</div><br><br>

						<label class="checkbox-inline"><input id="checkbox" type="checkbox" value="uno">Option 1</label>
						<label class="checkbox-inline"><input id="checkbox" type="checkbox" value="dos">Option 2</label>
						<br><br>
						
					<button type="button" class="btn btn-primary" id="enviar">Enviar</button><br>
				</div>
				<div class="col-md-6">
					<h1>Derecha</h1>
					<table class="table" id="table_productos">
					  <thead>
					    <tr class="tr">
					      <th scope="col">Pruducto</th>
					      <th scope="col">Precio</th>
					      <th scope="col">Vendedor</th>
					      <th scope="col">Status</th>
					      <th scope="col">Opciones</th>
					      <th scope="col">Eliminar</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					  </tbody>
					</table>
					
				</div>
			</div>
		</div>
		<script>

			$("#enviar").click(function(){//cuando se realize el click se pasaran los datos a la tabla
			
			//$("#select_productos").change(function(event) {//Al seleccionar una opcion se incertan en la tabla
				var precio = $("#select_productos").val();//Obitne el valor de las opciones del select
				var product_name = $("#select_productos option:selected").text();//Obitiene el texto del select
				var vendedor= $("#ven").val();
				var status= $('input:radio[name=optradio]:checked').val();
				var check='';
				$("#option input[type=checkbox]").each(function(){ //El div de Izquierda con un id=option contiene los checkbox
					if (this.checked) {
						check += $(this).val()+', ';
						}
				});
				$('#table_productos').append('<tr>'+
					'<td>'+product_name+'</td>'+
					'<td>'+precio+'</td>'+
					'<td>'+vendedor+'</td>'+
					'<td>'+status+'</td>'+
					'<td>'+check+'</td>'+
					'<td><button type="button" class="btn btn-danger" id="eliminar">Eliminar</button></td></tr>');//inserta los datos del select en la tabla
				
				$('#table_productos').on('click', "#eliminar", function(){//Elimina una fila 
				   //console.log(this); //this en el boton
				    $(this).closest('tr').remove();//Objeto del Boton el cual eliminara el <tr>
				
				// $.ajax({
				// 	url: 'http://localhost/test_sqlite/index.php/Welcome/test',
				// 	type: 'POST',
				// 	// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				// 	data: {param1: "Hola Ajax",param2:valor},
				// 	success: function(respuesta){
				// 		console.log(respuesta);
				// 	}
				// });

				});
			});

		</script>
	</body>
</html>