
<section class="newsDet my-content">

	<div class="myContainer">
        
        <div class="newDet">
        	<article itemscope itemtype="http://schema.org/NewsArticle" class="new-content">
                
                <meta itemprop="about" content="Caminhões munck,guindastes" />
                
				<?php foreach ($new_content as $content){?>
                    <h1 itemprop="headline"><?= $content['titulo'] ?></h1>
                    <h2 itemprop="dateCreated"><?= dataMysqlParaPtBr($content['data'])?></h2>
                    <?php if ($content['imagem'] != NULL){?>
                        <img itemprop="image" src="<?= base_url("img/bd_img/{$content['imagem']}")?>"> 
                    <?php } ?>
                    <div class="<?php if ($content['imagem'] ==NULL ){echo"noImg";} ?>" itemprop="articleBody">
                        <?= auto_typography($content['texto']) ?>
                    </div>
                <?php } ?>
                
            </article>
            <?= anchor("home","Voltar a página Principal",array('class' => 'btn btn-primary'))?>
        </div>
        
        <div class="news-relat">
            <h2>Notícias Relacionadas:</h2>
            <?php foreach($news as $new){?>
                <h3><?= $new['titulo'] ?></h3>
                <p class="date"><?= $new['data'] ?></p>
                <p><?php $texto = $new['texto'];
                echo substr($texto, 0, 150);  ?>...<?=anchor("Noticia/".url_title($new['titulo'])."/id/{$new['id']}","leia mais")?></p>
                <hr>
            <?php }  ?>
        </div>
        
	</div>        
</section>
		
<script src="<?= base_url("js/my_scripts-news.js")?>"></script>   