<?php

class Index_slide_show_model extends CI_Model {

	//USUARIO
	public function busca_slide(){
		$this->db->order_by('n_ordem');
		return $this->db->get("index_slide")->result_array();
	}
		
	/*------------------ ADM ------------------------*/
	
	public function imagem_content($id){
		$this->db->where("id",$id);
		return $this->db->get("banco_de_imagens")->row_array();
	}
	
}