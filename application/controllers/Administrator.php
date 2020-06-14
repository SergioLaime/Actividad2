<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{	}
	public function admin()
	{
		$view['header'] = $this->load->view('administrator/template/header', NULL, TRUE);
		$view['nav'] = $this->load->view('administrator/utils/nav', NULL, TRUE);
		$view['menu-sidebar'] = $this->load->view('administrator/utils/menu-sidebar', NULL, TRUE);
		$view['panel'] = $this->load->view('administrator/utils/panel', NULL, TRUE);
		$view['footer'] = $this->load->view('administrator/template/footer', NULL, TRUE);
		
		$this->parser->parse('administrator/index',$view);

	}
}
