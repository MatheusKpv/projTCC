<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_auditoria WHERE id_auditoria=$id";
mysqli_query($conexao, $sql);
header('location:formListaAuditoria.php');
?>