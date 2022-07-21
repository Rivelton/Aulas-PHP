<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php 
		/*$num = 0;

		do {
			$num++;
			if($num == 4){
				continue;
			}
			 echo "O valor de num é $num <br>";
		} while ($num <= 9);*/

		for ($num = 1; $num <= 10 ; $num++) { 
			if ($num == 4) {
				continue;
			}
			echo "O valor de num é $num <br>";
		}
	?>


</body>
</html>