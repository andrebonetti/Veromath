<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicos_adm extends CI_Controller {
		
	/* ------ SERVICOS ------ */
	
		/* ADD */	
		public function servico_add(){
			
			$usuario = $this->session->userdata('nome_usuario');
			if(empty($usuario)){
				$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
				redirect("adm");
			}
			else{
				
				
				/*------------------------- NAV -------------------------------------*/
				$nav_name 	= array("1"	=> "Adicionar Serviço" ,"2" => "Editar Serviços");		
				$nav_url 	= array("1"	=> "index.php/servicos_adm/servico_add","2" => "index.php/servicos_adm/servicos_edit");	
				$nav_active = array("1"	=> "active","2" => "");	
					
				$img_1 = $this->session->userdata('img_1');
				if(!empty($img_1)){
					$class_btn_add_1 		= "none"	;
					$class_btn_change_1 	= ""	;
					$class_btn_cancel_1 	= ""	;
					$class_img_1 			= ""	;
				}else{
					$class_btn_add_1 		= ""	;
					$class_btn_change_1 	= "none"	;
					$class_btn_cancel_1 	= "none"	;
					$class_img_1 			= "none"	;
				}	
				
				$img_2 = $this->session->userdata('img_2');
				if(!empty($img_2)){
					$class_btn_add_2 		= "none"	;
					$class_btn_change_2 	= ""	;
					$class_btn_cancel_2 	= ""	;
					$class_img_2			= ""	;
				}else{
					$class_btn_add_2 		= ""	;
					$class_btn_change_2 	= "none"	;
					$class_btn_cancel_2 	= "none"	;
					$class_img_2 			= "none"	;
				}	
				

							
				/*--------------------------CONTENT----------------------------------*/
				$content = array(	"nav_name"		=> $nav_name								,
									"nav_url"  		=> $nav_url									,
									"nav_active"	=> $nav_active								,
									"btn_add_1"		=> $class_btn_add_1							,
									"btn_change_1"	=> $class_btn_change_1						,
									"btn_cancel_1"	=> $class_btn_cancel_1						,
									"class_img_1"	=> $class_img_1								,	
									"img_name_1"	=> $img_1									,
									"btn_add_2"		=> $class_btn_add_2							,
									"btn_change_2"	=> $class_btn_change_2						,
									"btn_cancel_2"	=> $class_btn_cancel_2						,
									"class_img_2"	=> $class_img_2								,	
									"img_name_2"	=> $img_2									,	
									"url_destiny"	=> "index.php/adm_insert/servico"			,
									"name_pag"		=> "Serviços / Adicionar Serviço "			,
									"class"			=> "com-imgs"								); 
									
				/*------------------- VIEW ---------------------------*/
				$this->load->template_adm('adm/servicos/servico_add_form_view.php',$content);
			}
		}

		public function servicos_edit(){
			
			$usuario = $this->session->userdata('nome_usuario');
			if(empty($usuario)){
				$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
				redirect("adm");
			}
			else{
				
				/*--------------------------MODELS-----------------------------------*/
				$servicos	= $this->servicos_servicos_model	->busca_servicos	();	
					
				/*------------------------- NAV -------------------------------------*/
				$nav_name 	= array("1"	=> "Adicionar Serviço" ,"2" => "Editar Serviços");		
				$nav_url 	= array("1"	=> "index.php/servicos_adm/servico_add","2" => "index.php/servicos_adm/servicos_edit");	
				$nav_active = array("1"	=> "","2" => "active");	
							
				/*--------------------------CONTENT----------------------------------*/
				$content = array(	"servicos"		=> $servicos								,
									"nav_name"		=> $nav_name								,
									"nav_url"  		=> $nav_url									,
									"nav_active"	=> $nav_active								,	
									"url_destiny"	=> "index.php/adm_insert/servico"			,
									"name_pag"		=> "Serviços / Lista de Serviços "			,
									"class"			=> "com-imgs"								); 
									
				/*------------------- VIEW ---------------------------*/
				$this->load->template_adm('adm/servicos/servicos_edit_view.php',$content);
			}
		}

		public function servico_edit_form($id){
			
			$usuario = $this->session->userdata('nome_usuario');
			if(empty($usuario)){
				$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
				redirect("adm");
			}
			else{
				
				/*--------------------------MODELS-----------------------------------*/
				$servicos	= $this->servicos_servicos_model	->busca_servico_form($id);	
					
				/*------------------------- NAV -------------------------------------*/
				$nav_name 	= array("1"	=> "Adicionar Serviço" ,"2" => "Editar Serviços");		
				$nav_url 	= array("1"	=> "index.php/servicos_adm/servico_add","2" => "index.php/servicos_adm/servicos_edit");	
				$nav_active = array("1"	=> "","2" => "active");	
				
				$imagem_1 = $servicos['img_principal']; 	
				$imagem_2 = $servicos['img_menu']; 	
					
				/* PRINCIPAL */		
				$img_1 = $this->session->userdata('img_1');
				if(!empty($img_1)){
					$class_btn_cancel_1 	= ""		; 
					$class_btn_add_1		= "none"	;
					$class_btn_change_1 	= ""		;
					$class_btn_delete_1 	= ""		;
					$class_img_1			= ""		;
					$imagem_1				= $img_1	;
				}		
				else{
					$class_btn_cancel_1 	= "none"	; 
					$class_btn_add_1		= "none"	;
					$class_btn_change_1 	= ""		;
					$class_btn_delete_1 	= "none"	;
					$class_img_1			= ""		;
				}
				
				if($imagem_1 == NULL){
					$class_img_1 		= "none" 	;
					$class_btn_add_1 	= ""		;
					$class_btn_change_1 = "none"	;
				}
				
				$img_from_bd_1 = $servicos['img_principal']; 	
				if($img_from_bd_1 ==  NULL){
					$class_btn_cancel_1 = "none"	; 
				}
				
				/* MENU */
				$img_2 = $this->session->userdata('img_2');
				if(!empty($img_2)){
					$class_btn_cancel_2 	= ""		; 
					$class_btn_add_2		= "none"	;
					$class_btn_change_2 	= ""		;
					$class_btn_delete_2 	= ""		;
					$class_img_2			= ""		;
					$imagem_2				= $img_2	;
				}		
				else{
					$class_btn_cancel_2 	= "none"	; 
					$class_btn_add_2		= "none"	;
					$class_btn_change_2 	= ""		;
					$class_btn_delete_2 	= "none"	;
					$class_img_2			= ""		;
				}
				
				if($imagem_2 == NULL){
					$class_img_2 		= "none" 	;
					$class_btn_add_2 	= ""		;
					$class_btn_change_2 = "none"	;
				}
				
				$img_from_bd_2 = $servicos['img_principal']; 	
				if($img_from_bd_2 ==  NULL){
					$class_btn_cancel_1 = "none"	; 
				}
					
				/*--------------------------CONTENT----------------------------------*/
				$content = array(	"servicos"		=> $servicos								,
									"imagem_1"		=> $imagem_1								,
									"imagem_2"		=> $imagem_2								,
									"nav_name"		=> $nav_name								,
									"nav_url"  		=> $nav_url									,
									"nav_active"	=> $nav_active								,
									"class_add_1"	=> $class_btn_add_1							,
									"class_change_1"=> $class_btn_change_1						,
									"class_cancel_1"=> $class_btn_cancel_1						,
									"class_delete_1"=> $class_btn_delete_1						,
									"class_img_1"	=> $class_img_1								,	
									"class_add_2"	=> $class_btn_add_2							,
									"class_change_2"=> $class_btn_change_2						,
									"class_cancel_2"=> $class_btn_cancel_2						,
									"class_delete_2"=> $class_btn_delete_2						,
									"class_img_2"	=> $class_img_2								,
									"url_destiny"	=> "index.php/adm_insert/servico"			,
									"name_pag"		=> "Serviços / Editar Serviço "				,
									"class"			=> "com-imgs"								); 
									
				/*------------------- VIEW ---------------------------*/
				$this->load->template_adm('adm/servicos/servico_edit_form_view.php',$content);
			}
		}
		
}
