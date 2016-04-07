<?php
	class Adm_model extends CI_Model {
		
		/*---------------- LOGIN -------------*/
		function valida_usuario($nome,$senha){
			$this->db->where("nome",$nome);
			$this->db->where("senha",$senha);	
			return $this->db->get("usuarios")->row_array();		
		}	
		
		/*---------------- USUARIOS ----------*/
		
		/*INSERT*/
		function insert_content($data,$table){
			$this->db->insert($table, $data);
		}
		
		/*UPDATE*/		
		function updade_content($id, $data,$table){
		$this->db->where 		('id', $id);
		$this->db->update		($table, $data);
		}
		
		/*DELETE*/
		function delete_content($id,$table){
			$this->db->delete($table, array('id' => $id));
		}
		
	}