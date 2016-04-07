<?php

class Index_news_model extends CI_Model {
	
	public function busca_news(){
		return $this->db->get("index_news")->result_array();
	}
	
	public function busca_new_content($id){
		$this->db->where('id',$id);
		return $this->db->get("index_news")->result_array();
	}
	
	/*--------------------------- ADM --------------------------------*/
	
	public function busca_news_form($id){
		$this->db->where('id',$id);
		return $this->db->get("index_news")->row_array();
	}
}