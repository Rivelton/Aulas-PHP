<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

	<?php
		//recuperação da data atual / data corrente, tem que 
		$datahora = date('d.m.Y h:i');
		echo $datahora;

		echo '<br>';

		//descobrir as datas de config do PHP
		$atual = date_default_timezone_get();

		//altera as config de datas no arquivo php, passando o parametro de qual lugar a data tem que ser, America/Sao_Paulo
		//date_default_timezone_set()

		echo '<br>';

		//Transforma datas textuais em segundos, compara desde 01/01/1970
		echo strtotime()
	?>

	
</body>
</html>