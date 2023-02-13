<?php
include '../conexao/conecta.php';
$nome=$_POST['nome'];
$estado=$_POST['estado'];


if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_cidade SET nm_cidade='$nome', fk_id_estado='$estado' WHERE id_cidade='$id'";
}
else {

$sql="INSERT INTO tb_cidade (nm_cidade, fk_id_estado) VALUES ('$nome', '$estado')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaCidade.php");


?>