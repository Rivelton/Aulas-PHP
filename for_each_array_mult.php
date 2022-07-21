<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php 
		
		$funcionarios = array(
			array('nome' => 'Joao', 'salario' => 2500),
			array('nome' => 'Maria', 'salario' => 2000),
			array('nome' => 'Joaquim', 'salario' => 1700)
		 );

		echo '<pre>';
		print_r($funcionarios);
		echo '</pre>';

		foreach ($funcionarios as $key => $funcionario) {
			foreach ($funcionario as $keys => $value) {
				echo "$keys = ";
				echo "$value <br>";
			}
			
		}

	?>


</body>
</html>