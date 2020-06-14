<?php
defined('BASEPATH') OR exit('No direct script access allowed');


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

		print_r($data);
		// obtener los usuarios
		$usuarios=$this->um->get();
		
		foreach ($usuarios as $usuario) {


			if($usuario->email==$data['login'] && $usuario->contrasena==$data['passwd'])
			{
				$this->load->library("authorization_token");
				
				$token_data["user_id"]=$usuario->idUsuarios;
				$token_data["nombre"]=$usuario->nombre;
				$token_data["fecha"]=$usuario->fecha_nacimiento;
				$token_data["email"]=$usuario->email;
				$token_data["time"]=time();

				$user_token = $this->authorization_token->generateToken($token_data);

				$time=time();

				$return_data=array(
					'user_id'=>$usuario->idUsuarios,
					'nombre'=>$usuario->nombre,
					'email'=>$usuario->email,
					'fecha'=>$usuario->fecha_nacimiento,
					'time'=>$time+(60*60*24),//1 dia
					'token'=>$user_token,
					'result'=>[
						'status'=>200
					]);
				
				echo "<pre>"; print_r($return_data); echo "</pre>";

				$this->load->view('login',$user_token);
				
				return $return_data;
				/* $_SESSION['hora_sesion']=time();
				$_SESSION['nueva_sesion']=$usuario;
				// guardar datos en sesion de usuario
				$sesion=array(
					'hora_inicio' => date('H:i:s'),
					'hora_salida' => '00:00:00',
					'fecha' => date('Y-m-d'),
					'usuario_id' => $usuario->idUsuario
				);
				$resp_sesion=$this->sm->store($sesion);
				if (!($resp_sesion['affected_rows']>0))
				{
					echo 'No se guardo la sesion de inicio!!!';
					return;
				}
				$_SESSION['nueva_sesion']->sesion_id=$resp_sesion['sesion_id'];
				return; */
			}
		}
		// usuario no encontrado
		echo json_encode(array('error' => 'true'));
	}
}
