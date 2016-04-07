<section class="servicos servicosDescr my-content">
 
		<?php foreach($contents as $servico){?>
        <?php $servico_id = $servico['id']; ?>
        <div class="content-section-c">
            <div class="myContainer">
                  
                        <div itemscope itemtype="http://schema.org/Service" class="row">
                                <div class="servico-content">
                                    
                                    <meta itemprop="provider" content="Veromath"/>
                                    <meta itemprop="serviceArea" content="São Paulo"/>
                                    <meta itemprop="serviceType" content="Locação de Caminhão Munck"/>
                                    
                                    <hr class="section-heading-spacer">
                                    <div class="clearfix"></div>
                                    <h1 itemprop="produces" class="section-heading"><?= $servico["titulo"] ?></h1>
                                    <div itemprop="description">
                                        <?= substr($servico["descricao"], 0, 250);?><p>...</p>
                                    </div>
                                    
                                    <ul>
                                        <?php foreach($servicos as $servico) { ?>	
                                            <?php if($servico_id != $servico['id']){ ?>	 
                                                <li><?= anchor("".url_title(muda_servicoURL($servico['id'],$servico['titulo']))."/id/".$servico['id']."",$servico['titulo'])?></li>
                                        <?php }} ?>
                                    </ul>
                                </div>
                        </div>
                
                        <div class="img-servDescr">
                            <div class="pikachoose pikaServ">
                                <ul id="pikame">
                                    
                                    <!-- IMG PRINCIPAL -->
                                    <?php foreach($contents as $servico){?>
                                    <li><img src="<?= base_url("img/bd_img/{$servico['img_principal']}")?>" alt="<?= $servico['alt'] ?>" title="<?php echo $servico['alt'] ?>"></li>
                                    <?php } ?>
                                    
                                    <!-- IMGS -->
                                    <?php foreach ($servico_imgs as $img){?>
                                        <li><img src="<?= base_url("img/bd_img/{$img['imagem_arquivo']}")?>" alt="<?= $servico['alt'] ?>" title="<?php echo $servico['alt'] ?>"></li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                        </div> 
                          	
            </div>
        </div>
        <?php } ?>
</section>