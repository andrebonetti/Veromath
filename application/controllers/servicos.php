<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicos extends CI_Controller {
		
	public function index(){
			
		/*--------------------------MODELS-----------------------------------*/
		$servicos	= $this->servicos_servicos_model	->busca_servicos	();	
		
		/*--------------------------HEADER-PHONE-----------------------------*/
		$equipamentos	= $this->equipamentos_equipamentos_model	->busca_all_equipamentos();
		$servicos		= $this->servicos_servicos_model			->busca_servicos		();
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}
		
		/*--------------------------CONTENT----------------------------------*/
		$content = array(	"equipamentos"	=> $equipamentos,
							"servicos"		=> $servicos	,
							"atualPage"		=> 'servicos'	,
							"adm"			=> $adm			,
							"title" 		=> "Serviços - Catalogo de serviços para locação de caminhões munck e guindastes ",
							"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fwww.veromath.com.br%2Fservico-locacao-caminhao-munck-guindaste",	
							"description" 	=> "Içamento de Equipamentos, Montagem Industrial, Remoção Técnica, Carga e descarga, Carga e descarga e Içamento com cesta aérea!");
		
		
		$this->load->template("servicos/servicos_view.php",$content);
	}
	
	public function servico_descricao($id){
			
		/*--------------------------MODELS-----------------------------------*/
		$contents		= $this->servicos_servicos_model	->busca_servico			($id);
		$servico_imgs	= $this->servicos_imgs_model		->busca_servico_imgs	($id);
        $servicos	= $this->servicos_servicos_model	->busca_servicos	();
		
		foreach ($contents as $servico){
			$titulo 	= $servico['titulo']	;
			$descricao	= $servico['descricao']	;
		}
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}
		
		/*--------------------------CONTENT----------------------------------*/
		$content = array(	"servicos"		=> $servicos							,
							"contents"		=> $contents							,
							"servico_imgs"	=> $servico_imgs						,
							"adm"			=> $adm									,
							"atualPage"		=> 'servicos'							,
							"title" 		=> "Serviço - Descrição | ".$titulo." "	,
							"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fveromath.com.br%2Findex.php%2Fcatalogo-servicos-caminhoes-munck-guindastes",	
							"description"	=> "".substr($descricao,0,140)."");
							
	
		$this->load->template("servicos/servico_descricao_view.php",$content);
		}
			
}
