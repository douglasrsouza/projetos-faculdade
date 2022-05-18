<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
		$nome = $_POST["nome"];
		$telefone = $_POST["telefone"];
		$objetivo = $_POST["objetivo"];
		$experiencia = $_POST["experiencia"];
		$formacao = $_POST["formacao"];

		$sql = "INSERT INTO curriculo (nome, telefone, objetivo, experiencia, formacao) VALUES ('{$nome}', '{$telefone}', '{$objetivo}', '{$experiencia}', '{$formacao}')";

		$res = $conn->query($sql);

		if($res==true){
			print "<script>alert('Cadastro com sucesso');</script>";
		}
		else{
			print "<script>alert('Não foi possivel cadastrar');</script>";
			print "<script>location.href='?page=listar';</script>";		
		}
		break;

		case 'editar':
		$nome = $_POST["nome"];
		$telefone = $_POST["telefone"];
		$objetivo = $_POST["objetivo"];
		$experiencia = $_POST["experiencia"];
		$formacao = $_POST["formacao"];

		$sql = "UPDATE curriculo SET 
				nome='{$nome}',
				telefone='{$telefone}',
				objetivo='{$objetivo}',
				experiencia='{$experiencia}',
				formacao='{$formacao}'
				WHERE
				id=".$_REQUEST["id"];

		$res = $conn->query($sql);

		if($res==true){
			print "<script>alert('Editado com sucesso');</script>";
		}
		else{
			print "<script>alert('Não foi possivel editar');</script>";
			print "<script>location.href='?page=listar';</script>";		
		}
		break;

		case 'excluir':
		$sql = "DELETE FROM curriculo WHERE id=".$_REQUEST["id"];

		$res = $conn->query($sql);

		if($res==true){
			print "<script>alert('Excluido com sucesso');</script>";
		}
		else{
			print "<script>alert('Não foi possivel excluir');</script>";
			print "<script>location.href='?page=listar';</script>";		
		}
		break;
	}