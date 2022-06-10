<h1>Listar Produtos</h1>
<?php
	$sql = "SELECT * FROM produto AS p
			INNER JOIN categoria AS c
			ON p.categoria_cod_categoria = c.cod_categoria";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)";

	if($qtd > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Categoria</th>";
		print "<th>Nome</th>";
		print "<th>Quantidade</th>";
		print "<th>Validade</th>";
		print "<th>Valor pago</th>";
		print "<th>Valor venda</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->cod_produto."</td>";
			print "<td>".$row->nome_categoria."</td>";
			print "<td>".$row->nome_produto."</td>";
			print "<td>".$row->quantidade_produto."</td>";
			print "<td>".$row->data_validade."</td>";
			print "<td>".$row->valor_pago."</td>";
			print "<td>".$row->valor_venda."</td>";
			print "<td> <button onclick=\"location.href='?page=editar-produto&cod_produto=".$row->cod_produto."';\" class='btn btn-sucess'>Editar</button>
			<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-produto&acao=excluir-produto&cod_produto=".$row->cod_produto."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'><p>Não encontrou resultado</p></div>";
	}