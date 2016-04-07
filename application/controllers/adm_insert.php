<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm_insert extends CI_Controller {
		
	public function home_slide_show($id){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{

			/*--------------------------MODELS-----------------------------------*/
			$slides 		= $this->index_slide_show_model		->busca_slide		()		;
			$img_content 	= $this->index_slide_show_model		->imagem_content	($id)	;
			
			/* ------------------------ CONTENT ---------------------------------*/
			foreach($slides as $slide){$max = $slide['n_ordem'];}	
			$n_ordem = $max + 1;
			
			$data = array("n_ordem" => $n_ordem, "imagem" => $img_content['img_arquivo']);
			
			/* ------------------------ INSERT ----------------------------------*/
			$insert = $this->adm_model ->insert_content($data,"index_slide");
			
			/* ------------------------ RESULT ----------------------------------*/
			$this->session->set_flashdata('msg-success',"Imagem adicionada com sucesso.");
			redirect("index.php/home_adm/slide_show_add");
					
		}
	}

	public function home_news(){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			
			/* ------------------------ DESTROY SESSION ---------------------------------*/
			$this->session->unset_userdata('img');
			
			/* ------------------------ CONTENT ---------------------------------*/
			$titulo = $this->input->post("titulo");
			$imagem = $this->input->post("imagem");
			$data 	= $this->input->post("data");
			$texto 	= $this->input->post("texto");
			
			$data_mysql = dataPtBrParaMysql($data);
			
			$data = array("titulo" => $titulo, "data" => $data_mysql,"texto" => $texto,"imagem" => $imagem);
			
			var_dump($data);
			/* ------------------------ INSERT ----------------------------------*/
			$insert = $this->adm_model ->insert_content($data,"index_news");
			
			/* ------------------------ RESULT ----------------------------------*/
			$this->session->set_flashdata('msg-success',"Notícia adicionada com sucesso!");
			redirect("index.php/home_adm/news_edit");
					
		}
	}
	
	public function servico(){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			
			/* ------------------------ DESTROY SESSION ---------------------------------*/
			$this->session->unset_userdata('img_1');
			$this->session->unset_userdata('img_2');
			
			/* ------------------------ CONTENT ---------------------------------*/
			$titulo 	= $this->input->post("titulo");
			$descricao	= $this->input->post("descricao");
			$menu 		= $this->input->post("img_menu");
			$principal 	= $this->input->post("img_principal");
								
			$data = array("titulo" => $titulo, "descricao" => $descricao,"img_menu" => $menu,"img_principal" => $principal);
			
			/* ------------------------ INSERT ----------------------------------*/
			$insert = $this->adm_model ->insert_content($data,"servicos_servicos");
			
			/* ------------------------ RESULT ----------------------------------*/
			$this->session->set_flashdata('msg-success',"Serviço adicionado com sucesso!");
			redirect("index.php/servicos_adm/servicos_edit");
					
		}
	}
			
	public function equipamento(){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			
			/* ------------------------ DESTROY SESSION ---------------------------------*/
			$this->session->unset_userdata('img');
			
			/* ------------------------ CONTENT ---------------------------------*/
			$categoria		= $this->input->post("categoria");
			$nome 			= $this->input->post("nome");
			$descricao		= $this->input->post("descricao");
			$img_principal 	= $this->input->post("img_principal");
								
			$data = array("id_categoria" => $categoria,"nome" => $nome, "descricao" => $descricao,"img_principal" => $img_principal);
			
			/* ------------------------ INSERT ----------------------------------*/
			$insert = $this->adm_model ->insert_content($data,"equipamentos_equipamentos");
			
			/* ------------------------ RESULT ----------------------------------*/
			$this->session->set_flashdata('msg-success',"Serviço adicionado com sucesso!");
			redirect("index.php/equipamentos");
					
		}
	}			
}
