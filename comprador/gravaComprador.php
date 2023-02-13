<?php
include '../conexao/conecta.php';
$nome=$_POST['nome'];
$perc=$_POST['perc'];
$ddd_fone=$_POST['ddd_fone'];
$fone=$_POST['fone'];
$ddd_celular=$_POST['ddd_celular'];
$celular=$_POST['celular'];

if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_comprador SET nm_comprador='$nome', perc_comissao='$perc', ddd_fone='$ddd_fone', fone='$fone', ddd_celular='$ddd_celular', 
	celular='$celular' WHERE id_comprador='$id'";
}
else {

$sql="INSERT INTO tb_comprador (nm_comprador, perc_comissao, ddd_fone, fone, ddd_celular, celular) 
VALUES ('$nome', '$perc', '$ddd_fone', '$fone', '$ddd_celular', '$celular')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaComprador.php");


?>