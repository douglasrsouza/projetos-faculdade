<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Atividade</title>
	</head>
	<body>
		<form action="adição.php" method="GET">
			<h3>Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5</h3>
			A <input type="number" name="num1">
			B <input type="number" name="num2">
			<button type="submit">Enviar</button>
		<?php
            $num1 = $_REQUEST['num1'];
            $num2 = $_REQUEST['num2'];
            $soma = $num1 + $num2;

            if ($soma > 20) {
                print $soma + 8;
            } else {
                print $soma - 5;
            }
		?>
	</body>
</html>