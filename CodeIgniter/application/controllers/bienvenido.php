<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Bienvenido extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('ejemplo');
	}


	function index(){
    $this->load->library('menu',array('Inicio','Contacto','Cursos'));
    $datos['mi_menu'] = $this->menu->construirMenu();
    $this->load->view('prueba/header');//utilizando multiples vistas colocondo en varias de ellas diferente codigo y hacer uno solo.
	$this->load->view('prueba/pruebauno',$datos); //En el navegador de ejecuta el controlador "Bienvenido"

	}


    function holaMundo(){
	$this->load->view('prueba/pruebauno'); //En el navegador de ejecuta el controlador "Bienvenido"
	}

}
 ?>