<table>
	<?php foreach($servicos as $servico){?>
		<tr>
			<td><?=$servico['titulo']?></td>
			<td><?= anchor("index.php/servicos_adm/servico_edit_form/{$servico['id']}","Editar",array("class"=>"btn btn-primary"))?></td>
			<td><?= anchor("index.php/adm_delete/servico/{$servico['id']}","Excluir",array("class"=>"btn btn-danger"))?></td>
		</tr>	
	<?php } ?>
</table>