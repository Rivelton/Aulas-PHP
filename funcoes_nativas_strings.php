<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
	<!-- //strtolower($texto)- > Transforma em minusculo
	//strtoupper($texto)- > Transforma em maiuscula
	//ucfirst($texto)- > Transforma a primeira letra em maiuscula
	//strlen($texto)- > Conta a quantidade de caracteres da string
	//str_replace('procurar por','substituir por',$texto)- > Substitui uma cadeia de caracteres por outra dentro de uma string
	//substr($texto,'posicao inicial', 'qtde caracteres')- > Retorna parte de uma string -->
	
	<?php
		$texto = 'curso Completo de PHP';

		echo $texto . '<br>';
		echo strtolower($texto);

		echo '<hr>';
		echo $texto . '<br>';
		echo strtoupper($texto);

		echo '<hr>';
		echo $texto . '<br>';
		echo ucfirst($texto);

		echo '<hr>';
		echo $texto . '<br>';
		echo strlen($texto);

		echo '<hr>';
		echo $texto . '<br>';
		echo str_replace('curso', 'Aula', $texto);

		echo '<hr>';
		echo $texto . '<br>';
		echo substr($texto, 2, 12);



	?>

	
</body>
</html>