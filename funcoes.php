<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php
		//funçao voide, sem retorno
		function exibirBoasVindas(){
			echo 'Seja Bem vindo';
		}
		
		exibirBoasVindas();

		echo '<br>';

		//com retorno
		function calcularAreaTerreno($alt, $compri) {
			$area = $alt * $compri;
			return $area;

		}
		//pode atribuir o retorno de uma função a uma variavel
		// $resultado = calcularAreaTerreno(2, 4)
		echo calcularAreaTerreno(2, 4);
	?>

	
</body>
</html>