<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresa_adm extends CI_Controller {
		
	/* EDIT */
	public function empresa_edit(){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{			
			/*--------------------------MODELS-----------------------------------*/
			$sobre 		= $this->empresa_sobre_model 	->busca_sobre	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array("1"	=> "Editar Texto" ,"2" => "Editar Imagens");		
			$nav_url 	= array("1"	=> "index.php/empresa_adm/empresa_edit","2" => "index.php/empresa_adm/img_edit");	
			$nav_active = array("1"	=> "active","2" => "");	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"sobre"			=> $sobre										,
								"nav_name"		=> $nav_name								,
								"nav_url"  		=> $nav_url									,
								"nav_active"	=> $nav_active								,	
								"name_pag"		=> "Home / Sobre a Empresa - Editar texto"	,
								"class"			=> ""										); 
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm('adm/empresa/empresa_edit_view.php',$content);
		}
	}

	/* EDIT */
	public function img_edit(){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{			
			/*--------------------------MODELS-----------------------------------*/
			$img_1 = $this->empresa_imgs_model ->busca_img("1");	
			$img_2 = $this->empresa_imgs_model ->busca_img("2");	
		
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array("1"	=> "Editar Texto" ,"2" => "Editar Imagens");		
			$nav_url 	= array("1"	=> "index.php/empresa_adm/empresa_edit","2" => "index.php/empresa_adm/img_edit");	
			$nav_active = array("1"	=> "","2" => "active");	
				
			$imagem_1 = $img_1['imagem']; 	
			$imagem_2 = $img_2['imagem']; 	
						
			$img_1 = $this->session->userdata('img_1');
			if(!empty($img_1)){$class_btn_cancel_1 	= ""; $imagem_1 = $img_1;
			}else{$class_btn_cancel_1 = "none";}
			
			$img_2 = $this->session->userdata('img_2');
			if(!empty($img_2)){$class_btn_cancel_2 	= ""; $imagem_2 = $img_2;
			}else{$class_btn_cancel_2 = "none";}
								
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"imagem_1"		=> $imagem_1									,
								"imagem_2"		=> $imagem_2									,
								"nav_name"		=> $nav_name									,
								"nav_url"  		=> $nav_url										,
								"nav_active"	=> $nav_active									,
								"class_cancel_1"=> $class_btn_cancel_1							,	
								"class_cancel_2"=> $class_btn_cancel_2							,
								"name_pag"		=> "Home / Sobre a Empresa - Editar imagens"	,
								"class"			=> "com-imgs"								); 
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm('adm/empresa/img_edit_view.php',$content);
		}
	}
			
}
