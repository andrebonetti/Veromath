<?php

	function muda_servicoURL($id,$title){
	    if($id == "1")	{return "Icamento de equipamento"	;}
    	if($id == "3")	{return "Remocao tecnica"			;}
    	if($id == "18")	{return "Icamento com cesta aérea"	;} 	
    	else 			{return $title						;}
	}
	
	function muda_equipamento_categoria($id){
		if($id == "1"){return "caminhoes-munck"	;}
		if($id == "2"){return "guindastes"		;}
	}
	
	function muda_equipamento_url($string){
			
		$string = preg_replace("/ /", "-", $string); 
		$string = preg_replace("/ã/", "a", $string);
		$string = preg_replace("/Ã/", "A", $string);
		$string = preg_replace("/é/", "e", $string);
		$string = preg_replace("/ç/", "c", $string);
		$string = preg_replace("/â/", "a", $string);
		return $string;
		
	}
	
	function muda_equipamento_title($id){
		if($id == "1"){return "Caminhões Munck"	;}
		if($id == "2"){return "Guindastes"		;}
	}
	
	function substring($string,$limit){	
		$str1 = utf8_encode($string);
		$str2 = substr($str1, 0, $limit);
		return utf8_decode($str2); 

	}
	
	
	
	