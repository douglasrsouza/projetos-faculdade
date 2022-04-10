<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Maior e Menor</title>
	</head>
	<body>
		<h3>Ler três números inteiros, a partir de um formulário, e imprimir na tela qual o maior e menor valor fornecido.</h3>
		<form action="maior-menor.php" method="GET">
			A <input type="number" name="a">
			B <input type="number" name="b">
			C <input type="number" name="c">
			<button type="submit">Enviar</button>

			<?php
				$menor = min($_REQUEST["a"],$_REQUEST["b"],$_REQUEST["c"]);
				$maior = max($_REQUEST["a"],$_REQUEST["b"],$_REQUEST["c"]);

				print "<p>O menor é ".$menor."<br>";
				print "O maior é ".$maior."</p>";
			?>
		</form>
	</body>
</html>