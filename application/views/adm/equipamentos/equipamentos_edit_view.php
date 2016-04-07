<table>

	<tr>
		<th>Categoria</th>
		<th>Nome</th>		
		<th>Imagem</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	
	<?php foreach($equipamentos as $equipamento){?>
		<tr>	
			<td>	
				<?php if($equipamento['id_categoria']  == '1'){?>Caminhões munck<?php } ?>
            	<?php if($equipamento['id_categoria']  == '2'){?>Guindastes<?php } ?>
            </td>
			<td><?=$equipamento['nome']?></td>			
            <td>
            	 <img src='<?= base_url("img/bd_img/".$equipamento['img_principal']."")?>'> 
            </td>
            <td><?= anchor("index.php/equipamentos/equipamento_descricao/".$equipamento['id']."","Visualizar",array("class"=>"btn btn-success"))?></td>
			<td><?= anchor("index.php/equipamentos_adm/equipamento_edit_form/{$equipamento['id']}","Editar",array("class"=>"btn btn-primary"))?></td>
			<td><?= anchor("index.php/adm_delete/equipamento/".$equipamento['id']."","Excluir",array("class"=>"btn btn-danger"))?></td>
			</tr>	
	<?php } ?>
</table>