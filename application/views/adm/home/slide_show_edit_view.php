<h1>Editar Imagens</h1>
	
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
    
    <?= form_open("index.php/adm_update/home_slide_show") ?> 
    
		<div class="slide-content">
					
				<?php $n = 0; ?>
				<?php foreach ($slides as $slide){ ?>
				
							<?php $n = $n+1; ?>
		                   	<div class="item">
		                    	<div class="imagem-item">
			                        <img src="<?= base_url("img/bd_img/{$slide['imagem']}")?>" 
			                        alt="Caminhões Munck e Guindastes Imagens Slide" 
			                        title="Caminhões Munck e Guindastes Imagens Slide" >
		                        </div>
		                        <input type="number" class="form-control" name="n_ordem-<?=$n?>" value="<?=$slide['n_ordem']?>" />
		                        <input type="hidden" class="form-control" name="id-<?=$n?>" value="<?=$slide['id']?>" />
		                        <?=anchor("index.php/adm_delete/home_slide_show/{$slide['id']}","Excluir",array("class"=>"btn btn-danger"))?>
		                    </div>
		                    
		      	<?php  } ?>   
	
		</div>
		
		<input type="submit" value="Salvar alterações" class="btn btn-primary">
	
	<?= form_close()?> 
	
	