<?php

function disponible($es_avilidata){ //funcion para el tipo de dato booleano la respuesta SI o NO
if( $es_avilidata ){
	echo "Si";
}else{
	echo "No";
}
}

function year(){ //retornar el año 
	return date('d/m/Y');
}

$datos=[];

$datos['nombre']='Miguel';
$datos['edad']=22;
$datos['ciudad']='CDMX';

$datos_generales[]=[
     'nombre'=>'Angel',
     'edad'=>24,
     'direccion'=>'Abasolo Tezontepec',
     'telefono'=> 7756764455,
     'disponible'=> true,
];

$datos_generales[]=[
     'nombre'=>'Jhosimar',
     'edad'=>45,
     'direccion'=>'noce mixquia',
     'telefono'=> 7726764557,
     'disponible'=> false,
];

$datos_generales[]=[
     'nombre'=>'Miguel',
     'edad'=>33,
     'direccion'=>'ponce de leon s/n',
     'telefono'=> 2245345630,
     'disponible'=> true,
];

?>