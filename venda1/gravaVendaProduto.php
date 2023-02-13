<?php
include '../conexao/conecta.php';

//$sql = "INSERT INTO tb_venda_produto (cd_venda, cd_produto, qt_comprada) VALUES ($_POST[venda], $_POST[produto], $_POST[quantidade]) ";
$sql = "INSERT INTO tb_itens_venda (fk_id_venda, fk_id_produto, qtidade) VALUES ($_POST[venda], $_POST[produto], $_POST[quantidade]) ";

if (!mysqli_query($conexao, $sql)) {
	die("SQL: " . $sql . "<br />" . mysqli_error($conexao));
} else {
	header("location: detalheVenda.php?id=$_POST[venda]");
}