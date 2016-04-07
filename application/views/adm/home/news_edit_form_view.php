<h1>Notícias</h1>

<?= form_open("index.php/adm_update/home_news/{$new['id']}")?>
	
	<?= anchor("index.php/adm_imgs/news_img_update/{$new['id']}","Adicionar foto",array("class"=>"btn btn-info btn-add-img ".$btn_add.""))?>
	<img class="<?=$class_img?>" src="<?= base_url("img/bd_img/{$img_name}")?>" ><br> 
	<?= anchor("index.php/adm_imgs/news_img_update/{$new['id']}","Trocar Foto",array("class"=>"btn btn-warning btn-add-img ".$btn_change.""))?>
	<?= anchor("index.php/adm_imgs/img_cancel_update/home_adm/news_edit_form/{$new['id']}","Cancelar Mudança de Imagem",array("class"=>"btn btn-danger btn-add-img ".$cancel_change.""))?>
	<?= anchor("index.php/adm_imgs/delete_img/index_news/imagem/{$new['id']}/home_adm/news_edit_form/","Excluir Foto",array("class"=>"btn btn-danger btn-add-img ".$btn_cancel.""))?>
	<input type="hidden" name="imagem" value="<?=$img_name?>"/>
	
	<br>
	<input type="text" class="form-control medium" name="titulo" value="<?=$new['titulo']?>" />
	<input type="date" class="form-control short" name="data" value="<?=dataMysqlParaPtBr($new['data'])?>" />
	<textarea class="form-control" name="texto" rows="20"><?=$new['texto']?></textarea>
	
	<input type="submit" class="btn btn-primary" value="Salvar alterações" />
	
<?= form_close()?>