
<?= form_open("index.php/adm_insert/servico")?>
	
	<div class="img-content">
	
		<div class="edit-view">	
			<h2>Imagem Principal</h2>
			<?= anchor("index.php/adm_imgs/servicos_add/1","Adicionar foto",array("class"=>"btn btn-info btn-add-img ".$btn_add_1.""))?>
			<img class="<?=$class_img_1?>" src="<?= base_url("img/bd_img/{$img_name_1}")?>" ><br> 
			<?= anchor("index.php/adm_imgs/servicos_add/1","Trocar Foto",array("class"=>"btn btn-warning btn-add-img ".$btn_change_1.""))?>
			<?= anchor("index.php/adm_imgs/img_servico_cancel/servicos_adm/servico_add/1","Cancelar Foto",array("class"=>"btn btn-danger btn-add-img ".$btn_cancel_1.""))?>
			<input type="hidden" name="img_principal" value="<?=$img_name_1?>"/>
		</div>
		
		<div class="edit-view">	
			<h2>Imagem Menu</h2>
			<?= anchor("index.php/adm_imgs/servicos_add/2","Adicionar foto",array("class"=>"btn btn-info btn-add-img ".$btn_add_2.""))?>
			<img class="<?=$class_img_2?>" src="<?= base_url("img/bd_img/{$img_name_2}")?>" ><br> 
			<?= anchor("index.php/adm_imgs/servicos_add/2","Trocar Foto",array("class"=>"btn btn-warning btn-add-img ".$btn_change_2.""))?>
			<?= anchor("index.php/adm_imgs/img_servico_cancel/servicos_adm/servico_add/2","Cancelar Foto",array("class"=>"btn btn-danger btn-add-img ".$btn_cancel_2.""))?>
			<input type="hidden" name="img_menu" value="<?=$img_name_2?>"/>
		</div>
		
	</div>
	
	<br>
	
	<input type="text" class="form-control medium" name="titulo" placeholder="Nome do Serviço"/>
	<textarea rows="10" class="form-control" name="descricao"></textarea>
	
	<input type="submit" value="Adicionar Serviço" class="btn btn-success" />

<?= form_close()?>