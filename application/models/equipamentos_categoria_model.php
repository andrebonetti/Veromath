<?php

class Equipamentos_categoria_model extends CI_Model {

	//USUARIO
	public function busca_categorias(){
		return $this->db->get("equipamentos_categoria")->result_array();
	}
	
}