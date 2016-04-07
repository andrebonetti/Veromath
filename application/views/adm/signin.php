<section class="signin">

	<?php $msg = $this->session->flashdata('msg-error'); if (!empty($msg)){?>
		<p class="alert alert-danger"><?=$msg?></p>
	<?php } ?>  
	
	<?= form_open("index.php/adm/login",array( "class" => "login") ) ?>
	    <h2 class="form-signin-heading">Acesso Restrito</h2>
        <input type="text" class="form-control" placeholder="Nome" name="nome" required autofocus>
        <input type="password" class="form-control" placeholder="Senha" name="senha" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
	<?= form_close()  ?>
	
</section>