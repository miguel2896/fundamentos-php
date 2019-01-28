<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'vendor\autoload.php';
/**
 * 
 */
class Prueba extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('nuevousuario_model');
	}

	function index(){
		$this->load->view('pdf/ejemplo_diseno');
	}


	function descargar(){
		$datos= array(//arreglo para almacenar los datos que manda del formulario
              'id'=>$this->input->post('id'),
              'nombre'=>$this->input->post('nombre'),
              'password'=>$this->input->post('password')
        );
        $this->nuevousuario_model->nuevoUsuario($datos);//metodo para mandar los datos al modelo

	 	$mpdf = new \Mpdf\Mpdf();//Objeto de la clase Mpdf

	 	$mpdf->SetHTMLHeader('
			<div style="text-align: right; font-weight: bold;">
			    Ejemplo header
			</div>');

	 	
			$mpdf->WriteHTML(date('j-m-Y'));
			$mpdf->WriteHTML('<h1>Mi Primer PDF</h1>');
			$mpdf->WriteHTML('<h2>ID:</h2>');
			$mpdf->WriteHTML('<h3>'.$datos['id'].'</h3>');
			$mpdf->WriteHTML('<h2>Usuario:</h2>');
			$mpdf->WriteHTML('<h3>'.$datos['nombre'].'</h3>');
			$mpdf->WriteHTML('<h2>Password:</h2>');
			$mpdf->WriteHTML('<h3>'.$datos['password'].'</h3>');
		$mpdf->SetHTMLFooter('
			<table width="100%">
			    <tr>
			        <td width="33%">{DATE d-m-Y}</td>
			        <td width="33%" align="center">{PAGENO}/{nbpg}</td>
			        <td width="33%" style="text-align: right;">Ejemplo footer</td>
			    </tr>
			</table>');
		$mpdf->Output();
	 
	}


}
 ?>