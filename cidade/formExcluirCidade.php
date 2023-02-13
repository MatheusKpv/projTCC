<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_cidade WHERE id_cidade=$id";
mysqli_query($conexao,$sql);
header ('location:formListaCidade.php');
?>