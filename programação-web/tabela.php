<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tabelas</title>
	</head>
	<body>
		<h3>Escreva uma função que recebe, por parâmetro, o número de linhas, colunas e um conteúdo (texto) qualquer. Que serão utilizados para criar uma tabela HTML com essas características.</h3>
		<form action="tabela.php" method="GET">
			Linha <input type="number" name="linha">
			Coluna <input type="number" name="coluna">
			Texto <input type="text" name="texto">
			<button type="submit">Enviar</button>
		</form>
		<table border="1">
		<?php
			for ($row=1; $row <= $_REQUEST["linha"]; $row++) { 
				print "<tr>";
				for($col=1; $col <= $_REQUEST["coluna"] ; $col++) { 
					print "<td>";
					print $_REQUEST["texto"];
					print "</td>";
				}
				print "</tr>";
			}
		?>
		</table>
	</body>
</html>