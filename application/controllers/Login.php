<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		// cargar el modelo usuario
		$this->load->model('usuario_model', 'um');
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function verificarUsuario()
	{
		$data = json_decode(file_get_contents("php://input"), true);
		// obtener los usuarios
		$usuarios=$this->um->get();
		foreach ($usuarios as $usuario) {
			if($usuario->email==$data['login'] && $usuario->contrasena==$data['passwd'])
			{
				return true;
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
