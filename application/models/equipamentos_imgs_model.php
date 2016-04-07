<?php

class Equipamentos_imgs_model extends CI_Model {

	//USUARIO
	public function busca_equipamento_imgs($id){
		$this->db->where("id_produto",$id);
		$this->db->order_by("n_ordem");
		return $this->db->get("equipamentos_imgs")->result_array();
	}
	
}