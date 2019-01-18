<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Usuario extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('ejemplo');
		$this->load->helper('form');
		$this->load->model('nuevousuario_model');
	}

	function index (){
         $dato['string']='Miguel Angel'; //en el arreglo ['string'] se convierte en una variable independiente
		$this->load->view('bienvenido_usuario',$dato);
		$this->load->view('prueba/pruebauno');
	}

	
	
}
 ?>