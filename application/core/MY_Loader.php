<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function template($nome,$content) {
        $this->view("frames/header.php",$content);
        $this->view($nome,$content);
        $this->view("frames/footer.php",$content);
    }
		
	public function template_adm($nome,$content) {
    	$this->view("adm/adm-frames/head.php",$content);
    	$this->view($nome);
    	$this->view("adm/adm-frames/footer.php",$content);
    }

	public function template_adm_with_imgs($nome,$content) {
    	$this->view("adm/adm-frames/head.php",$content);
    	$this->view($nome);
		$this->view("adm/adm-frames/banco_de_imagens_view.php",$content);
    	$this->view("adm/adm-frames/footer.php",$content);
    }
}