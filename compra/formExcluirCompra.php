<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_compra WHERE id_compra=$id";

//$sql="DELETE FROM tb_compra WHERE fk_id_compra=$_GET[venda] AND fk_id_produto = $_GET[produto] ";

mysqli_query($conexao,$sql);
header ('location:formListaCompra.php');
?>