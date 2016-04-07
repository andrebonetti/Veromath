<section class="home my-content">
    
        <!-- Slide - Show -->
        <div class="part-1 <?=adm_view($adm)?>">
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
            
            <!-- ADM -->
            <div class="adm-buttons">
                <?= anchor("index.php/home_adm/slide_show_add","Adicionar imagem",array("class"=>"btn btn-success"))?>
                <?= anchor("index.php/home_adm/slide_show_edit","Editar imagens",array("class"=>"btn btn-primary"))?>
            </div>
        </div>
        
        <div class="part-2 myContainer"> 
                  
            <div class="hr-center <?=adm_view($adm)?>">
                    
                    <div itemscope class="text-center" itemtype="http://schema.org/Organization">
                        
                        <meta itemprop="url" content="http://www.veromath.com.br/sobre-empresa-munck-veromath"/>
                        
                        <h1 itemprop="name"><?= $hrs['h1']?></h1>	
                        <p itemprop="description"><?= $hrs['texto']?></p>	
                        
                    </div>
                    
                    <!-- ADM -->
                    <div class="adm-buttons">
                        <?= anchor("index.php/home_adm/hr_edit","Editar texto",array("class"=>"btn btn-primary"))?>
                    </div>
                
            </div>
            
            <!-- NOTICIAS -->   
            <div class="news <?=adm_view($adm)?>">  
                
                <div class="news-content">   
                            
                    <h2>Notícias</h2>         
                        <?php foreach($news as $new){?>
                            <article itemscope itemtype="http://schema.org/NewsArticle">      
                                <meta itemprop="about" content="Caminhões Munck Guindastes"/>
                                <meta itemprop="dateline" content="São Paulo"/>
                                <meta itemprop="url" class="prop_news" content="<?=base_url("Noticia/".url_title($new['titulo'])."/id/{$new['id']}")?>"/>

                                <h3 itemprop="headline"><?= $new['titulo'] ?></h3>
                                <p itemprop="dateCreated" class="date"><?= dataMysqlParaPtBr($new['data']) ?></p>
                                <p itemprop="articleBody"><?php $texto = $new['texto'];
                                echo substr($texto, 0, 150);  ?>...<?=anchor("Noticia/".url_title($new['titulo'])."/id/{$new['id']}","leia mais",array("id"=>"news_anchor-".$new['id'].""))?></p>
                            </article>  
                            <hr>
                        <?php }  ?>
                            
                </div>
                
                <!-- ADM -->
                <div class="adm-buttons">
                    <?= anchor("index.php/home_adm/news_add","Adicionar notícia",array("class"=>"btn btn-success"))?>
                    <?= anchor("index.php/home_adm/news_edit","Editar notícia",array("class"=>"btn btn-primary"))?>
                </div>
                
            </div>
            
            <!-- EQUIPAMENTOS -->
            <div class="equipamentos">
                <h2>Caminhões Munck</h2>
                
                <div class="boxes">
                    <?php foreach($caminhoes_munck as $equipamento){?>
                        <div itemscope itemtype="http://schema.org/Car" class="box">
                            
                            <meta itemprop="isRelatedTo" content="Caminhão Munck Guindaste"/>
                            <meta itemprop="url" class="prop_equip" content="<?=base_url("caminhao-munck/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id']."")?>"/>
                            
                            <div class="img-content">
                                <?= anchor("caminhao-munck/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id'].""," 
                                                        <img itemprop='image' src='".base_url("img/bd_img/".$equipamento['img_principal']."")."' alt='".$equipamento['alt']."' title='".$equipamento['alt']."'>
                                             ")?>
                            </div>
                            <?=anchor("caminhao-munck/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id'].""," 
                             <h3 itemprop='name'>".$equipamento['nome']."</h3>",array("id"=>"equip_anchor-".$equipamento['id'].""))?>	
                        </div>
                            <?php } ?>
                </div> 
                
                <?= anchor("caminhoes-munck","Ver Todos",array("class"=>"btn btn-danger btn-munck"))?>

            </div>
            
            <div class="equipamentos">
                <h2 class="guindastes">Guindastes</h2>
                
                <div class="boxes">
                    <?php foreach($guindastes as $equipamento){?>
                         <div  itemscope itemtype="http://schema.org/Car" class="box guindaste">
                             
                            <meta itemprop="url" class="prop_equip" content="<?=base_url("guindaste/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id']."")?>"/> 
                             
                            <div class="img-content">
                                <?= anchor("guindaste/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id'].""," 
	                                            <img itemprop='image' src='".base_url("img/bd_img/".$equipamento['img_principal']."")."' alt='".$equipamento['alt']."' title='".$equipamento['alt']."'>
	                                 ")?>
                            </div>
                            <?=anchor("guindaste/".muda_equipamento_url($equipamento['nome'])."/id/".$equipamento['id'].""," 
                            <h3 itemprop='name'>".$equipamento['nome']."</h3>",array("id"=>"equip_anchor-".$equipamento['id'].""))?>	
                        </div>
                    <?php } ?>
                </div>
                
                <?= anchor("guindastes","Ver Todos",array("class"=>"btn btn-danger btn-guindaste"))?>
                
            </div> 
        </div> 
    
</section> 

<section class="home-2">
        <div class="myContainer"> 
            
            <!--SERVICOS-->
            <h2>Locação de Caminhão Munck e Guindaste para:</h2>
                        
                    <div class="servicos_list">
                        
                        <?php foreach($servicos as $servico){?>
                            <div itemscope itemtype="http://schema.org/Service" class="servico_item <?php if($servico["id"] == "18"){echo "last";}?>">
                                <meta itemprop="provider" content="Veromath"/>
                                <meta itemprop="serviceArea" content="São Paulo"/>
                                <meta itemprop="serviceType" content="Locação Locação Caminhão Munck Guindaste"/>
                                <meta itemprop="url" class="prop_serv" content="<?=base_url("".url_title(muda_servicoURL($servico['id'],$servico['titulo']))."/id/".$servico['id']."")?>"/>
                                
                                <img 	class='img-responsive' 
                                        src='<?=base_url("img/bd_img/".$servico['img_menu']."")?>'
                                        alt='Descrição Caminhões Munck Munk Guindastes' 
                                        title='Descrição Caminhões Munck Munk Guindastes'>
                                <h3 itemprop="produces"><?=ucwords($servico['titulo'])?></h3>            
                                <p itemprop="description"><?= substring($servico['descricao'],"210")?> ...<?=anchor("".url_title(muda_servicoURL($servico['id'],$servico['titulo']))."/id/".$servico['id']."","Leia mais",array("id"=>"serv_anchor-".$servico["id"].""))?></p>
                            </div>
                        <?php } ?>
                           
                    </div>
        </div>  
</section>           
                
<script src="<?= base_url("js/my_scripts-home.js")?>"></script>        