<h1>Editar Curriculo</h1>
<?php
	$sql = "SELECT * FROM curriculo WHERE id=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php print $row->id?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="text" name="telefone" value="<?php print $row->telefone; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Objetivo</label>
		<input type="text" name="objetivo" value="<?php print $row->objetivo; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Experiencia</label>
		<input type="text" name="experiencia" value="<?php print $row->experiencia; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Formação</label>
		<input type="text" name="formacao" value="<?php print $row->formacao; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>