<section class="contato my-content">

	<div class="myContainer">
    
		<div class="email">
		
            <div class="no-phone">
            
            	<?= form_open("contato/email_send") ?>
		 	
                    <h1>Contato</h1>
                    
                    <?php $msg = $this->session->flashdata('msg-success'); if (!empty($msg)){?>
                        <p class="alert alert-success"><?=$msg?></p>
                    <?php } ?>
                    
                    <table class="table">	
                        
                        <tr>
                            <td class="cab-cont">Assunto</td>
                            <td>
                                <SELECT class="form-control" name="assunto">
                                    <OPTION VALUE="Orçamento">Orçamento</OPTION>
                                    <OPTION VALUE="Curriculo">Curriculo</OPTION>
                                    <OPTION VALUE="Duvidas">Duvidas</OPTION>
                                    <OPTION VALUE="Reclamações">Reclamações</OPTION>
                                    <OPTION VALUE="Outros">Outros</OPTION>
                                </SELECT>
                            </td>
                        </tr>       
                        <tr>
                            <td class="cab-cont">Anexar Documento:</td>
                            <td>
                                <input type="file" name="arquivo" id="arquivo" /> 
                            </td>
                        </tr>                
                        <tr>
                            <td>Nome:</td>
                            <td><input type="text" name="nome" class="form-control"  required></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="email" name="email" class="form-control" placeholder="exemplo@exemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></td>
                        </tr>
                        <tr>
                            <td>Telefone:</td>
                            <td><input type="tel" name="tel" class="form-control" placeholder="DDD + Número" required /></td>
                        </tr>
                        <tr>
                            <td>Mensagem:</td>
                            <td><textarea class="form-control" name="mensagem" required ></textarea></td>
                        </tr>
                        <tr>
                            <td><button type="submit" class="btn btn-primary" spellcheck="true">Enviar</button></td>
                            <td></td>
                        </tr>
                    </table>
		 		<?= form_close() ?>
			</div>
         
			<div class="only-phone">
         
				<h2>Contato</h2>	
			
				<?= form_open('contato/email_send')?>
			
					<SELECT class="form-control" name="assunto">
						<OPTION VALUE="0">Escolha um Assunto</OPTION>
						<OPTION VALUE="Orçamento">Orçamento</OPTION>
						<OPTION VALUE="Currículo">Curriculo</OPTION>
						<OPTION VALUE="Dúvidas">Duvidas</OPTION>
						<OPTION VALUE="Reclamações">Reclamações</OPTION>
						<OPTION VALUE="Outros">Outros</OPTION>
					</SELECT>
							
					<input type="text" name="nome" class="form-control"  placeholder="Nome" required>
					
					<input type="email" name="email" class="form-control" placeholder="Email: exemplo@exemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
					
					<input type="tel" name="tel" class="form-control" placeholder="Telefone: DDD + Número" required>

					<textarea rows="5" class="form-control" name="mensagem" placeholder="Comentário" required ></textarea>
					
					<button type="submit" class="btn btn-primary" spellcheck="true">Enviar</button>

				<?= form_close()?>
		
			</div>
			
		</div>	
		  
		<div class="localizacao">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3658.7827159930885!2d-46.51075230000001!3d-23.5043346!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce607de8ee7909%3A0x4fffcb4d2afda286!2sR.+Carlos+Bigatti%2C+100+-+Jardim+Castelo%2C+S%C3%A3o+Paulo+-+SP%2C+03728-210!5e0!3m2!1spt-BR!2sbr!4v1411140903638"></iframe>
		</div>
		 	
	</div>	     
	 
</section>

<script src="<?= base_url("js/my_scripts-contato.js")?>"></script> 