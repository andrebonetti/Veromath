<?php

class Index_portofolios_model extends CI_Model {

	//USUARIO
	public function busca_portofolio($id){
		$this->db->where("id",$id);
		return $this->db->get("index_portofolios")->row_array();
	}
	
}