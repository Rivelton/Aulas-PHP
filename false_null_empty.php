<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php

		//null é exclusivamente null, enquanto empty pode ser vazio ou null
		//false não é null, mas é considerado vazio, 

		$fun = null;
		$fun2 = '';
		$fun3 = false; 
		$fun4 = 'abc';

		if (is_null($fun)) {
			echo 'é nulo';
		}else{
			echo 'não é nulo';
		}

		echo '<hr>';

		if (empty($fun2)) {
			echo 'é vazia';
		}else{
			echo 'não é vazia';
		}

		echo '<hr>';

		if ($fun == false) {
			echo 'é falsa';
		}else{
			echo 'não é falsa';
		}
	?>

	
</body>
</html>