<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
        
            $this->output->enable_profiler(TRUE);    
        
		    $config['upload_path'] = './img/bd_img/';
            $config['allowed_types'] = 'gif|jpg|png';

           	$this->load->library('upload', $config);
            
           	$data_add = array();
			
			$file_1 = $this->upload->do_upload("file_1");
            if (!empty($file_1))
            {
            	$data = $this->upload->data(); 
                $categoria 		= 	$this->input->post("categoria");
                if($categoria == "Equipamentos")	{ $id_categoria = "1";}
                if($categoria == "Diversos")		{ $id_categoria = "2";}
                if($categoria == "Serviços")		{ $id_categoria = "3";}			
                if($categoria == "Serviços Menu")	{ $id_categoria = "4";}
                else{$id_categoria = "0";}

                $titulo 		= 	$this->input->post("titulo");
                $alt 			= 	$this->input->post("alt");

                $data_add = array(	"id_categoria" 	  => $id_categoria			,
                                    "categoria" 	  => $categoria				,
                                    "img_titulo" 	=> $titulo					,
                                    "img_arquivo" 	=> $img_content['file_name'],
                                    "img_alt"	 	=> $alt						);
                $data_add["img_arquivo"] = $data["file_name"];
                $this->crud_model->insert("banco_de_imagens",$data_add);
            }
            $file_2 = $this->upload->do_upload("file_2");
            if (!empty($file_2))
            {
            	$data = $this->upload->data(); 
                $categoria 		= 	$this->input->post("categoria");
                if($categoria == "Equipamentos")	{ $id_categoria = "1";}
                if($categoria == "Diversos")		{ $id_categoria = "2";}
                if($categoria == "Serviços")		{ $id_categoria = "3";}			
                if($categoria == "Serviços Menu")	{ $id_categoria = "4";}
                else{$id_categoria = "0";}

                $titulo 		= 	$this->input->post("titulo");
                $alt 			= 	$this->input->post("alt");

                $data_add = array(	"id_categoria" 	  => $id_categoria			,
                                    "categoria" 	  => $categoria				,
                                    "img_titulo" 	=> $titulo					,
                                    "img_arquivo" 	=> $img_content['file_name'],
                                    "img_alt"	 	=> $alt						);
                $data_add["img_arquivo"] = $data["file_name"];
                $this->crud_model->insert("banco_de_imagens",$data_add);
            }
            $file_3 = $this->upload->do_upload("file_3");
            if (!empty($file_3))
            {
            	$data = $this->upload->data(); 
                $categoria 		= 	$this->input->post("categoria");
                if($categoria == "Equipamentos")	{ $id_categoria = "1";}
                if($categoria == "Diversos")		{ $id_categoria = "2";}
                if($categoria == "Serviços")		{ $id_categoria = "3";}			
                if($categoria == "Serviços Menu")	{ $id_categoria = "4";}
                else{$id_categoria = "0";}

                $titulo 		= 	$this->input->post("titulo");
                $alt 			= 	$this->input->post("alt");

                $data_add = array(	"id_categoria" 	  => $id_categoria			,
                                    "categoria" 	  => $categoria				,
                                    "img_titulo" 	=> $titulo					,
                                    "img_arquivo" 	=> $img_content['file_name'],
                                    "img_alt"	 	=> $alt						);
                $data_add["img_arquivo"] = $data["file_name"];
                $this->crud_model->insert("banco_de_imagens",$data_add);
            }
            $file_4 = $this->upload->do_upload("file_4");
            if (!empty($file_4))
            {
            	$data = $this->upload->data(); 
                $categoria 		= 	$this->input->post("categoria");
                if($categoria == "Equipamentos")	{ $id_categoria = "1";}
                if($categoria == "Diversos")		{ $id_categoria = "2";}
                if($categoria == "Serviços")		{ $id_categoria = "3";}			
                if($categoria == "Serviços Menu")	{ $id_categoria = "4";}
                else{$id_categoria = "0";}

                $titulo 		= 	$this->input->post("titulo");
                $alt 			= 	$this->input->post("alt");

                $data_add = array(	"id_categoria" 	  => $id_categoria			,
                                    "categoria" 	  => $categoria				,
                                    "img_titulo" 	=> $titulo					,
                                    "img_arquivo" 	=> $img_content['file_name'],
                                    "img_alt"	 	=> $alt						);
                $data_add["img_arquivo"] = $data["file_name"];
                $this->crud_model->insert("banco_de_imagens",$data_add);
            }
            $file_5 = $this->upload->do_upload("file_5");
            if (!empty($file_5))
            {
            	$data = $this->upload->data(); 
                $categoria 		= 	$this->input->post("categoria");
                if($categoria == "Equipamentos")	{ $id_categoria = "1";}
                if($categoria == "Diversos")		{ $id_categoria = "2";}
                if($categoria == "Serviços")		{ $id_categoria = "3";}			
                if($categoria == "Serviços Menu")	{ $id_categoria = "4";}
                else{$id_categoria = "0";}

                $titulo 		= 	$this->input->post("titulo");
                $alt 			= 	$this->input->post("alt");

                $data_add = array(	"id_categoria" 	  => $id_categoria			,
                                    "categoria" 	  => $categoria				,
                                    "img_titulo" 	=> $titulo					,
                                    "img_arquivo" 	=> $img_content['file_name'],
                                    "img_alt"	 	=> $alt						);
                $data_add["img_arquivo"] = $data["file_name"];
                $this->crud_model->insert("banco_de_imagens",$data_add);
            }
            $file_6 = $this->upload->do_upload("file_6");
            if (!empty($file_6))
            {
            	$data = $this->upload->data(); 
                $categoria 		= 	$this->input->post("categoria");
                if($categoria == "Equipamentos")	{ $id_categoria = "1";}
                if($categoria == "Diversos")		{ $id_categoria = "2";}
                if($categoria == "Serviços")		{ $id_categoria = "3";}			
                if($categoria == "Serviços Menu")	{ $id_categoria = "4";}
                else{$id_categoria = "0";}

                $titulo 		= 	$this->input->post("titulo");
                $alt 			= 	$this->input->post("alt");

                $data_add = array(	"id_categoria" 	  => $id_categoria			,
                                    "categoria" 	  => $categoria				,
                                    "img_titulo" 	=> $titulo					,
                                    "img_arquivo" 	=> $img_content['file_name'],
                                    "img_alt"	 	=> $alt						);
                $data_add["img_arquivo"] = $data["file_name"];
                $this->crud_model->insert("banco_de_imagens",$data_add);
            }
            $file_7 = $this->upload->do_upload("file_7");
            if(!empty($file_7))
            {
            	$data = $this->upload->data(); 
                $categoria 		= 	$this->input->post("categoria");
                if($categoria == "Equipamentos")	{ $id_categoria = "1";}
                if($categoria == "Diversos")		{ $id_categoria = "2";}
                if($categoria == "Serviços")		{ $id_categoria = "3";}			
                if($categoria == "Serviços Menu")	{ $id_categoria = "4";}
                else{$id_categoria = "0";}

                $titulo 		= 	$this->input->post("titulo");
                $alt 			= 	$this->input->post("alt");

                $data_add = array(	"id_categoria" 	  => $id_categoria			,
                                    "categoria" 	  => $categoria				,
                                    "img_titulo" 	=> $titulo					,
                                    "img_arquivo" 	=> $img_content['file_name'],
                                    "img_alt"	 	=> $alt						);
                $data_add["img_arquivo"] = $data["file_name"];
                $this->crud_model->insert("banco_de_imagens",$data_add);
            }
                
                /* ------------------------ RESULT ----------------------------------*/
                $url_atual 	= 	$this->input->post("url_atual");

                $this->session->set_flashdata('msg-success',"Imagem adicionada com sucesso!");
                redirect("$url_atual");
	}
}
?>