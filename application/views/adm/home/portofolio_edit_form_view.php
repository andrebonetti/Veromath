<h1><?=$portofolio['titulo']?></h1>

<?= form_open("index.php/adm_update/home_portofolio/{$portofolio['id']}")?>
	
	<img src="<?= base_url("img/bd_img/{$img}")?>" ><br> 
	<?= anchor("index.php/adm_imgs/portofolio_img_update/{$portofolio['id']}","Trocar Foto",array("class"=>"btn btn-warning btn-add-img"))?>
	<input type="hidden" name="imagem" value="<?=$img?>"/>
	
	<textarea class="form-control" name="texto" rows="1"><?=$portofolio['texto']?></textarea>
	
	<input type="submit" class="btn btn-primary" value="Salvar alterações" />
	
<?= form_close()?>