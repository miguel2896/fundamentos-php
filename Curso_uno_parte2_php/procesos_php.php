<?php 
include_once('datos_funciones_php.php');

//debug($_GET);
//debug($_POST);
//debug($_REQUEST);

$nombre= isset($_POST['nombre']) ? $_POST['nombre'] : '';  //asignando el valor con el metodo post
$idioma= isset($_POST['idioma']) ? $_POST['idioma'] : '';
$urgente= isset($_POST['urgente']) ? $_POST['urgente'] : '';
$noticia= isset($_POST['noticia']) ? $_POST['noticia'] : '';

echo "Hola {$nombre}, en {$idiomas[$idioma]}.<br/>";
$es_urgente = $urgente == 1 ? 'Es' : 'No es';
echo "Su pedido {$es_urgente} urgente.<br/>";
echo "Gustaria resivir noticias de:<br/>";

if(count($noticia))
{
   foreach ($noticia as $noticia_nueva) {
        echo $noticia_nueva . "<br/>";
   }
}
 ?>


