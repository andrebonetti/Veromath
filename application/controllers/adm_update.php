<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm_update extends CI_Controller {
		
	/* ---------- HOME ---------- */ 
	
	/* SLIDE */	
	public function home_slide_show(){		
		$this->output->enable_profiler(FALSE);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			
			/*--------------------------MODELS-----------------------------------*/
			$slides 		= $this->index_slide_show_model		->busca_slide	();
			
			for($n=1; $n <= count($slides); $n++){
					
				$ordem	= $this->input->post("n_ordem-$n");
				$id		= $this->input->post("id-$n");	
				
				/*--------------------------UPDATE-------------------------------*/
				$data = array();
				
				$data['n_ordem']=$ordem;
				
				$this->adm_model->updade_content($id, $data,"index_slide");
				
				echo $ordem."-";
				echo $id."<br>";
			}
			
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Alterações salvas com sucesso!');
			redirect("index.php/home_adm/slide_show_edit");
						
		}
	}
	
	/* HR */	
	public function home_hr(){
		
		$this->output->enable_profiler(FALSE);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}	
		else{
			
			/*--------------------------INPUT------------------------------------*/
			$texto = $this->input->post("texto");
			
			/*--------------------------UPDATE-----------------------------------*/
			$data = array();				
			$data['texto']=$texto;
				
			$this->adm_model->updade_content("0", $data , "index_hr");
					
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Alterações salvas com sucesso!');
			redirect("index.php/home");
		}
	}	
	
	/* NEWS */	
	public function home_news($id){
		
		$this->output->enable_profiler(false);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}	
		else{		
			/* ------------------------ DESTROY SESSION ---------------------------------*/
			$this->session->unset_userdata('img');
			
			/*--------------------------INPUT------------------------------------*/
			$titulo = $this->input->post("titulo");
			$imagem = $this->input->post("imagem");
			$data 	= $this->input->post("data");
			$texto 	= $this->input->post("texto");
			
			$explode= dataPtBrParaMysql($data);
			
			/*--------------------------UPDATE-----------------------------------*/
			$data = array();				
			$data['titulo']	=$titulo;
			$data['imagem']	=$imagem;
			$data['data']	=$explode;
			$data['texto']	=$texto;
				
				
				
			$this->adm_model->updade_content($id, $data , "index_news");
					
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Notícia alterada com sucesso com sucesso!');
			redirect("index.php/home_adm/news_edit");
		}
	}	
	
	/* PORTOFOLIOS */
	public function home_portofolio($id){
		
		$this->output->enable_profiler(false);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}	
		else{		
			/* ------------------------ DESTROY SESSION ---------------------------------*/
			$this->session->unset_userdata('img');
			
			/*--------------------------INPUT------------------------------------*/
			$imagem = $this->input->post("imagem");
			$texto 	= $this->input->post("texto");
			
						
			/*--------------------------UPDATE-----------------------------------*/
			$data = array();
			$data['imagem']	=$imagem;				
			$data['texto']	=$texto;
		
			$this->adm_model->updade_content($id, $data , "index_portofolios");
					
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Portofólio alterado com sucesso!');
			redirect("index.php/home");
		}
	}
	
	/* ---------- EMPRESA ---------- */ 
	
	/* TEXTO */
	public function empresa_texto(){
		
		$this->output->enable_profiler(FALSE);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}	
		else{
			
			/*--------------------------INPUT------------------------------------*/
			$texto = $this->input->post("texto");
			
			/*--------------------------UPDATE-----------------------------------*/
			$data = array();				
			$data['texto']=$texto;
				
			$this->adm_model->updade_content("1", $data , "sobre_empresa");
					
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Alterações salvas com sucesso!');
			redirect("index.php/empresa");
		}
	}
	
	/* IMG */
	public function empresa_imgs(){
		
		$this->output->enable_profiler(FALSE);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}	
		else{
			
			/*--------------------------INPUT------------------------------------*/
			$img_1 = $this->input->post("imagem_1");
			$img_2 = $this->input->post("imagem_2");
			
			/*--------------------------UPDATE-----------------------------------*/
			$data_1 = array();				
			$data_1['imagem']= $img_1;
			
			$data_2 = array();				
			$data_2['imagem']= $img_2;
				
			$this->adm_model->updade_content("1", $data_1, "sobre_imgs");
			$this->adm_model->updade_content("2", $data_2, "sobre_imgs");
			
			/*--------------------------UNSET IMG--------------------------------*/
			$this->session->unset_userdata("img_1");
			$this->session->unset_userdata("img_2");
					
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Alterações salvas com sucesso!');
			redirect("index.php/empresa");
		}
	}			

	/* ---------- SERVIÇOS ---------- */ 
	
	/* SERVICO */
	public function servico($id){
		
		$this->output->enable_profiler(false);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}	
		else{		
			/* ------------------------ DESTROY SESSION ---------------------------------*/
			$this->session->unset_userdata('img');
			
			/*--------------------------INPUT------------------------------------*/
			$titulo 		= $this->input->post("titulo");
			$descricao 		= $this->input->post("descricao");
			$img_principal 	= $this->input->post("img_principal");
			$img_menu 		= $this->input->post("img_menu");
			
			/*--------------------------UPDATE-----------------------------------*/
			$data = array();				
			$data['titulo']			=$titulo;
			$data['descricao']		=$descricao;
			$data['img_principal']	=$img_principal;
			$data['img_menu']		=$img_menu;
								
			$this->adm_model->updade_content($id, $data , "servicos_servicos");
					
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Serviço alterado com sucesso!');
			redirect("index.php/servicos_adm/servicos_edit");
		}
	}	

	/* ---------- EQUIPAMENTOS ------ */	
	
	/* SERVICO */
	public function equipamento($id){
		
		$this->output->enable_profiler(false);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}	
		else{		
			/* ------------------------ DESTROY SESSION ---------------------------------*/
			$this->session->unset_userdata('img');
			
			/*--------------------------INPUT------------------------------------*/
			$nome 			= $this->input->post("nome");
			$descricao 		= $this->input->post("descricao");
			$img_principal 	= $this->input->post("img_principal");
			
			/*--------------------------UPDATE-----------------------------------*/
			$data = array();				
			$data['nome']			=$nome;
			$data['descricao']		=$descricao;
			$data['img_principal']	=$img_principal;
								
			$this->adm_model->updade_content($id, $data , "equipamentos_equipamentos");
					
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Equipamento alterado com sucesso!');
			redirect("index.php/equipamentos_adm/equipamento_edit");
		}
	}

	/* EQUIPAMENTO IMGS */	
	public function equipamento_imgs(){
				
		$this->output->enable_profiler(TRUE);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			
			/*--------------------------MODELS-----------------------------------*/
			$id_equipamento			= $this->input->post("id-equipamento");	
			$equipamento_imgs		= $this->equipamentos_imgs_model->busca_equipamento_imgs($id_equipamento);
					
			for($n=1; $n <= count($equipamento_imgs); $n++){
					
				$ordem	= $this->input->post("n_ordem-$n");
				$id		= $this->input->post("id-$n");	
				
				
				/*--------------------------UPDATE-------------------------------*/
				$data = array();
				
				$data['n_ordem']=$ordem;
				
				$this->adm_model->updade_content($id, $data,"equipamentos_imgs");
				
				echo $id."-";
				echo $ordem."<br>";
			}
			
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Alterações salvas com sucesso!');
			redirect("index.php/equipamentos_adm/equipamento_edit_form/$id_equipamento");
						
		}
	}	

	public function equipamento_grafico(){
				
		$this->output->enable_profiler(TRUE);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			$id		= $this->input->post("id_equipamento");	
			
			$config['upload_path'] = './img/grafico_carga/';
            $config['allowed_types'] = 'gif|jpg|png';

           	$this->load->library('upload', $config);
            
           	$data_add = array();
			
			$grafico = $this->upload->do_upload("grafico_carga");
            if (!empty($grafico))
            {
            	$data = $this->upload->data(); 
                $data_add["grafico_carga"] = $data["file_name"];
            }

			$this->crud_model->update("equipamentos_equipamentos",$id,$data_add);
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Gráfico adicionado com sucesso!');
			redirect("index.php/equipamentos_adm/equipamento_edit_form/{$id}");
						
		}
	}

	public function equipamento_delete_grafico($id){
				
		$this->output->enable_profiler(TRUE);
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{        
            $data_delete["grafico_carga"] = "";

			$this->crud_model->update("equipamentos_equipamentos",$id,$data_delete);
			/*--------------------------VIEW-------------------------------------*/
			$this->session->set_flashdata('msg-success','Gráfico adicionado com sucesso!');
			redirect("index.php/equipamentos_adm/equipamento_edit_form/{$id}");
						
		}
	}
}
