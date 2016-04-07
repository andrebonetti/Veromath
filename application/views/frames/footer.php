        <footer class="my-content rodape">	
                <div itemscope itemtype="http://schema.org/Organization" class="myContainer" >
				
                        <div class="foot foot-1">
                            <h4>Endereço:</h4>
                            <address itemscope itemtype="http://schema.org/PostalAddress" >
                                <span itemprop="streetAddress">R. Carlos Bigatti, 100</span><br />
                                <span itemprop="addressRegion">Jardim Castelo</span><br />
                                <span itemprop="addressLocality">São Paulo, Brasil</span><br />
                                CEP - <span itemprop="postalCode">03728-210</span> 
                            </address>	
                        </div>
                    
                        <div class="foot foot-2">     	
                            <h4>Telefones:</h4>                  
                            <span itemprop="telephone">(11)2622-2323</span><br>
                            <span>(11)7819-2274</span>
                            <h4  class="email">E-mail:</h4>
                            <span itemprop="email">comercial@veromath.com.br</span>
                        </div>
                    
                        <div class="foot redes-sociais">     	
                            <h4>Redes Sociais:</h4>
                            <div class="rede-social">
                                <a class="social" href="https://www.facebook.com/VeromathTransportesELocacaoDeGuindastes?fref=ts">
                                    <img src="<?= base_url("img/face.png")?>" alt="facebook veromath caminhão munck guindaste">
                                    <p>Facebook</p>
                                </a>
                            </div>
                            <div class="rede-social">
                                <a class="social" href="https://www.instagram.com/veromathguindastes/">
                                    <img src="<?= base_url("img/instagram.png")?>" alt="instagran veromath caminhão munck guindaste">
                                    <p>Instagram</p>
                                </a>
                            </div>    
                        </div>
                                
                        <div class="login <?php if($adm != ""){ echo "logado";} ?>">
                                   
                            <div class="login-off">
                                    <?=anchor("index.php/adm","<img src='".base_url('img/cadeado_icon.png')."' alt='acesso restrito veromath'>
                                    <h4>Acesso<br>Área Restrita</h4>")?>
                            </div>	
                            
                            <div class="login-on <?php if(empty($adm)){echo "only-adm";}?>">
                                <div class="user_logado">
                                    <p class="text-success">Você está logado como <?= $adm ?></p>
                                    <?=anchor("index.php/adm/logout","Deslogar",array("class"=>"btn btn-primary")) ?>
                                </div>
							</div>	
                            
						</div>
                    
                        <div class="validadores">
                            <?=anchor("$url_markup","<img src='".base_url('img/html5_validator.png')."' alt='markup html5 validator w3c'>")?>
                            <?=anchor("$url_markup","<img src='".base_url('img/css3_validator.png')."' alt='markup css3 validator w3c'>")?>
                      	</div>
                    
                </div>              
        </footer>

        <script src="<?= base_url("js/my_scripts-header_footer.js")?>"></script>

    </body> 
</html>