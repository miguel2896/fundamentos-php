<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**En el model es donde se realizan todas las consultas, inserciones, modificaciones,
 * para eliminar todo lo de BD. 
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
		$query = $this->db->get('usuario');//realizando la consulta a la BD con la función get
		if($query->num_rows() > 0)// que el numero de datos sea mallor a 0
			return $query;// regresa los datos
		else
			return false;
		
	}
    function obtenerUsuario($id){
        $this->db->where('id',$id);//haciendo la condición where para la consulta
        // por ejemplo select*from usuario where id=id
		$query = $this->db->get('usuario');//la funcion 'get' recibe 2 parametros
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}


//Actualizar esta función recibe en el arreglo los datos que se van a actualizar 
	function actualizarUsuario($id,$data){
		$datos = array( //son los datos que se van a actualizar
			'nombre'=>$data['nombre'],
			'password'=>$data['password']
		);
        $this->db->where('id',$id);
		$query = $this->db->update('usuario',$datos);
	}


    //funcin eliminar 'delete' primer parametro la tabla y el segundo es como si fuera el where 
	//donde el arreglo tiene el valor de la base de datos
	function eliminarUsuario($id){
		$query = $this->db->delete('usuario',array('id'=>$id));

	}

}
 ?>