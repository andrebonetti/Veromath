<?php

class Empresa_imgs_model extends CI_Model {

	//USUARIO
	public function busca_imgs(){
		return $this->db->get("sobre_imgs")->result_array();
	}
	
	public function busca_img($id){
		$this->db->where("id",$id);
		return $this->db->get("sobre_imgs")->row_array();
	}
	
}