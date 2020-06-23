<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "vendor/autoload.php";

use \Firebase\JWT\JWT;

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// cargar el modelo usuario
		$this->load->model('usuario_model', 'um');
	}
	public function index()
	{	}

	public function autenticacion()
	{
		$view['header'] = $this->load->view('login/template/header', NULL, TRUE);
		$view['form'] = $this->load->view('login/utils/form', NULL, TRUE);
		$view['footer'] = $this->load->view('login/template/footer', NULL, TRUE);
		$this->parser->parse('login/index',$view);
	}

	public function verificarUsuario()
	{
		$data = json_decode(file_get_contents("php://input"), true);


		// obtener los usuarios
		$usuarios=$this->um->get();
		
		foreach ($usuarios as $usuario) {


			if($usuario->email==$data['login'] && $usuario->contrasena==$data['passwd'])
			{
				

				$this->load->library("authorization_token");
				
				$time=time();

				$return_data=array();
				$token_key="Dsw1s9x8@";
				$return_data["header"]=array("type"=>"JWT","alg"=>"HS256");
				$return_data["payload"]=array(
					'user_id'=>$usuario->idUsuarios,
					'nombre'=>$usuario->nombre,
					'email'=>$usuario->email,
					'fecha'=>$usuario->fecha_nacimiento,
					'time'=>$time+(60*60*24)
					);
				$return_data["status"]=array(
					'status'=>200);

				//$user_token = $this->authorization_token->generateToken($return_data);
				

				$data=JWT::encode($return_data,$token_key);
				
				
				//$dato=JWT::decode($data,$token_key,array('HS256'));
				//print_r($dato);
				//die();
				echo json_encode($data);
				return;

			}
		}

		//usuario no encontrado
		echo json_encode(array('error'=>true,'mensaje'=>'Unauthoised'));
		exit();
	}
	/*public function verificarToken()
	{

		$token_key="Dsw1s9x8@";
		$a=getallheaders();
		print_r($a["Authorization"]);
		$dato=JWT::decode($a["Authorization"],$token_key,array('HS256'));
		print_r($dato);


	}*/
}
