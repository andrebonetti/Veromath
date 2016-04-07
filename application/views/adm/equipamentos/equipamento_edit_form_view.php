	
	<div class="img-content">
		
		<div class="edit-view">	
			<h2>Imagem Principal</h2>
			<?= anchor("index.php/adm_imgs/equipamento_edit/{$equipamento['id']}","Adicionar foto",array("class"=>"btn btn-info btn-add-img ".$class_add.""))?>
			<img class="<?=$class_img?>" src="<?= base_url("img/bd_img/{$imagem}")?>" ><br> 
			<?= anchor("index.php/adm_imgs/equipamento_edit/{$equipamento['id']}","Trocar Foto",array("class"=>"btn btn-warning btn-add-img ".$class_change.""))?>
			<?= anchor("index.php/adm_imgs/delete_img/equipamentos_equipamentos/img_principal/".$equipamento['id']."/equipamentos_adm/equipamento_edit_form","Excluir Foto",array("class"=>"btn btn-danger btn-add-img ".$class_delete.""))?>
			<?= anchor("index.php/adm_imgs/img_cancel_update/equipamentos_adm/equipamento_edit_form/{$equipamento['id']}","Cancelar Mudança",array("class"=>"btn btn-danger ".$class_cancel.""))?>
			<input type="hidden" name="img_principal" value="<?=$imagem?>"/>
		</div>
				
	</div>
	
	<?= form_open("index.php/adm_update/equipamento/".$equipamento['id']."")?>
	
	<h4>Descrição</h4>
	
	<input type="text" class="form-control medium" name="nome" value="<?=$equipamento['nome']?>"/>
	<textarea rows="10" class="form-control" name="descricao"><?=$equipamento['descricao']?></textarea>
		
	<input type="submit" name="button" value="Salvar alterações" class="btn btn-primary">
	
	<?= form_close()?>
	
	
	<div class="galeria">
		<h4>Galeria</h4>
		
		<?= form_open("index.php/adm_update/equipamento_imgs") ?> 
						
			<?php $n = 0; ?>
			<?php foreach ($equipamento_imgs as $img){?>
					
				<?php $n = $n+1; ?>
			    <div class="galeria-item">
			    	<div class="imagem-galeria">
				    	<img src="<?= base_url("img/bd_img/{$img['imagem_arquivo']}")?>">
			     	</div>
			        <input type="number" class="form-control" name="n_ordem-<?=$n?>" value="<?=$img['n_ordem']?>" />
			        <input type="hidden" name="id-equipamento" value="<?=$img['id_produto']?>"/>
			        <input type="hidden" name="id-<?=$n?>" value="<?=$img['id']?>" />
			        <?=anchor("index.php/adm_delete/equipamento_imgs/".$img['id']."/".$img['id_produto']."","Excluir",array("class"=>"btn btn-danger"))?>
			   	</div>
			                         
			 <?php  } ?>   
			 
			<?=anchor("adm_imgs/equipamento_galeria/{$equipamento['id']}","Adicionar Imagem",array("class"=>"btn btn-success"));?> 
			
			<input type="submit" value="Salvar alterações da Galeria" class="btn btn-primary btn-submit">
	
		<?= form_close()?> 
		
	</div> 	
	
	<div class="grafico-carga">
		<h4>Gráfico de Carga</h4>
		<?php if($equipamento["grafico_carga"] == NULL){?>
			<h5>Adicionar Gráfico</h5>
			<?= form_open_multipart("index.php/adm_update/equipamento_grafico")?> 
				<input type="file" name="grafico_carga">
				<input type="hidden" name="id_equipamento" value="<?=$equipamento["id"]?>">
				<input type="submit" class="btn btn-primary" value="Adicionar Gráfico">
			<?= form_close()?>
		<?php } else{?>
			<img src="<?=base_url("img/grafico_carga/{$equipamento['grafico_carga']}")?>"><br>
			<h5>Trocar Gráfico</h5>
			<?= form_open_multipart("index.php/adm_update/equipamento_grafico")?> 
				<input type="file" name="grafico_carga">
				<input type="hidden" name="id_equipamento" value="<?=$equipamento["id"]?>">
				<input type="submit" class="btn btn-primary" value="Alterar Gráfico">
			<?= form_close()?>
			<?=anchor("adm_update/equipamento_delete_grafico/{$equipamento['id']}","Excluir Gráfico",array("class"=>"btn btn-danger"))?>
		<?php } ?>
	</div>
	
	