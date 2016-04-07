
<?= form_open("index.php/adm_update/empresa_imgs")?>
	
	<div class="img-content">
	
		<div class="edit-view">	
			<img src="<?= base_url("img/bd_img/{$imagem_1}")?>" ><br> 
			<?= anchor("index.php/adm_imgs/empresa_imgs_update/1","Trocar Foto",array("class"=>"btn btn-warning btn-add-img"))?>
			<?= anchor("index.php/adm_imgs/img_empresa_cancel/empresa_adm/img_edit/1","Cancelar Mudança de Imagem",array("class"=>"btn btn-danger ".$class_cancel_1.""))?>
			<input type="hidden" name="imagem_1" value="<?=$imagem_1?>"/>
		</div>
		
		<div class="edit-view">	
			<img src="<?= base_url("img/bd_img/{$imagem_2}")?>" ><br> 
			<?= anchor("index.php/adm_imgs/empresa_imgs_update/2","Trocar Foto",array("class"=>"btn btn-warning btn-add-img"))?>
			<?= anchor("index.php/adm_imgs/img_empresa_cancel/empresa_adm/img_edit/2","Cancelar Mudança de Imagem",array("class"=>"btn btn-danger ".$class_cancel_2.""))?>
			<input type="hidden" name="imagem_2" value="<?=$imagem_2?>"/>
		</div>
	
	</div>
		
	<input type="submit" name="button" value="Salvar alterações" class="btn btn-primary">
<?= form_close()?>