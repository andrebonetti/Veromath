<h1>Sobre a Veromath</h1>
	
<?= form_open("index.php/adm_update/empresa_texto")?>
	<textarea class="form-control" rows="20" name="texto"> <?=$sobre['texto']?> </textarea>
	
	<input type="submit" name="button" value="Salvar alterações" class="btn btn-primary">
<?= form_close()?>