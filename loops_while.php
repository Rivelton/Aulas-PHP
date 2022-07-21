<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php 
		$num = 0;

		while ($num <= 9) {
			$num++;
			if($num == 4){
				continue;
			}
			echo " O valor é $num <br>";
						
		}

		

		// pode-se usar IF, break, continue em while
		echo 'Fim do loop'
	?>


</body>
</html>