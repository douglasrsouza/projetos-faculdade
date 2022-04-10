<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Vogal ou Consoante</title>
	</head>
	<body>
		<h3>Faça um programa que receba uma letra e diga se é vogal ou consoante.</h3>
		<form action="vogal-consoante.php" method="GET">
			Entre com uma letra
			<input type="text" name="letra">
			<button type="submit">Enviar</button>
		</form>
		<?php
			switch (strtoupper($_REQUEST["letra"])) {
				case 'A':
				case 'E':
				case 'I':
				case 'O':
				case 'U':
					print "É uma vogal";
					break;				
				default:
					print "É uma consoante";
			}
		?>
	</body>
</html>