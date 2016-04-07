<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
		
	public function index(){
			
		/*--------------------------MODELS-----------------------------------*/
		$slides 		= $this->index_slide_show_model		->busca_slide		();
		$hrs			= $this->index_hr_model				->busca_hr			();	
		$news			= $this->index_news_model			->busca_news		();
		$servicos		= $this->servicos_servicos_model			->busca_servicos		();   
        $caminhoes_munck = $this->equipamentos_equipamentos_model   ->busca_equipamentos_home(1);
		$guindastes      = $this->equipamentos_equipamentos_model   ->busca_equipamentos_home(2);
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}
		
		/*--------------------------SESSIONS DESTROY-----------------------------------*/
		$this->session->unset_userdata("img");
		$this->session->unset_userdata("img_1");
		$this->session->unset_userdata("img_2");
			
		/*--------------------------CONTENT----------------------------------*/
		$content = array(	"slides"		    => $slides		,
							"hrs"			    => $hrs			,
							"news"			    => $news		,
							"caminhoes_munck"   => $caminhoes_munck,
							"guindastes"	    => $guindastes,
							"servicos"		    => $servicos	,
							"atualPage"		    => 'home'		,
							"adm"			    => $adm			,
							"title" 		    => ""		,
							"url_markup"	    => "http://validator.w3.org/check?uri=http%3A%2F%2Fveromath.com.br",	
							"description"	    => "A Veromath é uma empresa especializada em locação de caminhão Munck - guindaste articulado e guindaste telescopico. Carga e descarga, Remoção técnica, montagem industrial. ");
		
		$this->load->template("home/home_view.php",$content);
	}
			
}
