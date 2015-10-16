<?php

class Nino_model extends CI_Model{

	public function __construct(){
		
		parent::__construct();
	}

	public function get_nombre(){

		$consulta = $this->db->query('select * from anam_nino');

		return $consulta->result();
	}

}