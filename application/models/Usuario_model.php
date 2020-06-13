<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	protected $table='usuarios';

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get()
	{
		$this->db->from($this->table);
		/* $this->db->order_by('nombre'); */
		$query=$this->db->get();
		return $query->result();
	}

	public function get_by_id($id)
	{
		$query=$this->db->get_where($this->table, $id);
		return $query->row();
	}

	public function get_by_id_and_nivel($id)
	{
		$query=$this->db->query('
			select * from usuarios as u
			right join niveles as n
			on n.idnivel=u.nivel_id
			where u.idUsuario='.$id
		);
		// return $query->result();
		// return $query->result_array();
		return $query->row();
	}

	public function busqueda($buscar)
	{
		$query=$this->db->query(
			'select * from usuarios
			where nombre like \'%'.$buscar.'%\''
			.' or login like \'%'.$buscar.'%\''
			.' order by nombre, login');
		return $query->result();
	}

	public function store($usuario)
	{
		$this->db->insert($this->table, $usuario);
		return array(
			'affected_rows' => $this->db->affected_rows(),
			'usuario_id' => $this->db->insert_id()
		);		
	}

	public function alter($usuario, $id)
	{
		$this->db->update($this->table, $usuario, $id);
		return $this->db->affected_rows();
	}

	public function destroy($id)
	{
		$this->db->delete($this->table, $id);
		return $this->db->affected_rows();
	}
}