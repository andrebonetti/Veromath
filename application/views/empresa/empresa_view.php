<section class="my-content empresa">
    <div class="part-1">
        <div class="myContainer">

                    <div class="<?php if(empty($adm)){echo "adm-view";}?>"> 
                        <?php foreach($sobre_imgs as $img){?>  
                            <?php if($img['id'] == '1'){?>             
                                   <img class="img-responsive about-1" 
                                        src="<?= base_url("img/bd_img/{$img['imagem']}")?>" 
                                        alt="sobre  empresa veromath muncks guindastes" 
                                        title="sobre  empresa veromath muncks guindastes">   
                        <?php }} ?>          

                        <div class="empresa-about">
                            <h1><?=  $sobre['titulo']?></h1>                      	                	  
                            <?=auto_typography($sobre['texto'])?>

                        </div>

                        <!-- ADM -->
                        <div class="adm-buttons">
                            <?= anchor("index.php/empresa_adm/empresa_edit","Editar texto",array("class"=>"btn btn-primary"))?>
                            <?= anchor("index.php/empresa_adm/img_edit","Editar imagens",array("class"=>"btn btn-warning"))?>
                        </div>   
                    </div>       
        </div>  
    </div>
    
    <div class="part-2">
        <div class="myContainer">
                    <br>

                    <?php foreach($sobre_imgs as $img){?>  
                       <?php if($img['id'] == '2'){?>             
                                <img 	class="img-responsive about-2" 
                                        src="<?= base_url("img/bd_img/{$img['imagem']}")?>" 
                                        alt="sobre  empresa veromath muncks guindastes" 
                                        title="sobre  empresa veromath muncks guindastes">   
                        <?php }} ?> 

                        <div class="servicos-about">

                            <h2>Conheça nossos principais serviços: </h2>
                            <ul>
                                <?php foreach($servicos as $servico){?>
                                    <li class="list-group-item">
                                        <?= anchor("".url_title(muda_servicoURL($servico['id'],$servico['titulo']))."/id/".$servico['id']."","
                                        ".$servico['titulo']."")?>
                                    </li>
                                <?php }  ?>        
                            </ul>
                        </div>

        </div>
    </div>    
</section>