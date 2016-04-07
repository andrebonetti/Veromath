<?php header('Content-Type: text/html; charset=UTF-8');?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        
		<meta name="author" content="André Bonetti de Oliveira">
        
        <!-- SEO -->
        <!-- SEO -->
        <?php include_once("WebMasterToolsId.php") ?>
        <?php include_once("analyticstracking.php") ?>
        <meta name="msvalidate.01" content="133F03C350057AAD77AB4126B593766E" />
        <meta name="keywords" content="Locação de Caminhão Munck, Locação de Caminhões Munck, Locação de Guindaste Articulado, Locação de Guindaste, Locação de Munck">
		<meta name="description" content="<?=$description?>">
		<meta name="Revisit-after" content="2 days">
	       
        <!-- TITLE -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("img/fav-icon_logo.png")?>">
        <title>Locação de Caminhão Munck e Guindaste – Veromath | <?= $title ?> </title>
        
        <!-- CSS + LESS -->
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/pikachoose.css")?>"> 
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/base.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/display_divs.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/style.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/style_adm.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/style_adm2.css")?>">
		
        <!-- JS -->
        <script src="<?= base_url("js/jquery-2.1.3.min.js")?>"></script>
        <script src="<?= base_url("js/bootstrap.js")?>"></script>
        <script src="<?=base_url("js/jquery.pikachoose.js")?>"></script>
        <script src="<?= base_url("js/less.js")?>"></script>
        <script>
            $(document).ready(
                function (){
                $("#pikame").PikaChoose();
            });
        </script>
        
	</head>
    
	<body>
        
        <!-- STRUCTURED DATA -->
        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "url": "http://www.veromath.com.br",
            "logo": "http://www.veromath.com.br/img/logoHD.png"
        }
        </script>
    	
    	<header>	       		
			<div class="myContainer">
            
	        	<div class="banner">
                    
                    <?=anchor("locacao-caminhao-munck-guindaste","<img src='".base_url('img/logoHD.png')."' alt='locação caminhão munck munk guindaste'>",array("class"=>"logo")) ?>
	              	
                    <img class="menu-icon" id="open_menu" src="<?= base_url("img/menu.png")?>" alt="menu imagem">
                    <img class="menu-icon" id="close_menu" src="<?= base_url("img/close-menu.png")?>" alt="fecha menu imagem">
                    
	         	</div>
	                    	
	           	<div class="menu">
				    <p>(11) 2622 - 2323</p>
                    
				    <nav>
				        <ul>
                            <li class="<?= active_validation($atualPage,"home")?>">
                                <?= anchor("locacao-caminhao-munck-guindaste", "Home") ?>
                            </li> 
                            <li class="<?= active_validation($atualPage,"empresa")?>">
                                <?= anchor("sobre-empresa-munck-veromath", "Empresa")?>
                            </li> 
                            <li class="<?= active_validation($atualPage,"servicos")?>">
                                <?= anchor("servico-locacao-caminhao-munck-guindaste", "Serviços")?>
                            </li> 
                             <li class="<?= active_validation($atualPage,"equipamentos")?>">
                                <?= anchor("caminhoes-munck-guindastes", "Equipamentos")?>
                            </li>
                            <li class="<?= active_validation($atualPage,"faq")?>">
                                <?= anchor("duvidas-caminhoes-munck-e-guindastes", "FAQ")?>
                            </li>
                            <li class="<?= active_validation($atualPage,"contato")?>">
                                <?= anchor("fale-conosco", "Contato")?>
                            </li>           
			             </ul>   
	                </nav> 
	           </div>  
                
	    	</div>                        
		</header>