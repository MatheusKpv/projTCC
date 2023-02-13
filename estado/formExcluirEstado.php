<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_estado WHERE id_estado=$id";
mysqli_query($conexao,$sql);
header ('location:formListaEstado.php');
?>