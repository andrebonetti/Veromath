<h1>Editar Texto da Página</h1>
	
<p class="alert alert-info">"Locação de Caminhões Munck (Guindastes articulados)" é a palavra chave e o título principal da página, por isso é melhor que não seja alterado, o resto do texto pode ser alterado.</p>	
<?= form_open("index.php/adm_update/home_hr")?>
	<textarea class="form-control" name="texto"> <?=$hrs['texto']?> </textarea>
	<input type="submit" name="button" value="Salvar alterações" class="btn btn-primary">
<?= form_close()?>