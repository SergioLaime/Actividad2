<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('usuario_model', 'um');
	}
	public function index()
	{
		$data['usuarios']=$this->um->get();
		$this->load->view('usuarios',$data);
	}

	public function alter_controller(){

		$respuesta=$this->um->alter();
		if($respuesta == 1){	
		}

		else{
		}

	}

	public function store_controller(){

		$respuesta=$this->um->alter();
		if($respuesta){	
			
			$json='{
				"result":"'.$respuesta.'",
				"status":200,
				"error":0
			}';
			echo json_encode($json);
		}

		else{
			$json='{
				"result":"'.$respuesta.'",
				"status":404,
				"error":1
			}';
			echo json_encode($json);


		}

	}

	public function destroy_controller(){

		$respuesta=$this->um->alter();
		if($respuesta == 1){	
		

		}

		else{
		}

	}	
}
