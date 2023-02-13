<?php

include '../conexao/conecta.php';

//$sql = "DELETE FROM tb_venda_produto WHERE cd_venda = $_GET[venda] AND cd_produto = $_GET[produto]";

//$sql = "DELETE FROM tb_itens_venda WHERE fk_id_venda = $_GET[venda] AND fk_id_principal = $_GET[produto]";

$sql = "DELETE FROM tb_itens_compra WHERE fk_id_compra = $_GET[compra] AND fk_id_produto = $_GET[produto]"; /* apaga todos produtos iguais */

if (!mysqli_query($conexao, $sql)){
	die("SQL: " . $sql . "<br />" . mysqli_query($conexao));
} else {
	header("location: detalheCompra.php?id=$_GET[compra]");
}