<h1>Adicionar Imagem</h1>
	
	<!-- Slide - Show -->   
	<div class="slide-show">
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
     
        	<ol class="carousel-indicators">
            	<?php foreach ($slides as $slide){ ?>
                    <li data-target="#myCarousel" data-slide-to="<?= $slide['n_ordem']-1 ?>" class="<?= active_slide($slide['n_ordem']) ?>"></li>
                <?php } ?>
           	</ol>
              
            <div class="carousel-inner">
            	<?php foreach ($slides as $slide){ ?>
                    <div class="item <?= active_slide($slide['n_ordem']) ?>">
                        <img src="<?= base_url("img/bd_img/{$slide['imagem']}")?>" 
                        alt="Caminhões Munck e Guindastes Imagens Slide" 
                        title="Caminhões Munck e Guindastes Imagens Slide" >
                    </div>
                <?php  } ?>   
            </div>
              
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        
        </div>  
    </div>
    