<?php

class Servicos_imgs_model extends CI_Model {

	//USUARIO
	public function busca_servico_imgs($id){
		$this->db->where("id",$id);
		return $this->db->get("servicos_imgs")->result_array();
	}
		
}