<?php
include '../conexao/conecta.php';
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$dtnasc=$_POST['dtnasc'];
$dtcad=$_POST['dtcad'];
$end_rua=$_POST['end_rua'];
$end_nro=$_POST['end_nro'];
$end_compl=$_POST['end_compl'];
$end_cep=$_POST['end_cep'];
$cidade=$_POST['cidade'];
$ddd_fone=$_POST['ddd_fone'];
$fone=$_POST['fone'];
$ddd_celular=$_POST['ddd_celular'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$obs=$_POST['obs'];

if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_cliente SET nm_cliente='$nome', cpf='$cpf', dt_nasc='$dtnasc', dt_cadastro='$dtcad', end_rua='$end_rua', end_nro='$end_nro', 
	end_compl='$end_compl', end_cep= '$end_cep', fk_id_cidade='$cidade', ddd_fone='$ddd_fone', fone='$fone', ddd_celular='$ddd_celular', 
	celular='$celular', email='$email', obs= '$obs' WHERE id_cliente='$id'";
}
else {

$sql="INSERT INTO tb_cliente (nm_cliente, cpf, dt_nasc, dt_cadastro, end_rua, end_nro, end_compl, end_cep, fk_id_cidade, ddd_fone, fone, 
ddd_celular, celular, email, obs) 
VALUES ('$nome', '$cpf', '$dtnasc', '$dtcad', '$end_rua', '$end_nro', '$end_compl', '$end_cep', '$cidade', '$ddd_fone', '$fone', 
'$ddd_celular', '$celular', '$email', '$obs')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaCliente.php");


?>