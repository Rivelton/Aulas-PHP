<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php 
		$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
		$lista_frutas[] = 'Abacaxi';

		echo '<pre>';
			var_dump($lista_frutas);
		echo '</pre>';
		echo '<hr>';
		echo '<pre>';
			print_r($lista_frutas);
		echo '</pre>';

		//para imprimri apenas um iten do array, utiliza-se

		echo $lista_frutas[2];

		echo '<br>';

		//para definir um array associativo, com qualquer valor no indice do array
		//utiliza-se
	
		//$lista_frutas = array('a' => 'Pera');
		$lista_frutas['a'] = 'Pera';

		echo $lista_frutas['a'];

		echo '<hr>';

		echo '<pre>';
			print_r($lista_frutas);
		echo '</pre>';

	?>

	

</body>
</html>