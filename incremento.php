<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
	<h3>Pós-incremento</h3>
	<?php
		$a = 7;
		echo "O valor contido em a é $a <br>";
		echo 'O valor contido em a após o incremento é ' . $a++ . '<br>'; 
		//o navegar primeiro le 
		//essa linha e depois atualiza o valor da variavel
		echo "O valor de atualizado é $a";
	?>

	<h3>Pré-incremento</h3>
	<?php
		$a = 7;
		echo "O valor contido em a é $a <br>";
		echo 'O valor contido em a após o incremento é ' . ++$a . '<br>'; 
		//o navegar primeiro le 
		//essa linha e depois atualiza o valor da variavel
		echo "O valor de atualizado é $a";
	?>

	// o decremento funciona do mesmo jeito, podendo ser --$a ou $a--
</body>
</html>