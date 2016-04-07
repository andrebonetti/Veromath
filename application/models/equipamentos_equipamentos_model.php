<?php

class Equipamentos_equipamentos_model extends CI_Model {

	//USUARIO
	public function busca_equipamentos(){
		$this->db->where("id_categoria","1");
		return $this->db->get("equipamentos_equipamentos")->result_array();
	}
	
	public function busca_equipamentos_categoria($id){
		$this->db->where("id_categoria",$id);
		return $this->db->get("equipamentos_equipamentos")->result_array();
	}
	
	public function busca_equipamento($id){
		$this->db->where("id",$id);
		return $this->db->get("equipamentos_equipamentos")->row_array();
	}
	
	public function busca_all_equipamentos(){
		$this->db->order_by("id_categoria");
		return $this->db->get("equipamentos_equipamentos")->result_array();
	}
    
    public function busca_equipamentos_home($id){
		$this->db->where("id_categoria",$id);
        $this->db->limit("4");
        $this->db->order_by("id","desc");
		return $this->db->get("equipamentos_equipamentos")->result_array();
    }
}