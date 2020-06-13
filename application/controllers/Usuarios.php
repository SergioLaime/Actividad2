<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('usuario_model', 'um');
	}
	public function index()
	{
		$data['usuarios']=$this->um->get();
		$this->load->view('usuarios',$data);
	}
}
