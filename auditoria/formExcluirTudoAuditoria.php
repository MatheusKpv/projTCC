<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_auditoria";
mysqli_query($conexao, $sql);
header('location:formListaAuditoria.php');
?>