<section class="equipamentos my-content">
		
        <div class="myContainer">
            
           <?php if($id_categoria  == '1'){?><h1>Caminhões munck</h1><?php } ?>
           <?php if($id_categoria  == '2'){?><h1>Guindastes</h1><?php } ?>
           <?php if($id_categoria  == '3'){?><h1>Caminhões Munck e Guindastes</h1><?php } ?>

           <div class="equipamentos">
           
               <?php foreach($equipamentos as $equipamento){?>

                   <div itemscope itemtype="http://schema.org/Car" class="equipamento">

                        <?php if ($equipamento['id_categoria'] == '1'){($categoriaURL = "caminhao-munck");}?>
                        <?php if ($equipamento['id_categoria'] == '2'){($categoriaURL = "guindaste");}?>
                        <?php if ($equipamento['id_categoria'] == '3'){($categoriaURL = "plataforma");}?>

                        <meta itemprop="isRelatedTo" content="Caminhão Munck Guindaste"/>
                        <meta itemprop="url" class="prop_equip" content="<?=base_url("".$categoriaURL."/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id']."")?>"/>
                        
                       <div class='img-content'>
                            <?= anchor("".$categoriaURL."/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id'].""," 
                                <img itemprop='image' src='".base_url("img/bd_img/".$equipamento['img_principal']."")."' alt='".$equipamento['alt']."' title='".$equipamento['alt']."'>
                           ")?>		
                       </div>    
                         
                       <?= anchor("".$categoriaURL."/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id']."","<h2 itemprop='name'>".$equipamento['nome']."</h2>")?>	 	
                         	
                       <p> <?= word_limiter($equipamento['descricao'],'50') ?>...</p>

                       <?= anchor("".$categoriaURL."/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id']."","Leia mais",array("id"=>"equip_anchor-".$equipamento['id']."","class"=>"btn btn-danger btn-lerMais"))?>

                    </div>

                <?php } ?>
               
            </div>   
            
	   </div>
                  	
</section>	

<script src="<?= base_url("js/my_scripts-equipamentos.js")?>"></script>        