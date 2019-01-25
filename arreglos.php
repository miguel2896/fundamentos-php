<?php 

// $array = array(1, 2, 3, 4);
// foreach ($array as &$valor) {
//     $valor = $valor * 2;
//      //var_dump($array);
//      // unset($valor);
// } 

$array = array(
	"uno"=>"Miguel", 
	"dos"=>"Angel", 
	"tres"=>"Ortiz"
);
while (list(, $valor) = each($array)) {
    //echo "Valor: $valor<br />\n";
    //var_dump($valor);
}

foreach ($array as $nom) {
	
	var_dump($nom);
}



	 ?>

	 <div id="container">
	<?php 
$a = array("uno", 2, 3, "nueve");

foreach ($a as $v) {
    echo "Valor actual de \$a: $v.\n";
  var_dump($v);
}

	 ?>
</div>
<div id="container">
	<?php 
$nombre = "Miguel"; 
$array = array(1, 2, 3, "casa", $nombre);
 
//saco el numero de elementos
$longitud = count($array);
 
//Recorro todos los elementos
for($i=0; $i<$longitud; $i++)
      {
      //saco el valor de cada elemento
	  echo $array[$i];
	  echo "<br>";
      }
	 ?>
</div>
<div id="container">
	<?php 
$nombre = "cinco"; 
$array = array(1, 2, 3, "cuatro", $nombre,6,7,8,9,10);
 
//saco el numero de elementos
$longitud = count($array);
 var_dump($array[4]);
//Recorro todos los elementos
for($i=0; $i<$longitud; $i++)
      {
      //saco el valor de cada elemento
	  echo $array[$i];
	  echo "<br>";
      }
	 ?>
</div>
<div id="container">
	<h4>arreglo tridimencional</h4>
	<?php //arreglo tridimencional
$datos = array(
              array(array(1, 2, 3),
                    array(4, 5, 6),
                    array(7, 8, 9) 
                    ),
              array(array(10, 11, 12),
                    array(13, 14, 15),
                    array(16, 17, 18) 
                    ),
              array(array(19, 20, 21),
                    array(22, 23, 24),
                    array(25, 26, 27) 
                    ),
              array(array(28, 29, 30),
                    array(31, 32, 34),
                    array(35, 36, 37),
                    array(38,39,40,41,42,43) 
                    )
              );

var_dump($datos[3][3][5]);

 //multiplo de 2 que son los numeros pares
     	//var_dump(count($datos[0][0]));

	foreach ($datos[0] as $dato) {
		var_dump($dato);
		//echo $dato[1];
			if ($dato%2==0) {
				var_dump( $dato);

		}else{
      
	}
	}




	 ?>
</div>

<div id="container">
	<h4>Arreglo bidimencional</h4>
	<?php  //arreglo bidimencional
$equipo_futbol = array
 					(
 					array("Rooney","Chicharito","Gigs"),
 					array("Suarez"),
 					array("Torres","Terry","Etoo")
 					);
 					var_dump($equipo_futbol[2][2]);
                    
 					//var_dump(count($equipo_futbol));


	 ?>
</div>
<div id="container">
<?php
	$numeros = array('5','1','3','4','2','10');
	sort($numeros);// - Ordenar matrices en orden ascendente

	$longitud = count($numeros);
		for($x = 0; $x < $longitud; $x++) {
    		echo $numeros[$x];
    		echo "<br>";
		}
// echo rsort(); //- Ordenar matrices en orden descendente
// echo asort(); //- ordena matrices asociativas en orden ascendente, de acuerdo con el valor
// echo ksort(); //- ordenar matrices asociativas en orden ascendente, de acuerdo con la clave
// echo arsort();// - ordenar matrices asociativas en orden descendente, de acuerdo con el valor
// echo krsort(); //- ordenar matrices asociativas en orden descendente, de acuerdo con la clave
	$numero_de_pares=0;
		foreach($numeros as $num){
		    if(($num % 2)==0)     $numero_de_pares++;
		}
			echo 'Numero de pares: '.$numero_de_pares;

			//var_dump(count($numeros));
?>

</div>

<div id="container">
<?php
	
	for ($i=1; $i <= 10; $i++) { //incrementando de uno en uno asta 10
		if ($i%2==0) {  //si entre los numeros del 1 al 10 hay multiplo de 2 que son los numeros pares
			//echo "Numero par: ";
			//var_dump($i);
		}else{
			echo "Numero inpar: ";
      	 	var_dump($i);
			}
	}
$arreglo=array(1,2,3,4,5,6,7,8,9,10);
	foreach ($arreglo as $key ) {
		if ($key%2==0) {
			echo "Número par: ";
			var_dump($key);
		}
	}


?>

</div>