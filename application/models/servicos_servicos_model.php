<?php

class Servicos_servicos_model extends CI_Model {

	//USUARIO
	public function busca_servicos(){
		return $this->db->get("servicos_servicos")->result_array();
	}
	
	public function busca_servico($id){
		$this->db->where("id",$id);
		return $this->db->get("servicos_servicos")->result_array();
	}
	
	public function busca_servico_form($id){
		$this->db->where("id",$id);
		return $this->db->get("servicos_servicos")->row_array();
	}
	
}