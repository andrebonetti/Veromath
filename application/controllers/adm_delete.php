<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm_delete extends CI_Controller {
		
		
	public function bd_imgs($id,$index,$controller,$class){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/* ------------------------ INSERT ----------------------------------*/
			$this->adm_model->delete_content($id,"banco_de_imagens");
			
			/* ------------------------ RESULT ----------------------------------*/
			$this->session->set_flashdata('msg-success',"Imagem excluida do banco com sucesso!");
			redirect("$index/$controller/$class");
					
		}
	}
		
		
	public function home_slide_show($id){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/* ------------------------ INSERT ----------------------------------*/
			$this->adm_model->delete_content($id,"index_slide");
			
			/* ------------------------ RESULT ----------------------------------*/
			$this->session->set_flashdata('msg-success',"Imagem deletada do Slide com sucesso!");
			redirect("index.php/home_adm/slide_show_edit");
					
		}
	}
	
	public function home_news($id){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/* ------------------------ INSERT ----------------------------------*/
			$this->adm_model->delete_content($id,"index_news");
			
			/* ------------------------ RESULT ----------------------------------*/
			$this->session->set_flashdata('msg-success',"Notícia deletada com sucesso!");
			redirect("index.php/home_adm/news_edit");
					
		}
	}
	
	public function servico($id){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/* ------------------------ INSERT ----------------------------------*/
			$this->adm_model->delete_content($id,"servicos_servicos");
			
			/* ------------------------ RESULT ----------------------------------*/
			$this->session->set_flashdata('msg-success',"Serviço Excluido com sucesso!");
			redirect("index.php/servicos_adm/servicos_edit");
					
		}
	}
	
	public function equipamento($id){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/* ------------------------ INSERT ----------------------------------*/
			$this->adm_model->delete_content($id,"equipamentos_equipamentos");
			
			/* ------------------------ RESULT ----------------------------------*/
			$this->session->set_flashdata('msg-success',"Equimento Excluido com sucesso!");
			redirect("index.php/equipamentos");
					
		}
	}
	
	public function equipamento_imgs($id,$id_produto){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/* ------------------------ INSERT ----------------------------------*/
			$this->adm_model->delete_content($id,"equipamentos_imgs");
			
			/* ------------------------ RESULT ----------------------------------*/
			$this->session->set_flashdata('msg-success',"Imagem Excluida com sucesso!");
			redirect("index.php/equipamentos_adm/equipamento_edit_form/$id_produto");
					
		}
	}
			
}
