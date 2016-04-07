<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_adm extends CI_Controller {
		
	/* ------ SLIDE SHOW ------ */
	
		/* ADD */	
		public function slide_show_add(){
			
			$usuario = $this->session->userdata('nome_usuario');
			if(empty($usuario)){
				$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
				redirect("adm");
			}
			else{
				
				/*--------------------------MODELS-----------------------------------*/
				$slides 		= $this->index_slide_show_model		->busca_slide	();
				$imgs_cat		= $this->bd_imgs_model				->busca_cat		();
				$imgs 			= $this->bd_imgs_model				->busca_imgs	();
				
				/*------------------------- NAV -------------------------------------*/
				$nav_name 	= array("1"	=> "Adicionar Imagens" ,"2" => "Editar Imagens");		
				$nav_url 	= array("1"	=> "index.php/home_adm/slide_show_add","2" => "index.php/home_adm/slide_show_edit");	
				$nav_active = array("1"	=> "active","2" => "");	
							
				/*--------------------------CONTENT----------------------------------*/
				$content = array(	"nav_name"		=> $nav_name								,
									"nav_url"  		=> $nav_url									,
									"nav_active"	=> $nav_active								,	
									"slides"		=> $slides									,
									"url_atual"		=> "index.php/home_adm/slide_show_add"		,
									"url_destiny"	=> "index.php/adm_insert/home_slide_show"	,
									"imgs_cat"		=> $imgs_cat								,
									"imgs"			=> $imgs									,
									"name_pag"		=> "Home / Slide-Show - Adicionar Imagens "	,
									"class"			=> ""										); 
									
				/*------------------- VIEW ---------------------------*/
				$this->load->template_adm_with_imgs('adm/home/slide_show_add_view.php',$content);
			}
		}
		
		/* EDIT */	
		public function slide_show_edit(){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			
			/*--------------------------MODELS-----------------------------------*/
			$slides 		= $this->index_slide_show_model		->busca_slide	();
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array("1"	=> "Adicionar Imagens" ,"2" => "Editar Imagens");		
			$nav_url 	= array("1"	=> "index.php/home_adm/slide_show_add","2" => "index.php/home_adm/slide_show_edit");	
			$nav_active = array("1"	=> "","2" => "active");	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"nav_name"		=> $nav_name								,
								"nav_url"  		=> $nav_url									,
								"nav_active"	=> $nav_active								,	
								"slides"		=> $slides									,
								"name_pag"		=> "Home / Slide-Show - Editar Imagens "	,
								"class"			=> ""										); 
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm('adm/home/slide_show_edit_view.php',$content);
		}
	}
	
	/* ------ HR ------ */
	
		/* EDIT */
		public function hr_edit(){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			
			/*--------------------------MODELS-----------------------------------*/
			$hrs = $this->index_hr_model->busca_hr();	
			
			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
						
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"hrs"			=> $hrs										,
								"nav_name"		=> $nav_name								,
								"nav_url"  		=> $nav_url									,
								"nav_active"	=> $nav_active								,	
								"name_pag"		=> "Home / Texto Principal - Editar texto"	,
								"class"			=> ""										); 
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm('adm/home/hr_edit_view.php',$content);
		}
	}
	
	/* ------ NEWS ------ */
	
		/* ADD */
		public function news_add(){
			
			$usuario = $this->session->userdata('nome_usuario');
			if(empty($usuario)){
				$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
				redirect("adm");
			}
			else{
	
				/*------------------------- NAV -------------------------------------*/
				$nav_name 	= array("1"	=> "Adicionar Notícia" ,"2" => "Editar Notícias");		
				$nav_url 	= array("1"	=> "index.php/home_adm/news_add","2" => "index.php/home_adm/news_edit");	
				$nav_active = array("1"	=> "active","2" => "");	
				
				$img = $this->session->userdata('img');
				if(!empty($img)){
					$class_btn_add 		= "none"	;
					$class_btn_change 	= ""	;
					$class_btn_cancel 	= ""	;
					$class_img 			= ""	;
				}else{
					$class_btn_add 		= ""	;
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
									"name_pag"		=> "Home / Noticias - Adicionar Notícia"	,
									"class"			=> ""										); 
									
				/*------------------- VIEW ---------------------------*/
				$this->load->template_adm('adm/home/news_add_view.php',$content);
				
			}
		}
		
		/* EDIT */
		public function news_edit(){
			
			$usuario = $this->session->userdata('nome_usuario');
			if(empty($usuario)){
				$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
				redirect("adm");
			}
			else{
				/*--------------------------MODELS-----------------------------------*/
				$news			= $this->index_news_model			->busca_news		();
	
				/*------------------------- NAV -------------------------------------*/
				$nav_name 	= array("1"	=> "Adicionar Notícia" ,"2" => "Editar Notícias");		
				$nav_url 	= array("1"	=> "index.php/home_adm/news_add","2" => "index.php/home_adm/news_edit");	
				$nav_active = array("1"	=> "","2" => "active");	
										
				/*--------------------------CONTENT----------------------------------*/
				$content = array(	"news"			=> $news									,	
									"nav_name"		=> $nav_name								,
									"nav_url"  		=> $nav_url									,
									"nav_active"	=> $nav_active								,	
									"name_pag"		=> "Home / Noticias - Editar Notícias"		,
									"class"			=> ""										); 
									
				/*------------------- VIEW ---------------------------*/
				$this->load->template_adm('adm/home/news_edit_view.php',$content);
				
			}
		}
		
		/* EDIT FORM */
		public function news_edit_form($id){
		
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$new			= $this->index_news_model			->busca_news_form		($id);

			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array("1"	=> "Adicionar Notícia" ,"2" => "Editar Notícias");		
			$nav_url 	= array("1"	=> "index.php/home_adm/news_add","2" => "index.php/home_adm/news_edit");	
			$nav_active = array("1"	=> "","2" => "active");	
							
			$img = $new['imagem'];
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
			
			$img_session = $this->session->userdata('img');
			if(!empty($img_session)){
				$img = $img_session;
				$btn_cancel_change = ""		; 
				$class_btn_add 	   = "none"	;
				$class_btn_change  = ""		;
				$class_btn_cancel  = ""		;
				$class_img 		   = ""		;
			}
			else{
				$btn_cancel_change = "none";
			}
					
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"new"			=> $new										,	
								"nav_name"		=> $nav_name								,
								"nav_url"  		=> $nav_url									,
								"nav_active"	=> $nav_active								,
								"btn_add"		=> $class_btn_add							,
								"btn_change"	=> $class_btn_change						,
								"btn_cancel"	=> $class_btn_cancel						,
								"cancel_change"	=> $btn_cancel_change						,
								"class_img"		=> $class_img								,	
								"img_name"		=> $img										,	
								"name_pag"		=> "Home / Noticias - Editar Notícia"		,
								"class"			=> ""										); 
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm('adm/home/news_edit_form_view.php',$content);
			
		}
	}
			

	/* ------ PORTOFOLIOS ------ */
	
	/* IMG + FORM */
	public function portofolio_edit($id){
		$usuario = $this->session->userdata('nome_usuario');
		if(empty($usuario)){
			$this->session->set_flashdata('msg-error','Efetue o login para ter acesso a essa página.');
			redirect("adm");
		}
		else{
			/*--------------------------MODELS-----------------------------------*/
			$portofolio	= $this->index_portofolios_model	->busca_portofolio	($id);

			/*------------------------- NAV -------------------------------------*/
			$nav_name 	= array();		
			$nav_url 	= array();	
			$nav_active = array();	
				
			$img = 	$portofolio['imagem'];			

			$img_session = $this->session->userdata('img');
			if(!empty($img_session)){$img = $img_session;}
					
			/*--------------------------CONTENT----------------------------------*/
			$content = array(	"portofolio"	=> $portofolio								,	
								"nav_name"		=> $nav_name								,
								"nav_url"  		=> $nav_url									,
								"nav_active"	=> $nav_active								,
								"img"			=> $img										,	
								"name_pag"		=> "Home / Editar Portofólio"				,
								"class"			=> ""										); 
								
			/*------------------- VIEW ---------------------------*/
			$this->load->template_adm('adm/home/portofolio_edit_form_view.php',$content);
			
		}
	}
	
	
}
