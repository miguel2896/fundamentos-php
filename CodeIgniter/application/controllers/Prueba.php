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
		
	}

	function index(){
		$this->load->view('pdf/ejemplo_diseno');
	}


	function descargar(){
	 	$mpdf = new \Mpdf\Mpdf();

	 	$mpdf->SetHTMLHeader('
<div style="text-align: right; font-weight: bold;">
    Ejemplo header
</div>');
$mpdf->SetHTMLFooter('
<table width="100%">
    <tr>
        <td width="33%">{DATE j-m-Y}</td>
        <td width="33%" align="center">{PAGENO}/{nbpg}</td>
        <td width="33%" style="text-align: right;">Ejemplo footer</td>
    </tr>
</table>');

$mpdf->WriteHTML('Hola Mundo');

$mpdf->Output();
		// $nom = $this->input->post('nombre');
		
		// 	$mpdf->WriteHTML(date('j-m-Y'));
		// 	$mpdf->WriteHTML('<h1>Hello world!</h1>');
		// 	$mpdf->WriteHTML('<h1>'.$nom.'</h1>');
		// 	$mpdf->Output();
		
		//$pdf= $this->mpdf_libreria->mpdf($nombre);
		 
	}


}
 ?>