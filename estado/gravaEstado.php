<?php
include '../conexao/conecta.php';
$nome=$_POST['nome'];
$sigla=$_POST['sigla'];


if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_estado SET nm_estado='$nome', sigla='$sigla' WHERE id_estado='$id'";
}
else {

$sql="INSERT INTO tb_estado (nm_estado, sigla) VALUES ('$nome', '$sigla')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaEstado.php");


?>