<h1>Cadastrar Curriculo</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="text" name="telefone" class="form-control">
	</div>
	<div class="mb-3">
		<label>Objetivo</label>
		<textarea type="text" name="objetivo" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<label>Experiencia</label>
		<textarea type="text" name="experiencia" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<label>Formação</label>
		<input type="text" name="formacao" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>