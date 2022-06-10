<?php
		switch ($_REQUEST["acao"]) {
		case 'cadastrar-categoria':
		$nome_categoria = $_POST["nome_categoria"];

		$sql = "INSERT INTO categoria (nome_categoria) VALUES ('".$_POST["nome_categoria"]."')";

		$res = $conn->query($sql);

		if($res==true){
			print "<script>alert('Cadastro com sucesso');</script>";
			print "<script>location.href='?page=listar-categoria';</script>";
		}
		else{
			print "<script>alert('Não foi possivel cadastrar');</script>";
		}
		break;

		case 'editar-categoria':
		$nome_categoria = $_POST["nome_categoria"];

		$sql = "UPDATE categoria SET
		nome_categoria='{$nome_categoria}'
		WHERE cod_categoria=".$_REQUEST["cod_categoria"];

		$res = $conn->query($sql);

		if($res==true){
			print "<script>alert('Editado com sucesso');</script>";
			print "<script>location.href='?page=listar-categoria';</script>";
		}
		else{
			print "<script>alert('Não foi possivel editar');</script>";
		}
		break;

		case 'excluir-categoria':
		$sql = "DELETE FROM categoria WHERE cod_categoria=".$_REQUEST["cod_categoria"];

		$res = $conn->query($sql);

		if($res==true){
			print "<script>alert('Excluido com sucesso');</script>";
			print "<script>location.href='?page=listar-categoria';</script>";
		}
		else{
			print "<script>alert('Não foi possivel excluir');</script>";	
		}
		break;

	}
		


	
