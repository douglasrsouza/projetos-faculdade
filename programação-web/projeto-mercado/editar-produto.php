<h1>Editar Produto</h1>
<?php
	$sql = "SELECT * FROM produto WHERE cod_produto=".$_REQUEST["cod_produto"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar-produto" method="POST">
	<input type="hidden" name="acao" value="editar-produto">
	<input type="hidden" name="cod_produto" value="<?php print $row->cod_produto; ?>">
	<div class="mb-3">
		<label>Categoria</label>
		<input type="text" name="Categoria_cod_categoria" value="<?php print $row->Categoria_cod_categoria; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Nome do Produto</label>
		<input type="text" name="nome_produto" value="<?php print $row->nome_produto; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Quantidade do Produto</label>
		<input type="number" name="quantidade_produto" value="<?php print $row->quantidade_produto; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Validade</label>
		<input type="date" name="data_validade" value="<?php print $row->data_validade; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Valor pago</label>
		<input type="text" name="valor_pago" value="<?php print $row->valor_pago; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Valor venda</label>
		<input type="text" name="valor_venda" value="<?php print $row->valor_venda; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>