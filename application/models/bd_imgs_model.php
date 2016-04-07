<?php

class bd_imgs_model extends CI_Model {

	//USUARIO
	public function busca_imgs(){
		$this->db->order_by("id_categoria");
		return $this->db->get("banco_de_imagens")->result_array();
	}
	
	public function busca_cat(){
		$this->db->select('categoria');
		$this->db->distinct();
		return $this->db->get("banco_de_imagens")->result_array();
	}
	
	public function busca_img($id){
		$this->db->where("id",$id);
		return $this->db->get("banco_de_imagens")->row_array();
	}
	
	public function busca_img_produto($id_produto){
		$this->db->where("id_produto",$id_produto);
		return $this->db->get("equipamentos_imgs")->result_array();
	}
	
}