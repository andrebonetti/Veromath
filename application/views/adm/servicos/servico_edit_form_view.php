<?= form_open("index.php/adm_update/servico/".$servicos['id']."")?>
	
	<div class="img-content">
	
		<div class="edit-view">	
			<h2>Imagem Principal</h2>
			<?= anchor("index.php/adm_imgs/servicos_edit/{$servicos['id']}/1","Adicionar foto",array("class"=>"btn btn-info btn-add-img ".$class_add_1.""))?>
			<img class="<?=$class_img_1?>" src="<?= base_url("img/bd_img/{$imagem_1}")?>" ><br> 
			<?= anchor("index.php/adm_imgs/servicos_edit/{$servicos['id']}/1","Trocar Foto",array("class"=>"btn btn-warning btn-add-img ".$class_change_1.""))?>
			<?= anchor("index.php/adm_imgs/delete_img_2sessions/servicos_servicos/img_principal/".$servicos['id']."/servicos_adm/servico_edit_form/1","Excluir Foto",array("class"=>"btn btn-danger btn-add-img ".$class_delete_1.""))?>
			<?= anchor("index.php/adm_imgs/img_servico_cancel/servicos_adm/servico_edit_form/{$servicos['id']}/1","Cancelar Mudança de Imagem",array("class"=>"btn btn-danger ".$class_cancel_1.""))?>
			<input type="hidden" name="img_principal" value="<?=$imagem_1?>"/>
		</div>
		
		<div class="edit-view">	
			<h2>Imagem Menu</h2>
			<?= anchor("index.php/adm_imgs/servicos_edit/{$servicos['id']}/2","Adicionar foto",array("class"=>"btn btn-info btn-add-img ".$class_add_2.""))?>
			<img class="<?=$class_img_2?>" src="<?= base_url("img/bd_img/{$imagem_2}")?>" ><br> 
			<?= anchor("index.php/adm_imgs/servicos_edit/{$servicos['id']}/2","Trocar Foto",array("class"=>"btn btn-warning btn-add-img ".$class_change_2.""))?>
			<?= anchor("index.php/adm_imgs/delete_img_2sessions/servicos_servicos/img_menu/".$servicos['id']."/servicos_adm/servico_edit_form/2","Excluir Foto",array("class"=>"btn btn-danger btn-add-img ".$class_delete_2.""))?>
			<?= anchor("index.php/adm_imgs/img_servico_cancel/servicos_adm/servico_edit_form/{$servicos['id']}/2","Cancelar Mudança de Imagem",array("class"=>"btn btn-danger ".$class_cancel_2.""))?>
			<input type="hidden" name="img_menu" value="<?=$imagem_2?>"/>
		</div>
		
	</div>
	
	<br>
	
	<input type="text" class="form-control medium" name="titulo" value="<?=$servicos['titulo']?>"/>
	<textarea rows="10" class="form-control" name="descricao"><?=$servicos['descricao']?></textarea>
		
	<input type="submit" name="button" value="Salvar alterações" class="btn btn-primary">
	
<?= form_close()?>