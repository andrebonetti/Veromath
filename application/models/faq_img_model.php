<?php

class Faq_img_model extends CI_Model {

	//USUARIO
	public function busca_faq_imgs($id){
		$this->db->where("id",$id);
		return $this->db->get("faq_img")->row_array();
	}
	
}