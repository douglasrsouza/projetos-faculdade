<h1>Listar Categorias</h1>
<?php
	$sql = "SELECT * FROM categoria";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)";

	if($qtd > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da Categoria</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->cod_categoria."</td>";
			print "<td>".$row->nome_categoria."</td>";
			print "<td> <button onclick=\"location.href='?page=editar-categoria&cod_categoria=".$row->cod_categoria."';\" class='btn btn-sucess'>Editar</button>
			<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-categoria&acao=excluir-categoria&cod_categoria=".$row->cod_categoria."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'><p>Não encontrou resultado</p></div>";
	}