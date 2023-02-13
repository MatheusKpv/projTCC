<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_comprador WHERE id_comprador=$id";
mysqli_query($conexao,$sql);
header ('location:formListaComprador.php');
?>