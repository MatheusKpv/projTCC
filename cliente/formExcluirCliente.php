<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_cliente WHERE id_cliente=$id";
mysqli_query($conexao,$sql);
header ('location:formListaCliente.php');
?>