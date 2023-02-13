<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_venda WHERE id_venda=$id";

mysqli_query($conexao,$sql);
header ('location:formListaVenda.php');
?>