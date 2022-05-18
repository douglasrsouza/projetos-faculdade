<h1>Listar Curriculo</h1>
<?php
	$sql = "SELECT * FROM curriculo";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>Telefone</th>";
		print "<th>Objetivo</th>";
		print "<th>Experiencia</th>";
		print "<th>Formação</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->telefone."</td>";
			print "<td>".$row->objetivo."</td>";
			print "<td>".$row->experiencia."</td>";
			print "<td>".$row->formacao."</td>";
			print "<td>
			<button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-sucess'>Editar</button>
			<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'><p>Não encontrou resultado</p></div>";
	}