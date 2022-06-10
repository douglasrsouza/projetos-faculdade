<?php
		switch ($_REQUEST["acao"]) {
		case 'cadastrar-produto':
		$Categoria_cod_categoria = $_POST["Categoria_cod_categoria"];
		$nome_produto = $_POST["nome_produto"];
		$quantidade_produto = $_POST["quantidade_produto"];
		$data_validade = $_POST["data_validade"];
		$valor_pago = $_POST["valor_pago"];
		$valor_venda = $_POST["valor_venda"];

		$sql = "INSERT INTO produto (
			Categoria_cod_categoria, nome_produto, quantidade_produto, data_validade, valor_pago, valor_venda
			) VALUES (
			".$_POST["Categoria_cod_categoria"].",
			'".$_POST["nome_produto"]."',
			'".$_POST["quantidade_produto"]."',
			'".$_POST["data_validade"]."',
			'".$_POST["valor_pago"]."',
			'".$_POST["valor_venda"]."'
			)";

		$res = $conn->query($sql);

		if($res==true){
			print "<script>alert('Cadastrou com sucesso');</script>";
			print "<script>location.href='?page=listar-produto';</script>";
		}
		else{
			print "<script>alert('Não foi possivel cadastrar');</script>";
		}
		break;

		case 'editar-produto':
		$Categoria_cod_categoria = $_POST["Categoria_cod_categoria"];
		$nome_produto = $_POST["nome_produto"];
		$quantidade_produto = $_POST["quantidade_produto"];
		$data_validade = $_POST["data_validade"];
		$valor_pago = $_POST["valor_pago"];
		$valor_venda = $_POST["valor_venda"];

		$sql = "UPDATE produto SET
		Categoria_cod_categoria='{$Categoria_cod_categoria}',
		nome_produto='{$nome_produto}',
		quantidade_produto='{$quantidade_produto}',
		data_validade='{$data_validade}',
		valor_pago='{$valor_pago}',
		valor_venda='{$valor_venda}'
		WHERE cod_produto=".$_REQUEST["cod_produto"];

		$res = $conn->query($sql);

		if($res==true){
			print "<script>alert('Editado com sucesso');</script>";
			print "<script>location.href='?page=listar-produto';</script>";
		}
		else{
			print "<script>alert('Não foi possivel editar');</script>";
		}
		break;

		case 'excluir-produto':
		$sql = "DELETE FROM produto WHERE cod_produto=".$_REQUEST["cod_produto"];

		$res = $conn->query($sql);

		if($res==true){
			print "<script>alert('Excluido com sucesso');</script>";
			print "<script>location.href='?page=listar-produto';</script>";
		}
		else{
			print "<script>alert('Não foi possivel excluir');</script>";	
		}
		break;
		}
	
