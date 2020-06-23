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
		$data = json_decode(file_get_contents("php://input"), true);
		
		$respuesta=$this->um->alter($data);
		if($respuesta == 1){
			$json=array(
				"respuesta"=>$data,
				"status"=>200,
				"error"=>0);
			echo json_encode($json);
			
		}

		else{
			$json=array(
				"respuesta"=>$data,
				"status"=>404,
				"error"=>1);
			echo json_encode($json);
		
		}

	}

	public function store_controller(){

		$data = json_decode(file_get_contents("php://input"), true);

		$respuesta=$this->um->store($data);
		if($respuesta["affected_rows"] == 1){	
			
			$json=array(
				"respuesta"=>$data,
				"status"=>200,
				"error"=>0);
			echo json_encode($json);
			
		}

		else{
			$json=array(
				"respuesta"=>$data,
				"status"=>404,
				"error"=>1);
			echo json_encode($json);
			

		}

	}

	public function destroy_controller(){
		

		$respuesta=$this->um->destroy();
		if($respuesta == 1){	
			$json=array(
				"respuesta"=>$data,
				"status"=>200,
				"error"=>0);
			echo json_encode($json);
		
		}

		else{
			$json=array(
				"respuesta"=>$data,
				"status"=>404,
				"error"=>1);
			echo json_encode($json);
		
		}

	}	
}
