<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Equipamentos extends CI_Controller {
		
	public function index(){
			
		/*--------------------------MODELS-----------------------------------*/
		$equipamentos	= $this->equipamentos_equipamentos_model	->busca_equipamentos	();
		$categorias		= $this->equipamentos_categoria_model		->busca_categorias		();
		
		/*--------------------------HEADER-PHONE-----------------------------*/
		$equipamentos	= $this->equipamentos_equipamentos_model	->busca_all_equipamentos();
		$servicos		= $this->servicos_servicos_model			->busca_servicos		();
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}

		/*--------------------------CONTENT----------------------------------*/
		$content = array(	"equipamentos"	=> $equipamentos	,
							"servicos"		=> $servicos		,
							"categorias"	=> $categorias		,
							"id_categoria"	=> "3"				,
							"atualPage"		=> 'equipamentos'	,
							"adm"			=> $adm				,
							"title" 		=> "Equipamentos - Conheça nossos Caminhões Munck (Guindastes articulados) e Guindastes",
							"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fwww.veromath.com.br%2Fcaminhoes-munck-guindastes",	
							"description"	=> "A Veromath oferece o que há de mais moderno em equipamentos, conheça nossos Caminhões Munk e Guindastes. ");
		
		$this->load->template("equipamentos/equipamentos_view.php",$content);
	}
	
	public function equipamentos_categoria($id){
			
		/*--------------------------MODELS-----------------------------------*/
		$equipamentos	= $this->equipamentos_equipamentos_model	->busca_equipamentos_categoria	($id);
		$categorias		= $this->equipamentos_categoria_model		->busca_categorias				();
		
		/*--------------------------HEADER-PHONE-----------------------------*/
		$servicos		= $this->servicos_servicos_model	->busca_servicos	();
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}
		
		/*--------------------------CONTENT----------------------------------*/
		$content = array(	"servicos"		=> $servicos		,
							"equipamentos"	=> $equipamentos	,
							"categorias"	=> $categorias		,
							"id_categoria" 	=> $id				,
							"atualPage"		=> 'equipamentos'	,
							"adm"			=> $adm				,
							"title" 		=> "".muda_equipamento_title($id)."",
							"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fveromath.com.br%2Findex.php%2Fcatalogo-equipamentos-caminhoes-munck-guindastes",	
							"description"	=> "".muda_equipamento_title($id)." - A Veromath oferece o que há de mais moderno em equipamentos, conheça nossos Caminhões Munk e Guindastes. ");
							
		$this->load->template("equipamentos/equipamentos_view.php",$content);
	}
	
	public function equipamento_descricao($id){
		
		/*--------------------------MODELS-----------------------------------*/
		$categorias				= $this->equipamentos_categoria_model		->busca_categorias		();
		$equipamento_content	= $this->equipamentos_equipamentos_model	->busca_equipamento		($id);
		$equipamento_imgs		= $this->equipamentos_imgs_model			->busca_equipamento_imgs($id);
		

			$id_equip 			= $equipamento_content["id"]	;
			$id_categoria 		= $equipamento_content["id_categoria"]	;
			$nome				= $equipamento_content['nome']			;
			$description		= $equipamento_content['descricao'];
			$img_principal		= $equipamento_content['img_principal'];
			
		/*--------------------------HEADER-PHONE-----------------------------*/
		$equipamentos	= $this->equipamentos_equipamentos_model	->busca_equipamentos	();
		$servicos		= $this->servicos_servicos_model			->busca_servicos		();
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}
		
		$content = array(	"servicos"			=> $servicos				,
                            "equipamento"       => $equipamento_content     ,
							"equipamentos"		=> $equipamentos			,			
							"equipamento_imgs"	=> $equipamento_imgs		,
							"categorias"		=> $categorias				,
							"id_equip"			=> $id_equip				,
							"id_categoria"		=> $id_categoria			,
							"nome"				=> $nome					,
							"description"		=> $description				,
							"img_principal"		=> $img_principal			,
							"adm"				=> $adm						,
							"atualPage"			=> 'equipamentos'			,
							"title" 			=> "Equipamento | ".$nome."",
							"description"		=> $description				,
							"url_markup"		=> "http://validator.w3.org/check?uri=http%3A%2F%2Fveromath.com.br%2Findex.php%2Fcatalogo-equipamentos-caminhoes-munck-guindastes");
							
		$this->load->template("equipamentos/equipamento_descricao_view.php",$content);
	}
			
}