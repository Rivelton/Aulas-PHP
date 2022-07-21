<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php 
		//declarando variavel
		$nome = 'Joao';

		//int 
		$idade = 29;

		//float
		$peso = 82.5;

		//boolean
		$fumante_sn = true; //true = 1 ou false = vazio, no fim pode deixar sem ;
	?>

	<h1>Ficha em PHP</h1>
	<br>
	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Peso: <?= $peso ?></p>
	<p>Fumante: <?= $fumante_sn ?></p>
</body>
</html>