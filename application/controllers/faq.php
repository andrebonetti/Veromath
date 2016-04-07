<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq extends CI_Controller {
	
	public function index(){
		
		$this->output->enable_profiler(FALSE);
			
		/*--------------------------MODELS-----------------------------------*/
		$equipamento_duvs	= $this->faq_model		->busca_faqs		('equipamento')	;
		$servico_duvs		= $this->faq_model		->busca_faqs		('servico')		;
		
		$img_faq_equip 	= $this->faq_img_model->busca_faq_imgs('1');
		$img_faq_serv 	= $this->faq_img_model->busca_faq_imgs('2');
			
		/*--------------------------HEADER-PHONE-----------------------------*/
		$equipamentos	= $this->equipamentos_equipamentos_model	->busca_all_equipamentos();
		$servicos		= $this->servicos_servicos_model			->busca_servicos		();
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}
		
				
		$content = array( 	"equipamentos"		=> $equipamentos		,
							"servicos"			=> $servicos			,
							"img_equip"			=> $img_faq_equip		,
							"img_serv"			=> $img_faq_serv		,			
							"equipamento_duvs"	=> $equipamento_duvs	,
							"servico_duvs"		=> $servico_duvs		,
							"adm"				=> $adm					,
							"atualPage"			=> 'faq'				,
							"title" 			=> "FAQ | Tire suas dúvidas a respeito de Caminhões Munck, Guindastes e nossos Serviços",
							"url_markup"		=> "http://validator.w3.org/check?uri=http%3A%2F%2Fwww.veromath.com.br%2Fduvidas-caminhoes-munck-e-guindastes",	
							"description" 		=> "FAQ | Duvidas sobre Caminhões munck e guindastes e seus serviços!");
		
		
		$this->load->template("faq/faq_view.php",$content);
	}

	public function faq_descricao($id){
		
		/*--------------------------MODELS-----------------------------------*/
		$faq_det	= $this->faq_model->busca_pergunta($id);
		$equipamento_duvs	= $this->faq_model		->busca_faqs		('equipamento')	;
		$servico_duvs		= $this->faq_model		->busca_faqs		('servico')		;
			
		/*--------------------------HEADER-PHONE-----------------------------*/
		$equipamentos	= $this->equipamentos_equipamentos_model	->busca_equipamentos	();
		$servicos		= $this->servicos_servicos_model			->busca_servicos		();
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}
		
		$resposta_desc = substring($faq_det['resposta'],"165");	
				
		$content = array( 	"equipamentos"		=> $equipamentos		,
							"servicos"			=> $servicos			,	
							"equipamento_duvs"	=> $equipamento_duvs	,
							"servico_duvs"		=> $servico_duvs		,	
							"faq_detalhe"		=> $faq_det				,
							"atualPage"			=> 'faq'				,
							"adm"				=> $adm					,
							"title" 			=> "FAQ | ".$faq_det['pergunta']."?",
							"url_markup"		=> "http://validator.w3.org/check?uri=http%3A%2F%2Fveromath.com.br%2Findex.php%2Fduvidas-frequentes-sobre-caminhoes-munck-e-guindastes",	
							"description" 		=> $resposta_desc."...");
		
		
		$this->load->template("faq/faq_detalhe.php",$content);
	}
			
}