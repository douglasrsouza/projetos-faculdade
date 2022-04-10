<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calculo</title>
	</head>
	<body>
		<h3>Crie um script em PHP que receba pela URL do navegador 3 valores numéricos e os armazene nas variáveis $a, $b e $c. Em seguida, calcule e escreva o valor da expressão ($a - $b) * $c;</h3>
		<form action="calculo.php" method="GET">
			A <input type="number" name="a">
			B <input type="number" name="b">
			C <input type="number" name="c">
			<button type="submit">Enviar</button>
		<?php
            $a = $_REQUEST['a'];
            $b = $_REQUEST['b'];
            $c = $_REQUEST['c'];
            $soma = ($a - $b) * $c;
            print $soma;
		?>
	</body>
</html>