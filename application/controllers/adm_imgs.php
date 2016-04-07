<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm_imgs extends CI_Controller {
		
	/* ----- HOME ----- */
	
	/* NEWS ADD */	
	public function news_img_add(){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$imgs_cat		= $this->bd_imgs_model				->busca_cat		();
			$imgs 			= $this->bd_imgs_model				->busca_imgs	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"nav_name"		=> $nav_name											,
								"nav_url"  		=> $nav_url												,
								"nav_active"	=> $nav_active											,	
								"url_atual"		=> "index.php/adm_imgs/news_img_add"					,
								"url_destiny"	=> "index.php/adm_imgs/img_session/home_adm/news_add"	,
								"imgs_cat"		=> $imgs_cat											,
								"imgs"			=> $imgs												,
								"name_pag"		=> "Home / Notícias - Adicionar Imagens "				,
								"class"			=> ""													); 
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm_with_imgs('adm/adm-frames/clear.php',$content);

		}
	}
	
	/* NEWS UPDATE */
	public function news_img_update($id){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$imgs_cat		= $this->bd_imgs_model				->busca_cat		();
			$imgs 			= $this->bd_imgs_model				->busca_imgs	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"nav_name"		=> $nav_name															,
								"nav_url"  		=> $nav_url																,
								"nav_active"	=> $nav_active															,
								"url_atual"		=> "index.php/adm_imgs/news_img_update/$id"								,	
								"url_destiny"	=> "index.php/adm_imgs/img_session_update/home_adm/news_edit_form/$id"	,
								"imgs_cat"		=> $imgs_cat															,
								"imgs"			=> $imgs																,
								"name_pag"		=> "Home / Notícias - Adicionar Imagens "								,
								"class"			=> ""																	); 		
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm_with_imgs('adm/adm-frames/clear.php',$content);

		}
	}
	
	/* PORTOFOLIO UPDATE */
	public function portofolio_img_update($id){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$imgs_cat		= $this->bd_imgs_model				->busca_cat		();
			$imgs 			= $this->bd_imgs_model				->busca_imgs	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"nav_name"		=> $nav_name																	,
								"nav_url"  		=> $nav_url																		,
								"nav_active"	=> $nav_active																	,
								"url_atual"		=> "index.php/adm_imgs/portofolio_img_update/$id"								,				
								"url_destiny"	=> "index.php/adm_imgs/img_session_update/home_adm/portofolio_edit/$id"			,
								"imgs_cat"		=> $imgs_cat																	,
								"imgs"			=> $imgs																		,
								"name_pag"		=> "Home / Editar Portofólio "													,
								"class"			=> ""																			); 		
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm_with_imgs('adm/adm-frames/clear.php',$content);

		}
	}
	
	/* ----- EMPRESA ----- */
	
	/* EMPRESA IMGS UPDATE */
	public function empresa_imgs_update($id){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$imgs_cat		= $this->bd_imgs_model				->busca_cat		();
			$imgs 			= $this->bd_imgs_model				->busca_imgs	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"nav_name"		=> $nav_name																	,
								"nav_url"  		=> $nav_url																		,
								"nav_active"	=> $nav_active																	,
								"url_atual"		=> "index.php/adm_imgs/empresa_imgs_update/$id"									,	
								"url_destiny"	=> "index.php/adm_imgs/img_session_empresa/empresa_adm/img_edit/$id"			,
								"imgs_cat"		=> $imgs_cat																	,
								"imgs"			=> $imgs																		,
								"name_pag"		=> "Home / Trocar Imagem "														,
								"class"			=> ""																			); 		
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm_with_imgs('adm/adm-frames/clear.php',$content);

		}
	}

	public function img_empresa_cancel($controller,$class,$id){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------SESSIONS-----------------------------------*/
			$this->session->unset_userdata("img_$id");
				
			/*--------------------------REDIRECT---------------------------*/
			redirect("index.php/".$controller."/".$class);
		}
	}

	public function img_session_empresa($controller,$class,$id_img,$id){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$img_bd	= $this->bd_imgs_model	->busca_img	($id);
				
			/*--------------------------SESSIONS----------------------------------*/			
			$this->session->set_userdata("img_$id_img",$img_bd['img_arquivo']);
			
			/*--------------------------REDIRECT---------------------------*/
			redirect("index.php/".$controller."/".$class."");
		}
	}
	
	/* ----- SERVICOS ----- */
	
	/* SERVICO ADD */
	public function servicos_add($id){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$imgs_cat		= $this->bd_imgs_model				->busca_cat		();
			$imgs 			= $this->bd_imgs_model				->busca_imgs	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"nav_name"		=> $nav_name																	,
								"nav_url"  		=> $nav_url																		,
								"nav_active"	=> $nav_active																	,	
								"url_atual"		=> "index.php/adm_imgs/servicos_add/$id"										,	
								"url_destiny"	=> "index.php/adm_imgs/img_session_servicos/servicos_adm/servico_add/$id"		,
								"imgs_cat"		=> $imgs_cat																	,
								"imgs"			=> $imgs																		,
								"name_pag"		=> "Serviços / Trocar Imagem "													,
								"class"			=> ""																			); 		
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm_with_imgs('adm/adm-frames/clear.php',$content);

		}
	}
		
	public function servicos_edit($id_pag,$id_img){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$imgs_cat		= $this->bd_imgs_model				->busca_cat		();
			$imgs 			= $this->bd_imgs_model				->busca_imgs	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"nav_name"		=> $nav_name																						,
								"nav_url"  		=> $nav_url																							,
								"nav_active"	=> $nav_active																						,	
								"url_atual"		=> "index.php/adm_imgs/servicos_edit/$id_pag,$id_img"												,
								"url_destiny"	=> "index.php/adm_imgs/img_session_servicos_update/servicos_adm/servico_edit_form/$id_pag/$id_img"	,
								"imgs_cat"		=> $imgs_cat																						,
								"imgs"			=> $imgs																							,
								"name_pag"		=> "Serviços / Trocar Imagem "																		,
								"class"			=> ""																								); 		
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm_with_imgs('adm/adm-frames/clear.php',$content);

		}
	}	

	public function img_session_servicos($controller,$class,$id_img,$id_bd_img){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$img_bd	= $this->bd_imgs_model	->busca_img	($id_bd_img);
				
			/*--------------------------SESSIONS----------------------------------*/			
			$this->session->set_userdata("img_$id_img",$img_bd['img_arquivo']);
			
			/*--------------------------REDIRECT---------------------------*/
			redirect("index.php/".$controller."/".$class."");
		}
	}
		
	public function img_session_servicos_update($controller,$class,$id_pag,$id_img,$id_bd_img){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$img_bd	= $this->bd_imgs_model	->busca_img	($id_bd_img);
				
			/*--------------------------SESSIONS----------------------------------*/			
			$this->session->set_userdata("img_$id_img",$img_bd['img_arquivo']);
			
			/*--------------------------REDIRECT---------------------------*/
			redirect("index.php/".$controller."/".$class."/".$id_pag."");
		}
	}
	
	public function img_servico_cancel($controller,$class,$id_pag,$id){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------SESSIONS-----------------------------------*/
			$this->session->unset_userdata("img_$id");
				
			/*--------------------------REDIRECT---------------------------*/
			redirect("index.php/".$controller."/".$class."/".$id_pag."");
		}
	}
	
	/* ----- EQUIPAMENTOS ----- */
	
	public function equipamento_add(){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$imgs_cat		= $this->bd_imgs_model				->busca_cat		();
			$imgs 			= $this->bd_imgs_model				->busca_imgs	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"nav_name"		=> $nav_name																	,
								"nav_url"  		=> $nav_url																		,
								"nav_active"	=> $nav_active																	,	
								"url_atual"		=> "index.php/adm_imgs/equipamento_add"											,
								"url_destiny"	=> "index.php/adm_imgs/img_session/equipamentos_adm/equipamento_add"			,
								"imgs_cat"		=> $imgs_cat																	,
								"imgs"			=> $imgs																		,
								"name_pag"		=> "Equipamentos / Trocar Imagem "												,
								"class"			=> ""																			); 		
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm_with_imgs('adm/adm-frames/clear.php',$content);
		}
	}
	
	public function equipamento_edit($id_pag){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$imgs_cat		= $this->bd_imgs_model				->busca_cat		();
			$imgs 			= $this->bd_imgs_model				->busca_imgs	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"nav_name"		=> $nav_name																						,
								"nav_url"  		=> $nav_url																							,
								"nav_active"	=> $nav_active																						,	
								"url_atual"		=> "index.php/adm_imgs/equipamento_edit/$id_pag"													,
								"url_destiny"	=> "index.php/adm_imgs/img_session_update/equipamentos_adm/equipamento_edit_form/$id_pag"			,
								"imgs_cat"		=> $imgs_cat																						,
								"imgs"			=> $imgs																							,
								"name_pag"		=> "Serviços / Trocar Imagem "																		,
								"class"			=> ""																								); 		
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm_with_imgs('adm/adm-frames/clear.php',$content);

		}
	}	

	public function equipamento_galeria($id_pag){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$imgs_cat		= $this->bd_imgs_model				->busca_cat		();
			$imgs 			= $this->bd_imgs_model				->busca_imgs	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"nav_name"		=> $nav_name																	,
								"nav_url"  		=> $nav_url																		,
								"nav_active"	=> $nav_active																	,	
								"url_atual"		=> "index.php/adm_imgs/equipamento_galeria"									,
								"url_destiny"	=> "index.php/adm_imgs/img_session_update/equipamentos_adm/equipamento_edit_form-galeria/$id_pag",
								"imgs_cat"		=> $imgs_cat																	,
								"imgs"			=> $imgs																		,
								"name_pag"		=> "Equipamentos / Adicionar Imagem "												,
								"class"			=> ""																			); 		
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm_with_imgs('adm/adm-frames/clear.php',$content);
		}
	}

	/* ---------- IMAGENS CONTROLL ---------- */
	public function img_session($controller,$class,$id){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$img_bd	= $this->bd_imgs_model	->busca_img	($id);
				
			/*--------------------------SESSIONS----------------------------------*/			
			$this->session->set_userdata("img",$img_bd['img_arquivo']);

			/*--------------------------REDIRECT---------------------------*/
			redirect("index.php/".$controller."/".$class);
		}
	}
	
	public function img_session_update($controller,$class,$id_pag,$id){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			
			//echo"controler: ".$controller."<br> class: ".$class."<br> id_pag: ".$id_pag."<br> id: ".$id; 
			
			/*--------------------------MODELS-----------------------------------*/
			$img_bd	= $this->bd_imgs_model	->busca_img	($id);
			$imgs_produto= $this->bd_imgs_model	->busca_img_produto($id_pag);
			
			foreach($imgs_produto as $img){
				$n_ordem = $img["n_ordem"];
			}
					
			$new_ordem = $n_ordem + 1;
					
			if($class == "equipamento_edit_form-galeria"){
				
				$data["id_produto"] = $id_pag;
				$data["imagem_arquivo"]	= $img_bd["img_arquivo"];
				$data["n_ordem"]	= $new_ordem;
				 
				$this->crud_model->insert("equipamentos_imgs",$data);

				/*--------------------------REDIRECT---------------------------*/
				redirect("index.php/".$controller."/equipamento_edit_form/".$id_pag);
			}
			else{
				echo"opc-2";
				/*--------------------------SESSIONS----------------------------------*/			
				$this->session->set_userdata("img",$img_bd['img_arquivo']);
				/*--------------------------REDIRECT---------------------------*/
				redirect("index.php/".$controller."/".$class."/".$id_pag);
			}
		}
	}
	
	public function img_cancel($controller,$class){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------SESSIONS-----------------------------------*/
			$this->session->unset_userdata('img');
				
			/*--------------------------REDIRECT---------------------------*/
			redirect("index.php/".$controller."/".$class);
		}
	}

	public function img_cancel_update($controller,$class,$id_pag){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------SESSIONS-----------------------------------*/
			$this->session->unset_userdata('img');
				
			/*--------------------------REDIRECT---------------------------*/
			redirect("index.php/".$controller."/".$class."/".$id_pag);
		}
	}
	
	public function delete_img($table,$colum,$id,$controller,$class){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------BANCO DE DADOS-----------------------------------*/
			$data = array();
			$data["$colum"]	= "";
			
			/*--------------------------SESSIONS-----------------------------------*/
			$this->session->unset_userdata('img');
			
			$this->adm_model->updade_content($id, $data ,$table);
				
			/*--------------------------REDIRECT---------------------------*/
			redirect("index.php/".$controller."/".$class."/".$id);
		}
	}
	
	public function delete_img_2sessions($table,$colum,$id,$controller,$class,$id_img){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------BANCO DE DADOS-----------------------------------*/
			$data = array();
			$data["$colum"]	= "";
			
			/*--------------------------SESSIONS-----------------------------------*/
			$this->session->unset_userdata("img_$id_img");
			
			$this->adm_model->updade_content($id, $data ,$table);
				
			/*--------------------------REDIRECT---------------------------*/
			redirect("index.php/".$controller."/".$class."/".$id);
		}
	}
				
}
