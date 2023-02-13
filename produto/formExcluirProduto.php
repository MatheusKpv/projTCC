<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_produto WHERE id_produto=$id";
mysqli_query($conexao,$sql);
header ('location:formListaProduto.php');
?>