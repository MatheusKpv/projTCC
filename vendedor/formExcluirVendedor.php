<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_vendedor WHERE id_vendedor=$id";
mysqli_query($conexao,$sql);
header ('location:formListaVendedor.php');
?>