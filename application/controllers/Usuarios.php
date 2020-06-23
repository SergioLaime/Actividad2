<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "vendor/autoload.php";
use \Firebase\JWT\JWT;

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
		/*
		$token_key="Dsw1s9x8@";
		$headers=getallheaders();
		
		$dato=JWT::decode($headers["Authorization"],$token_key,array('HS256'));
		print_r($dato);
		
		if($dato){*/
			
			$respuesta=$this->um->alter($data);
			if($respuesta == 1){
				$json=array(
					"respuesta"=>$respuesta,
					"status"=>200,
					"error"=>0);
				echo json_encode($json);
				
			}

			else{
				$json=array(
					"respuesta"=>$respuesta,
					"status"=>404,
					"error"=>1);
				echo json_encode($json);
			
			}
		//}	
	}

	public function store_controller(){

		$data = json_decode(file_get_contents("php://input"), true);

		/*$token_key="Dsw1s9x8@";
		$headers=getallheaders();
		
		$dato=JWT::decode($headers["Authorization"],$token_key,array('HS256'));
		print_r($dato);
		
		if($dato){*/

			$respuesta=$this->um->store($data);
			if($respuesta["affected_rows"] == 1){	
				
				$json=array(
					"respuesta"=>$respuesta,
					"status"=>200,
					"error"=>0);
				echo json_encode($json);
				
			}

			else{
				$json=array(
					"respuesta"=>$respuesta,
					"status"=>404,
					"error"=>1);
				echo json_encode($json);
				

			}
		//}	
	}

	public function destroy_controller(){
		
		$data = json_decode(file_get_contents("php://input"), true);

		/*$token_key="Dsw1s9x8@";
		$headers=getallheaders();
		
		$dato=JWT::decode($headers["Authorization"],$token_key,array('HS256'));
		print_r($dato);
		
		if($dato){*/

			$respuesta=$this->um->destroy();
			if($respuesta == 1){	
				$json=array(
					"respuesta"=>$respuesta,
					"status"=>200,
					"error"=>0);
				echo json_encode($json);
			
			}

			else{
				$json=array(
					"respuesta"=>$respuesta,
					"status"=>404,
					"error"=>1);
				echo json_encode($json);
			
			}
		//}	
	}	
}
