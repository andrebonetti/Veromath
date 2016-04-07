<h1>Notícias</h1>
<table>
	<?php foreach($news as $new){?>
		<tr>
			<td><?=$new['titulo']?></td>
			<td><?= anchor("index.php/home_adm/news_edit_form/{$new['id']}","Editar",array("class"=>"btn btn-primary"))?></td>
			<td><?= anchor("index.php/adm_delete/home_news/{$new['id']}","Excluir",array("class"=>"btn btn-danger"))?></td>
		</tr>	
	<?php } ?>
</table>