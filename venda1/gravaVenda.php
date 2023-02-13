<?php

include 'conexao.php';

$sql = "INSERT INTO tb_venda (nm_vendedor, dt_venda) VALUES ('$_POST[vendedor]', NOW())";

if (!mysqli_query($conexao, $sql)) {
	die("Erro: " . mysqli_erro($conexao) . "<br />SQL: " . $sql);
} else {
	header("location: listaVenda.php");
}