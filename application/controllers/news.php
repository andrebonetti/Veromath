<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
		
	public function index($id){
			
		/*--------------------------MODELS-----------------------------------*/
		$new_content	= $this->index_news_model	->busca_new_content	($id);
		$news			= $this->index_news_model			->busca_news		();
		
		foreach ($new_content as $content){
			$titulo 	= $content['titulo'];
			$descricao	= $content['texto'];
		}
		
		/*--------------------------HEADER-PHONE-----------------------------*/
		$equipamentos	= $this->equipamentos_equipamentos_model	->busca_all_equipamentos();
		$servicos		= $this->servicos_servicos_model			->busca_servicos		();
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}
		
				
		$content = array( 	"equipamentos"	=> $equipamentos			,
							"servicos"		=> $servicos				,
							"new_content"	=> $new_content				,
							"news"			=> $news					,
							"adm"			=> $adm						,
							'atualPage'		=> 'home'					,
							"title" 		=> "Notícia - ".$titulo		,
							"url_markup"	=> ""						,	
							"description"	=> substr($descricao, 0, 140));
							
		
		$this->load->template("news/news_view.php",$content);
	}
			
}
