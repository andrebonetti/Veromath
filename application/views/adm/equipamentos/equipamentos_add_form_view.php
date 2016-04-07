
<?= form_open("index.php/adm_insert/equipamento")?>
	
	<div class="img-content">
	
		<div class="edit-view">	
			<h2>Imagem Principal</h2>
			<?= anchor("index.php/adm_imgs/equipamento_add","Adicionar foto",array("class"=>"btn btn-info btn-add-img ".$btn_add.""))?>
			<img class="<?=$class_img?>" src="<?= base_url("img/bd_img/{$img_name}")?>" ><br> 
			<?= anchor("index.php/adm_imgs/equipamento_add","Trocar Foto",array("class"=>"btn btn-warning btn-add-img ".$btn_change.""))?>
			<?= anchor("index.php/adm_imgs/img_cancel/equipamentos_adm/equipamento_add","Cancelar Foto",array("class"=>"btn btn-danger btn-add-img ".$btn_cancel.""))?>
			<input type="hidden" name="img_principal" value="<?=$img_name?>"/>
		</div>
		
	</div>
	
	<br>
	
	<select class="form-control" name="categoria">
		<option value="0">Escolha uma categoria</option>
		<option value="1">Caminhões Munck</option>
		<option value="2">Guindastes</option>
	</select>
	
	<input type="text" class="form-control medium" name="nome" placeholder="Nome do Equipamento"/>
	<textarea rows="10" class="form-control" name="descricao"></textarea>
	
	<input type="submit" value="Adicionar Equipamentos" class="btn btn-success" />

<?= form_close()?>