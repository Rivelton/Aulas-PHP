<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php 
		//gettype() => retorna o tipo de variavel
		$valor = 15.35;


		$valor2 = (int) $valor;

		echo $valor. ' ' . gettype($valor);
		echo '<br>';
		echo $valor2. ' ' . gettype($valor2);
	?>

	

</body>
</html>