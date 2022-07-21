<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php

		//metodo de pesquisa
		//in_array()
		//array_search()

		$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

		/*$lista_coisas = [];
		//para associar um valor ao indice do array aleatorio, é a mesma regra pra array normal
		$lista_coisas['lista_frutas'] = array('x' => 'Banana', 'Maçã', 'Morango', 'Uva');
		$lista_coisas['lista_Pessoas'] = ['Joao', 'Maria', 'Joaquim'];

		echo '<pre>';
		print_r($lista_coisas);
		echo '</pre>';

		echo '<br>';
		echo $lista_coisas['lista_Pessoas'][2];*/

		echo in_array('Banana', $lista_frutas) . ' diz se existe o valor Banana no Array $lista_frutas';

		echo ' = true';

		echo '<br>';

		echo array_search('Banana', $lista_frutas) . ' é o indice do valor Banana no Array $lista_frutas';

		//para pesquisar em um array multidimensional, é esse comando
		// in_array('Uva', $lista_coisas['frutas'])


		
	?>

	

</body>
</html>