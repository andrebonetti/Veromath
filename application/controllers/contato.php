<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller {
		
	public function index(){
		
		/*--------------------------HEADER-PHONE-----------------------------*/
		$equipamentos	= $this->equipamentos_equipamentos_model	->busca_all_equipamentos();
		$servicos		= $this->servicos_servicos_model			->busca_servicos		();
		
		/*-------------------------- ADM VALIDATION -------------------------*/
		$adm = $this->session->userdata('nome_usuario');
		if(empty($adm)){$adm = "";}else{}
		
				
		$content = array( 	"equipamentos"	=> $equipamentos			,
							"servicos"		=> $servicos				,
							"atualPage"		=> 'contato'				,
							"title" 		=> "Contato - Fale conosco"	, 
							"adm"			=> $adm						,
							"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fveromath.com.br%2Findex.php%2Ffale-conosco",					
							"description"	=> "Nos mande um e-mail para fazermos orçamento da locação de caminhões munck e guindastes, Tire duvidas e nos de sugestões!",);
		
		$this->load->template("contato/contato_view.php",$content);
	}
	
	public function email_send(){
	
		//CONTEUDO
		$assunto = $this->input->post('assunto');
		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$telefone = $this->input->post('tel');
		$mensagem = $this->input->post('mensagem');
	
		$content_email = array(	"nome" => $nome ,
								"email" => $email ,
								"telefone" => $telefone,
								"assunto" => $assunto,
								"mensagem" => $mensagem);
			
		$conteudo = $this->load->view('contato/email_content.php',$content_email, TRUE);
	
		//CONFIGURA E-MAIL
		$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => '465',
				'smtp_user' => 'andrebonetti2@gmail.com',
				'smtp_pass' => 'flatron500G',
				'mailtype'  => 'html',
				'charset'   => 'utf-8');
	
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
	
		//SET CONTEUDO
		$this->email->from( $email, $nome);
		$this->email->to('comercial@veromath.com.br');
				
		$this->email->subject("Site Veromath - ".$assunto);
		$this->email->message($conteudo);
	
		//RESULTADO
		if($this->email->send()){
			$msg = "E-mail enviado com sucesso !";
			$content = array("atualPage" => "Contato",
					"mensagem" =>	$msg);
					$this->session->set_flashdata('msg-success',"Email enviado com sucesso!");
					redirect("contato");
					echo "ok";
		}
		else{
			echo "Erro ao enviar mensagem";
			echo $this->email->print_debugger();
		}
	
	}
			
}