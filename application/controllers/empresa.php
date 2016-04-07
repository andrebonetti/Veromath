<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresa extends CI_Controller {
		
	public function index(){
			
		/*--------------------------MODELS-----------------------------------*/
		$sobre 		= $this->empresa_sobre_model 		->busca_sobre		();
		$sobre_imgs	= $this->empresa_imgs_model 		->busca_imgs		();	
		$servicos	= $this->servicos_servicos_model	->busca_servicos	();
		
		/*--------------------------HEADER-PHONE-----------------------------*/
		$equipamentos	= $this->equipamentos_equipamentos_model	->busca_all_equipamentos();
		$servicos		= $this->servicos_servicos_model			->busca_servicos		();
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}

		/*--------------------------CONTENT----------------------------------*/
		$content = array( 	"equipamentos"	=> $equipamentos,
							"servicos"		=> $servicos	,
							"sobre"			=> $sobre		,
							"sobre_imgs"	=> $sobre_imgs	,
							"atualPage"		=> 'empresa'	,
							"adm"			=> $adm			,
							"title" 		=> "Empresa - História, missão, visão e valores da empresa Veromath",
							"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fwww.veromath.com.br%2Fsobre-empresa-munck-veromath",	
							"description"	=> "A empresa possui frota própria de guindastes articulados - munck, guindastes telescópicos, caminhões truck e carretas para carga seca. Dentre os guindastes - muncks disponíveis para locação");
		
		$this->load->template("empresa/empresa_view.php",$content);
	}
			
}
