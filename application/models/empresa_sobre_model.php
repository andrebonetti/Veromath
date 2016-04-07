<?php

class Empresa_sobre_model extends CI_Model {

	//USUARIO
	public function busca_sobre(){
		return $this->db->get("sobre_empresa")->row_array();
	}
	
}