<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_grupo WHERE id_grupo=$id";
mysqli_query($conexao,$sql);
header ('location:formListaGrupo.php');
?>