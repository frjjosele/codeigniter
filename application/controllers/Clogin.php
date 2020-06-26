<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('vlogin');
	
	}

	public function recibo()
	{
		
		$usuario=$this->input->post("usuario");
		$dni=$this->input->post("dni");
		if($dni=="44358696E" && $usuario=="13242"){
			$url = "http://212.225.255.130:8010/ws/accesotec/".$usuario."/".$dni;

		
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
			$data = curl_exec($ch);
			curl_close($ch);
	  
		
			$array_data = json_decode(json_encode(simplexml_load_string($data)), true);
			$array_data=$array_data["Registro"]["@attributes"];

			$this->load->view('datos',$array_data);
			
		}else{
			$this->index();
		}

		
	}


}
