<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm extends CI_Controller{

		/*--------- LOGIN ------------*/
		public function index(){					
			$content = array("class"=>"sign-in","name_pag"=>"Login","nav_name"=>"Login","nav_active"=>"Login","nav_url"=>"Login");
			$this->load->template_adm('adm/signin.php',$content);		
		}
			
		public function login(){

		/*--- POST -------*/
		$nome = $this->input->post("nome");
		$senha = $this->input->post("senha");

		/*--- VALIDA -----*/
		$result = $this->adm_model->valida_usuario($nome,$senha);			

		var_dump($result);
		/*--- REDIRECT ---*/
		if (!empty ($result)){
			$nome_usuario = $result['nome'];
			$this->session->set_userdata("nome_usuario",$nome_usuario);			
			redirect("index.php/home");
		}
		else{
			$this->session->set_flashdata('msg-error',"A senha que você digitou está incorreta. Tente novamente (tenha certeza de que a função Caps Lock está desligada).");
			redirect("index.php/adm");
		}
		
	}

	/*--------- LOGOUT ------------*/
		public function logout(){
			
			$this->session->sess_destroy();
			redirect("index.php/home");
			
		}
}