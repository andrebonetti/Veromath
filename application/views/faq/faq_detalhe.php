<section class="faq my-content">  
    <div class="myContainer">
         
		<div itemscope itemtype="http://schema.org/Answer" class="faq-det">
	    	
            <meta itemprop="about" content="Serviços com Caminhões Munck"/>
            
			<h1 itemprop="headline"><?= $faq_detalhe['pergunta']?>?</h1>
			<p itemprop="parentItem"><?= $faq_detalhe['resposta']?></p>
				
		</div>
		
		<div class="faq-relat">
		
			<!-- DUVIDAS - EQUIPAMENTO  -->	
			<div itemscope itemtype="http://schema.org/AskAction" class="faq">
            
                <meta itemprop="about" content="Caminhões Munck"/>

                <h2>Dúvidas sobre Caminhões Munck e Guindastes</h2>

                <?php foreach ($equipamento_duvs as $equip_duv){?>
                    <?= anchor("pergunta/".muda_equipamento_url($equip_duv['pergunta'])."/{$equip_duv['id']}","<b>".$equip_duv['n_ordem'].")</b> <h3 itemprop='question'>".$equip_duv['pergunta']."?</h3>") ?>
                <?php } ?>
				
		    </div>	
			
			<!-- DUVIDAS - SERVICO  -->	
			<div itemscope itemtype="http://schema.org/AskAction" class="faq">
            
                <meta itemprop="about" content="Serviços com Caminhões Munck"/>

                <h2>Dúvidas sobre os Serviços com Caminhões Munck</h2>

                <?php foreach ($servico_duvs as $serv_duv){?>
                    <?= anchor("".muda_equipamento_url($serv_duv['pergunta'])."/{$serv_duv['id']}","<b>".$serv_duv['n_ordem'].")</b> <h3 itemprop='question'>".$serv_duv['pergunta']."?</h3>") ?>
                <?php } ?>
	
		    </div>	
			
		</div>	
	
	</div>
</section>