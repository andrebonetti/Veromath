<?php header('Content-Type: text/html; charset=UTF-8');?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>	
		<table>
			<tr>
				<td><b>Nome:</b></td>
				<td><?= $nome ?></td>
			</tr>
			<tr>
				<td><b>Telefone:</b></td>
				<td><?= $telefone ?></td>
			</tr>
			<tr>
				<td><b>E-mail:</b></td>
				<td><?= $email ?></td>
			</tr>
		</table>
		
		<h3><?= $assunto ?></h3>
		<p><?= $mensagem ?></p>
	</body>	
</html>