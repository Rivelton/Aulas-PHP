<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php 
		
		$itens = array('sofa', 'mesa', 'cadeira', 'fogão', 'geladeira');

		echo '<pre>';
		print_r($itens);
		echo '</pre>';

		foreach ($itens as $key => $value) {
			echo "$key = ";
			echo "$value <br>";
		}
	?>


</body>
</html>