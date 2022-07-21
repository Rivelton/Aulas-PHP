<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php
		$lista_coisas = [];
		//para associar um valor ao indice do array aleatorio, é a mesma regra pra array normal
		$lista_coisas['lista_frutas'] = array('x' => 'Banana', 'Maçã', 'Morango', 'Uva');
		$lista_coisas['lista_Pessoas'] = ['Joao', 'Maria', 'Joaquim'];

		echo '<pre>';
		print_r($lista_coisas);
		echo '</pre>';

		echo '<br>';
		echo $lista_coisas['lista_Pessoas'][2];

		
	?>

	

</body>
</html>