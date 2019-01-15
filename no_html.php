<?php
//$nombre= "Miguel";
//echo $nombre; echo '<br>'; //imprime la variable
//echo strlen($nombre);//devuelve la longitud de la cadena


$var= array(
 "primero"=>16,
 "segundo"=>23,
 "ultimo"=>124,
 125,
 231,
 253,
 12334,
 "fsf",
 "dsdf",
);
for ($i=0; $i < count($var) ; $i++) { 
	echo "<p>".$var[$i]."</p>"; //
}
// var_dump( $var);

$var2= array(
 16,
 124,
 1234,
 565,
 678,
);
// var_dump($var2);
for ($i=0; $i < count($var2); $i++) { // count contar el tamaño del arreglo
	//var_dump( "<p>".$var2[$i]."</p>");
}


 foreach ($var2 as $clave => $valor) {
	//echo "<p>".$clave."</p>";
	//print_r($valor);
}
?>