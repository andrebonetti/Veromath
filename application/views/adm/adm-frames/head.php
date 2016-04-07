<!DOCTYPE html>
<html lang="pt-br">
    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
        <link rel="shortcut icon" type="image/x-icon" href=''>
        <title>Veromath - Área restrita</title>
                    
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/signin.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/style_adm.css")?>">
        
        <script src="<?= base_url("js/jquery-2.1.3.min.js")?>"></script>
        <script src="<?= base_url("js/bootstrap.js")?>"></script>
                    	
	</head>

	<body>
	
		<div class="admin-area <?= $class ?>">
		
			<nav class="navbar navbar-default" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <?= anchor("adm/info_empresa","<b>Área Administrativa</b> - {$name_pag}", array("class" => "navbar-brand")) ?>
			    </div>
			
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">		
			      	<?php for($n = 1 ; $n<=count($nav_name);$n++){ ?>										
			        <li class="<?=$nav_active["$n"]?>"><?= anchor("{$nav_url["$n"]}","{$nav_name["$n"]}")?></li>
			      	<?php } ?>
			      	
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li><?=anchor("index.php/home","Sair")?></li>   
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

			<div class="adm-container">
			
			<?php $msg_success = $this->session->flashdata('msg-success'); if(!empty($msg_success)){?>
				<p class="alert alert-success"><?=$msg_success?></p>
			<?php } ?>
