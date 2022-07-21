<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
	<!-- 
	//ceil($numero)- > Arredonda pra cima
	//floor($numero)- > Arredonda pra baixo
	//round($numero)- > Arredonda com base na casa decimal, pode-se passar os parametros de inicio e fim
	//rand()- > Gera um inteiro aleatorio
	//sqrt($numero)- > retorna a raiz quadrada-->
	
	<?php

		$numero = 25.2;

		echo $numero . '<br>';
		echo ceil($numero);

		echo '<hr>';
		echo $numero . '<br>';
		echo floor($numero);

		echo '<hr>';
		echo $numero . '<br>';
		echo round($numero);

		echo '<hr>';
		echo $numero . '<br>';
		echo rand(3, 15);

		echo '<hr>';
		echo $numero . '<br>';
		echo sqrt($numero);

	?>

	
</body>
</html>