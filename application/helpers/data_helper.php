<?php

	function dataPtBrParaMysql($dataPtBr) {
    	$partes = explode("/", $dataPtBr);
		return $partes[0];
    }
	
	function dataMysqlParaPtBr($dataPtBr) {
    	$partes = explode("-", $dataPtBr);
		return "{$partes[2]}/{$partes[1]}/{$partes[0]}";
	}
	