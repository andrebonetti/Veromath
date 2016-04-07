<section class="servicos my-content">

        <h1>Serviços</h1>
        
        <div class="<?=adm_view($adm)?> add-servico">
            <div class="adm-buttons">
                <?= anchor("index.php/servicos_adm/servico_add","Adicionar serviço",array("class"=>"btn btn-success btn-adm"))?>
            </div>    
        </div>
         
        <?php $n = 0; 
        foreach($servicos as $servico){ ?>	 
            <?php if($n % 2 == 0){?>     
            
                <div class="content-section-a">
                    <div class="myContainer">
                            <div itemscope itemtype="http://schema.org/Service">
                                
                                <img itemprop="image" class="" src="<?= base_url("img/bd_img/{$servico["img_menu"]}")?>" alt="<?= $servico["alt"] ?>">
                                
                                <div class="servico-content">
                                    
                                    <meta itemprop="provider" content="Veromath"/>
                                    <meta itemprop="serviceArea" content="São Paulo"/>
                                    <meta itemprop="serviceType" content="Locação de Caminhão Munck Guindaste"/>
                                    <meta itemprop="url" class="prop_serv" content="<?=base_url("".url_title(muda_servicoURL($servico['id'],$servico['titulo']))."/id/".$servico['id']."")?>"/>
                                    
                                    <hr class="section-heading-spacer">
                                    <div class="clearfix"></div>
                                    <h2 itemprop="produces" class="section-heading"><?= $servico["titulo"] ?></h2>
                                    <p itemprop="description"><?= substr($servico["descricao"], 0, 250);?>...</p>
                                    <?= anchor("".url_title(muda_servicoURL($servico['id'],$servico['titulo']))."/id/".$servico['id']."","Veja a descrição completa",array ("class" => "btn btn-primary","id"=>"serv_anchor-".$servico["id"].""))?>
                                    <!-- ADM -->
                                    <div class="<?=adm_view($adm)?> options-servico">
                                        <?= anchor("index.php/servicos_adm/servico_edit_form/{$servico['id']}","Editar Serviço",array("class"=>"btn btn-info btn-adm"))?><br />
                                        <?= anchor("index.php/adm_delete/servico/{$servico['id']}","Excluir Serviço",array("class"=>"btn btn-danger btn-adm"))?>
                                    </div>
                                </div>
                                 
                            </div>
                    </div>    
                </div>
    
            <?php } else {?>
    
                <div class="content-section-b">
                    <div class="myContainer">
                            <div itemscope itemtype="http://schema.org/Service">
                                
                                <img itemprop="image" class="" src="<?= base_url("img/bd_img/{$servico["img_menu"]}")?>" alt="<?= $servico["alt"] ?>">                 
                                
                                <div class="servico-content">
                                    
                                    <meta itemprop="provider" content="Veromath"/>
                                    <meta itemprop="serviceArea" content="São Paulo"/>
                                    <meta itemprop="serviceType" content="Locação de Caminhão Munck Guindaste"/>
                                    <meta itemprop="url" class="prop_serv" content="<?=base_url("".url_title(muda_servicoURL($servico['id'],$servico['titulo']))."/id/".$servico['id']."")?>"/>
                                    
                                    <hr class="section-heading-spacer">
                                    <div class="clearfix"></div>
                                    <h2 itemprop="produces" class="section-heading"><?= $servico["titulo"] ?></h2>
                                    <div itemprop="description">
                                        <?= auto_typography(substr($servico["descricao"], 0, 250))?>
                                    </div>
                                    <p>...</p>
                                    <?= anchor("".url_title(muda_servicoURL($servico['id'],$servico['titulo']))."/id/".$servico['id']."","Veja a descrição completa",array ("class" => "btn btn-primary","id"=>"serv_anchor-".$servico["id"].""))?>
                                    <!-- ADM -->
                                    <div class="<?=adm_view($adm)?> options-servico">
                                        <?= anchor("index.php/servicos_adm/servico_edit_form/{$servico['id']}","Editar Serviço",array("class"=>"btn btn-info btn-adm"))?><br />
                                        <?= anchor("index.php/adm_delete/servico/{$servico['id']}","Excluir Serviço",array("class"=>"btn btn-danger btn-adm"))?>
                                    </div>
                                </div>
                                     
                            </div>
                    </div>    
                </div>
        
        <?php }?>
        <?php $n = $n + 1 ?>			
        <?php }  ?>
    
</section>

<script src="<?= base_url("js/my_scripts-servicos.js")?>"></script>   