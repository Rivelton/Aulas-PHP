<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
	//o true ou false determina no operador ternario se vai ser imprso o 'SIM' ou o 'NÃO'
	<?php 
		
		$usuario_possui_cartao = false

	?>

	<p>possui cartao da loja ? <?= $usuario_possui_cartao ? 'SIM' : 'NÃO';?></p>

	

</body>
</html>