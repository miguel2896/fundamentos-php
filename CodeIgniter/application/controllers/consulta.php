<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Consulta extends CI_Controller  //Clase del controlador que simpre ereda de la clase CI_controller
{
function __construct()
	{
		parent::__construct();//constructor del padre
		$this->load->helper('form');//inicializar el helper form donde estan todas las funciones
		$this->load->model('nuevousuario_model');//inicializar el modelo donde para las funciones de consulta
		$this->load->helper('url'); //este he

	}
	function index(){//hay que utilizar en la url el 'index' despues del controlador 'consulta' para que funcione
		$data['segmento']=$this->uri->segment(3);//retorna el segmento de la url segun el inice indicado
		$this->load->view('prueba/header');
		if(!$data['segmento']){//si es diferente el dato en la url va a mandar todos los datos
		$data['usuario'] = $this->nuevousuario_model->obtenerUsuarios();
		}else{//de lo contrario solo obtiene los datos de uno solo respecto al id
			$data['usuario'] = $this->nuevousuario_model->obtenerUsuario($data['segmento']);//el dato ingresado en la url va a retornar la información de la BD respecto al ID
		}
		$this->load->view('prueba/consultaUsuario',$data);
	}

function nuevo(){
	$this->load->view('prueba/header');
		$this->load->view('prueba/pruebauno');
}

	function recibirdatos(){

        $datos= array(//arreglo para almacenar los datos que manda del formulario
              'id'=>$this->input->post('id'),
              'nombre'=>$this->input->post('nombre'),
              'password'=>$this->input->post('password')
        );
        $this->nuevousuario_model->nuevoUsuario($datos);//ejecuntando la funcion de insertar que esta en el model
        redirect('/consulta/','refresh');
	}

	function editar(){
		$data['id'] = $this->input->post('id');
		//$data['id'] = $this->uri->segment(3);
		$data['usuario']=$this->nuevousuario_model->obtenerUsuario($data['id']);
		$this->load->view('prueba/header');
		//$this->load->view('prueba/consultaUsuario',$data);
		$this->load->view('prueba/modificarUsuario',$data);
	}

	function actualizar(){
		$datos = array(      //arreglo para almacenar los datos que manda del formulario
              'nombre'=>$this->input->post('nombre'),
              'password'=>$this->input->post('password')
        );
       $this->nuevousuario_model->actualizarUsuario($this->input->post('id'),$datos);
       //$this->nuevousuario_model->actualizarUsuario($this->uri->segment(3),$datos);
       redirect('/consulta/','refresh');
	}

	function borrar(){
        
        $id= $this->input->post('id');
        // $id = $this->uri->segment(3);
		$this->nuevousuario_model->eliminarUsuario($id);
		 redirect('/consulta/','refresh');
	}

	function pruebasConsulta(){
		$num=4;
		$users['user']=$this->nuevousuario_model->obtenerUsuario(4);
		var_dump($users);
		
	}
}

?>