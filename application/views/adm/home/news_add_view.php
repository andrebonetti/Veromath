<?= form_open("index.php/adm_insert/home_news")?>

	
	<?= anchor("index.php/adm_imgs/news_img_add","Adicionar foto",array("class"=>"btn btn-info btn-add-img ".$btn_add.""))?>
	<img class="<?=$class_img?>" src="<?= base_url("img/bd_img/{$img_name}")?>" ><br> 
	<?= anchor("index.php/adm_imgs/news_img_add","Trocar Foto",array("class"=>"btn btn-warning btn-add-img ".$btn_change.""))?>
	<?= anchor("index.php/adm_imgs/img_cancel/home_adm/news_add","Cancelar Foto",array("class"=>"btn btn-danger btn-add-img ".$btn_cancel.""))?>
	<input type="hidden" name="imagem" value="<?=$img_name?>"/>
	
	<br>
	<input type="text" class="form-control medium" name="titulo" placeholder="Título da notícia"/>
	<input type="date" class="form-control short" name="data" placeholder="dd/mm/aaaa" />
	<textarea rows="10" class="form-control" name="texto"></textarea>
	
	<input type="submit" value="Adicionar Notícia" class="btn btn-success" />

<?= form_close() ?>