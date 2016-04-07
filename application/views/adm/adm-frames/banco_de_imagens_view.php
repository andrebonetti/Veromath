<div class="bd-imgs">
	
	<h2>Banco de Imagens</h2>
	
	<ul class="nav nav-tabs">
	    <li class="active"><a href="#bd-img" data-toggle="tab">Visualizar</a></li>
	    <li><a href="#upload" data-toggle="tab">Faça Upload de Uma nova Imagem</a></li>
	    <li><a href="#edit" data-toggle="tab">Editar fotos do banco</a></li>
    </ul>
    
    <div class="tab-content">
    
        <!--TAB 1-->    
        <div class="tab-pane active" id="bd-img">
        	<?php foreach($imgs_cat as $categoria){?>
				<h3><?= $categoria['categoria'] ?></h3>
				<?php foreach($imgs as $img) {?>
					<?php if ($categoria['categoria'] == $img['categoria']){?>
						<div class="img-content">
							<?= anchor($url_destiny."/".$img["id"],"<img src='".base_url("img/bd_img/{$img['img_arquivo']}")."' alt='".$img['img_arquivo']."'>")?>
						</div>	
			<?php }}} ?>
        </div>
        
        <!--TAB 2-->   
        <div class="tab-pane" id="upload"> 
        	<?php echo form_open_multipart('index.php/upload/do_upload');?>
	           
                <?php for($n=1;$n<=10;$n++){?>
				<input type="file" name="file_<?=$n?>">
				<?php } ?>
            
                <select class="form-control" name="categoria">
					<option value="0">Selecione uma categoria</option>
					<?php foreach($imgs_cat as $cat){ ?>
						<option value="<?=$cat['categoria']?>"><?=$cat['categoria']?></option>
					<?php } ?>
				</select>
				
				<input type="text" class="form-control medium" name="titulo" placeholder="(Nome do Equipamento,Serviço ...)">
				<input type="text" class="form-control medium" name="alt" placeholder="ALT (max 5 palavras):">

                <input type="hidden" name="url_atual" value="<?=$url_atual?>">
            
				<input type="submit" class="btn btn-success" value="upload" />
	
			</form>
        </div>
        
        <!-- TAB 3 -->
        <div class="tab-pane" id="edit">
        	
        	<table>
        		<tr>
        			<th>Imagem</th>
        			<th>Categoria</th>
        			<th>Nome_arquivo</th>
        			<th>Alt</th>
        			<th></th>
        		</tr>
        		<?php  foreach($imgs as $img){?>
        			<tr>
        				<td><img src='<?= base_url("img/bd_img/".$img['img_arquivo']."")?>'> </td>
        				<td><?=$img['categoria']?></td>
        				<td><?=$img['img_arquivo']?></td>
        				<td><?=$img['img_alt']?></td>
        				<td><?= anchor("","Editar",array("class"=> "btn btn-primary"))?><br><?= anchor("index.php/adm_delete/bd_imgs/".$img['id']."/".$url_atual."","Excluir",array("class"=> "btn btn-danger"))?></td>
        			</tr>
        		<?php } ?>
        	</table>
        	
        </div>
        
	</div>
	
</div>