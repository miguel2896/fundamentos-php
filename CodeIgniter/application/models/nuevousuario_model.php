<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Nuevousuario_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();//inicializamos la base de datos
	}

	function nuevoUsuario($datos){//funcion donde ocupamos la BD para insertar
		$this->db->insert('usuario',array('id'=>$datos['id'],'nombre'=>$datos['nombre'],
			'password'=>$datos['password']));
	}

	function obtenerUsuarios(){
		$query = $this->db->get('usuario');
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}
    function obtenerUsuario($id){
        //$this->db->where('id',$id);//haciendo la condición where para la consulta
		$query = $this->db->get('usuario',array('id'=>$id));
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}


//Actualizar esta función recibe en el arreglo los datos que se van a actualizar 
	function actualizarUsuario($id,$datos){
		$data = array('id'=>$datos['id'], //son los datos que se van a actualizar
			'nombre'=>$datos['nombre'],
			'password'=>$datos['password']
		);
        $this->db->where('id',$id);
		$query = $this->db->update('usuario',$data);
	}


//funcin eliminar 'delete' primer parametro la tabla y el segundo es como si fuera el where 
	//donde el arreglo tiene el valor de la base de datos
	function eliminarUsuario($id){
		$query = $this->db->delete('usuario',array('id'=>$id));

	}

}
 ?>