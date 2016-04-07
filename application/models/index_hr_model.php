<?php

class Index_hr_model extends CI_Model {

	//USUARIO
	public function busca_hr(){
		return $this->db->get("index_hr")->row_array();
	}
	
}