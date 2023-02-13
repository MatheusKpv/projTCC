<?php
include '../conexao/conecta.php';
$nome=$_POST['nome'];
$perc=$_POST['perc'];
$dddfone=$_POST['ddd_fone'];
$fone=$_POST['fone'];
$dddcel=$_POST['ddd_celular'];
$cel=$_POST['celular'];

if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_vendedor SET nm_vendedor='$nome', perc_comissao='$perc', ddd_fone='$dddfone', fone='$fone', ddd_celular='$dddcel', 
	celular='$cel' WHERE id_vendedor='$id'";
}
else {

$sql="INSERT INTO tb_vendedor (nm_vendedor, perc_comissao, ddd_fone, fone, ddd_celular, celular) 
VALUES ('$nome', '$perc', '$dddfone', '$fone', '$dddcel', '$cel')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaVendedor.php");


?>