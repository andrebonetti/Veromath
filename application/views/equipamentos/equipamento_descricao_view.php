<section class="equipamentos my-content">
    <div class="myContainer">
        
			<!-- DESCRIÇÃO -->
            <div itemscope itemtype="http://schema.org/Car" class="equipamento-descricao">
                
                <h1 itemprop='name'><?= $nome ?></h1>
               
                <div class="pikachoose">
	               <ul id="pikame">
	                   <li>
                            <img itemprop='image' src="<?= base_url("img/bd_img/{$img_principal}")?>" alt="<?= $equipamento['alt'] ?>" title="<?= $equipamento['alt'] ?>">
                       </li>
	                   <?php foreach ($equipamento_imgs as $img){?>
	                        <li>
                               <img src="<?= base_url("img/bd_img/{$img['imagem_arquivo']}")?>" alt="<?= $equipamento['alt'] ?>" title="<?= $equipamento['alt'] ?>">
                            </li>
				        <?php } ?>
				    </ul>
				</div> 		
                                
				 <div class="caption" itemprop="description">
				    <?=auto_typography($description)?>
				</div>
                      
                <?php if($equipamento["grafico_carga"] != ""){ ?>
                    <div class="grafico_carga">
                        <h2>Gráfico de Carga</h2>
                        <img src="<?=base_url("img/grafico_carga/{$equipamento['grafico_carga']}")?>">
                    </div>    
                <?php } ?>
            </div> 
        
            <!-- EQUIP RELAT -->
            <div class="equipamentos-relacionados">
					<h2>Conheça outros caminhões munck e Guindastes:</h2>
                    
                    <div class="boxes">
                        <?php foreach($equipamentos as $equipamento){?>
                            <?php if($id_equip != $equipamento['id']){?>

                                <div class="box">
                                    <?php if ($equipamento['id_categoria'] == '1'){($categoriaURL = "caminhao-munck");}?>
                                    <?php if ($equipamento['id_categoria'] == '2'){($categoriaURL = "guindaste");}?>

                                    <div class="img-content">
                                        <?= anchor("".$categoriaURL."/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id'].""," 
                                            <img src='".base_url("img/bd_img/".$equipamento['img_principal']."")."' alt='".$equipamento['alt']."' title='".$equipamento['alt']."'>
                                        ")?>
                                    </div>  

                                    <?= anchor("".$categoriaURL."/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id'].""," 
                                        <h3>".$equipamento['nome']."</h3>
                                    ")?>

                                </div>

                        <?php }} ?>
					</div>
					
            </div>  
        
	   </div>				
</section>