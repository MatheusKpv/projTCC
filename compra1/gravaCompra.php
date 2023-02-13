<?php

include 'conexao.php';

$sql = "INSERT INTO tb_compra (nm_forn, nm_comprador, dt_compra) VALUES ('$_POST[fornecedor]', '$_POST[comprador]', NOW())";

if (!mysqli_query($conexao, $sql)) {
	die("Erro: " . mysqli_erro($conexao) . "<br />SQL: " . $sql);
} else {
	header("location: listaCompra.php");
}