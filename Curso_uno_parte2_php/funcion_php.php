<?php 
function debug($value){ //depurar
    echo '<pre>';
	var_dump($value);
     echo '</pre>';
}

//debug($_POST);

//$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
//$edad = isset($_POST['edad']) ? $_POST['edad'] : '';
//$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
//$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$idioma = isset($_GET['idioma']) ? $_GET['idioma'] : 0;

//echo "Hola {$nombre}, tu edad es {$edad}, tu direccion es: {$direccion}, 
//tu telefono es: {$telefono}, idioma: {$idioma}";


 switch ($idioma) {
 	case '0':
 		# code...
 	echo 'Buen día';
 		break;

 	case '1':
 		# code...
 	echo 'Bon jour';
 		break;

 	case '2':
 		# code...
    echo 'Good day';    
 		break;
 	
 }

?>