<h1>Cadastrar Produto</h1>
<form action="?page=salvar-produto" method="POST">
	<input type="hidden" name="acao" value="cadastrar-produto">
	<div class="mb-3">
		<label>Categoria</label>
		<select name="Categoria_cod_categoria" class="form-control">
			<?php
				$sql = "SELECT * FROM categoria";
				$res = $conn->query($sql);
				while($row = $res->fetch_object()){
					print "<option value='".$row->cod_categoria."'>";
					print $row->nome_categoria."</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Nome do Produto</label>
		<input type="text" name="nome_produto" class="form-control">
	</div>
	<div class="mb-3">
		<div class="mb-3">
		<label>Quantidade do Produto</label>
		<input type="number" name="quantidade_produto" class="form-control">
	</div>
	<div class="mb-3">
		<div class="mb-3">
		<label>Data de Validade do Produto</label>
		<input type="date" name="data_validade" class="form-control">
	</div>
	<div class="mb-3">
		<div class="mb-3">
		<label>Valor pago pelo produto</label>
		<input type="text" name="valor_pago" class="form-control">
	</div>
	<div class="mb-3">
		<div class="mb-3">
		<label>Valor a ser vendido</label>
		<input type="text" name="valor_venda" class="form-control">
	</div>
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>