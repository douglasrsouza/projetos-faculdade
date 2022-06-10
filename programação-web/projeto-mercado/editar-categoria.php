<h1>Editar Categoria</h1>
<?php
	$sql = "SELECT * FROM categoria WHERE cod_categoria=".$_REQUEST["cod_categoria"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar-categoria" method="POST">
	<input type="hidden" name="acao" value="editar-categoria">
	<input type="hidden" name="cod_categoria" value="<?php print $row->cod_categoria; ?>">
	<div class="mb-3">
		<label>Nome da Categoria</label>
		<input type="text" name="nome_categoria" value="<?php print $row->nome_categoria; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>