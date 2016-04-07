<section class="faq my-content">   
    <div class="myContainer">
    
	    <h1>Principais Dúvidas</h1>
	    
		<!-- DUVIDAS - EQUIPAMENTO  -->	
		<div  class="faq">
			<img src="<?= base_url("img/bd_img/{$img_equip['imagem']}")?>" alt="Imagem Caminhão Munck duvidas FAQ" title="Imagem Caminhão Munck duvidas FAQ">				
		
			<h2>Dúvidas sobre Caminhões Munck e Guindastes</h2>
		
			<?php foreach ($equipamento_duvs as $equip_duv){?>
            
                <div itemscope itemtype="http://schema.org/AskAction">
                    <meta itemprop="about" content="Caminhões Munck Guindastes"/>
                    <meta itemprop="url" class="prop_faq" content="<?=base_url("".muda_equipamento_url($equip_duv['pergunta'])."/{$equip_duv['id']}")?>"/>

                    <?= anchor("pergunta/".muda_equipamento_url($equip_duv['pergunta'])."/{$equip_duv['id']}","<b>".$equip_duv['n_ordem'].")</b> <h3 itemprop='question'>".$equip_duv['pergunta']."?</h3>",array("id"=>"faq_anchor-".$equip_duv['id']."")) ?>
                </div>
            
			<?php } ?>
            
				
		</div>	
		
		<!-- DUVIDAS - SERVICO  -->	
		<div class="faq">
		
			<img src="<?= base_url("img/bd_img/{$img_serv['imagem']}")?>" alt="Imagem Caminhão Munck duvidas FAQ" title="Imagem Caminhão Munck duvidas FAQ">				
		
			<h2>Dúvidas sobre os Serviços com Caminhões Munck</h2>
			
			<?php foreach ($servico_duvs as $serv_duv){?>
                
                <div itemscope itemtype="http://schema.org/AskAction">
                    <meta itemprop="about" content="Caminhões Munck Guindastes"/>
                    <meta itemprop="url" class="prop_faq" content="<?=base_url("".muda_equipamento_url($serv_duv['pergunta'])."/{$serv_duv['id']}")?>"/>
                    
				<?= anchor("pergunta/".muda_equipamento_url($serv_duv['pergunta'])."/{$serv_duv['id']}","<b>".$serv_duv['n_ordem'].")</b> <h3 itemprop='question'>".$serv_duv['pergunta']."?</h3>",array("id"=>"faq_anchor-".$serv_duv['id']."")) ?>
                </div>    
			<?php } ?>
	
		</div>	
	
	</div>	
</section>

<script src="<?= base_url("js/my_scripts-faq.js")?>"></script>  