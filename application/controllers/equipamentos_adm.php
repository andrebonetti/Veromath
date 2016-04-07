<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Equipamentos_adm extends CI_Controller {
		
	/* ------ SERVICOS ------ */
	
		/* ADD */	
		public function equipamento_add(){
			
			$usuario = $this->session->userdata('nome_usuario');
			if(empty($usuario)){
				$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
				redirect("adm");
			}
			else{			
				/*------------------------- NAV -------------------------------------*/
				$nav_name 	= array("1"	=> "Adicionar Equipamento" ,"2" => "Editar Equipamentos");		
				$nav_url 	= array("1"	=> "index.php/equipamentos_adm/equipamento_add","2" => "index.php/equipamentos_adm/equipamento_edit");	
				$nav_active = array("1"	=> "active","2" => "");	
					
				$img = $this->session->userdata('img');
				if(!empty($img)){
					$class_btn_add 		= "none"	;
					$class_btn_change 	= ""		;
					$class_btn_cancel 	= ""		;
					$class_img 			= ""		;
				}else{
					$class_btn_add 		= ""		;
					$class_btn_change 	= "none"	;
					$class_btn_cancel 	= "none"	;
					$class_img 			= "none"	;
				}	
						
				/*--------------------------CONTENT----------------------------------*/
				$content = array(	"nav_name"		=> $nav_name								,
									"nav_url"  		=> $nav_url									,
									"nav_active"	=> $nav_active								,
									"btn_add"		=> $class_btn_add							,
									"btn_change"	=> $class_btn_change						,
									"btn_cancel"	=> $class_btn_cancel						,
									"class_img"		=> $class_img								,	
									"img_name"		=> $img										,	
									"url_destiny"	=> "index.php/adm_insert/servico"			,
									"name_pag"		=> "Equipamentos / Adicionar Equipamentos "	,
									"class"			=> "com-imgs"								); 
									
				/*------------------- VIEW ---------------------------*/
				$this->load->template_adm('adm/equipamentos/equipamentos_add_form_view.php',$content);
			}
		}
		/* EDIT */
		public function equipamento_edit(){
			
			$usuario = $this->session->userdata('nome_usuario');
			if(empty($usuario)){
				$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
				redirect("adm");
			}
			else{
				
				/*--------------------------MODELS-----------------------------------*/
				$equipamentos	= $this->equipamentos_equipamentos_model	->busca_all_equipamentos ();
					
				/*------------------------- NAV -------------------------------------*/
				$nav_name 	= array("1"	=> "Adicionar Equipamento" ,"2" => "Editar Equipamentos");		
				$nav_url 	= array("1"	=> "index.php/equipamentos_adm/equipamento_add","2" => "index.php/equipamentos_adm/equipamento_edit");	
				$nav_active = array("1"	=> "","2" => "active");	
							
				/*--------------------------CONTENT----------------------------------*/
				$content = array(	"equipamentos"	=> $equipamentos							,
									"nav_name"		=> $nav_name								,
									"nav_url"  		=> $nav_url									,
									"nav_active"	=> $nav_active								,	
									"url_destiny"	=> "index.php/adm_insert/equipamento"		,
									"name_pag"		=> "Equipamentos / Lista de Equipamentos "	,
									"class"			=> "equipamentos"							); 
									
				/*------------------- VIEW ---------------------------*/
				$this->load->template_adm('adm/equipamentos/equipamentos_edit_view.php',$content);
			}
		}
		/* EDIT FORM */
		public function equipamento_edit_form($id){
			
			$usuario = $this->session->userdata('nome_usuario');
			if(empty($usuario)){
				$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
				redirect("adm");
			}
			else{
				
				/*--------------------------MODELS-----------------------------------*/
				$equipamento_content	= $this->equipamentos_equipamentos_model	->busca_equipamento		($id);
				$equipamento_imgs		= $this->equipamentos_imgs_model			->busca_equipamento_imgs($id);
					
				$nav_name 	= array("1"	=> "Adicionar Equipamento" ,"2" => "Editar Equipamentos");		
				$nav_url 	= array("1"	=> "index.php/equipamentos_adm/equipamento_add","2" => "index.php/equipamentos_adm/equipamento_edit");	
				$nav_active = array("1"	=> "","2" => "active");	
				
				$imagem = $equipamento_content['img_principal']; 	
					
				/* PRINCIPAL */		
				$img = $this->session->userdata('img');
				if(!empty($img)){
					$class_btn_cancel 	= ""		; 
					$class_btn_add		= "none"	;
					$class_btn_change	= ""		;
					$class_btn_delete 	= "none"	;
					$class_img			= ""		;
					$imagem				= $img	;
				}		
				else{
					$class_btn_cancel 	= "none"	; 
					$class_btn_add		= "none"	;
					$class_btn_change 	= ""		;
					$class_btn_delete 	= ""		;
					$class_img			= ""		;
				}
				
				if($imagem == NULL){
					$class_img 			= "none" 	;
					$class_btn_add 		= ""		;
					$class_btn_change 	= "none"	;
				}
				
				$img_from_bd = $equipamento_content['img_principal']; 	
				if($img_from_bd ==  NULL){
					$class_btn_cancel = "none"	; 
					$class_btn_delete = "none"	;
				}
				
				if(($img_from_bd == NULL)&&(!empty($img))){
					$class_btn_cancel = ""		; 
				} 
				
				/*--------------------------CONTENT----------------------------------*/
				$content = array(	"equipamento"			=> $equipamento_content						,
									"equipamento_imgs"		=> $equipamento_imgs						,
									"imagem"				=> $imagem									,
									"nav_name"				=> $nav_name								,
									"nav_url"  				=> $nav_url									,
									"nav_active"			=> $nav_active								,
									"class_add"				=> $class_btn_add							,
									"class_change"			=> $class_btn_change						,
									"class_cancel"			=> $class_btn_cancel						,
									"class_delete"			=> $class_btn_delete						,
									"class_img"				=> $class_img								,	
									"url_destiny"			=> "index.php/adm_insert/servico"			,
									"name_pag"				=> "Equipamentos / Editar Equipamento"		,
									"class"					=> "com-imgs"								); 
									
				/*------------------- VIEW ---------------------------*/
				$this->load->template_adm('adm/equipamentos/equipamento_edit_form_view.php',$content);
			}
		}
		
}
