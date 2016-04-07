<?php

	function active_validation($atualPage, $page){
	if($page == $atualPage){return "active";}}
	
	function active_slide($n_ordem){
	if($n_ordem == 1){return "active";}
	}
	
	function active_equipamento_categoria($id_atual,$id){
		if($id_atual == $id){return "active";}
	}

    function adm_view($adm){
		if($adm == ""){return "adm_off";}
        if($adm != ""){return "adm_on";}
	}
	
	