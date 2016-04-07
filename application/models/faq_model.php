<?php

class Faq_model extends CI_Model {

	//USUARIO
	public function busca_faqs($tipo){
		$this->db->where("tipo",$tipo);
		$this->db->order_by("n_ordem");
		return $this->db->get("faq")->result_array();
	}
	
		public function busca_pergunta($id){
		$this->db->where("id",$id);
		return $this->db->get("faq")->row_array();
	}
	
}