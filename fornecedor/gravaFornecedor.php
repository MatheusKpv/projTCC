<?php
include '../conexao/conecta.php';
$nome=$_POST['nome'];
$cnpj=$_POST['cnpj'];
$dt_ini_ativ=$_POST['dt_ini_ativ'];
$dtcad=$_POST['dtcad'];
$end_rua=$_POST['end_rua'];
$end_nro=$_POST['end_nro'];
$end_compl=$_POST['end_compl'];
$end_cep=$_POST['end_cep'];
$end_bairro=$_POST['end_bairro'];
$cidade=$_POST['cidade'];
$ddd_fone=$_POST['ddd_fone'];
$fone=$_POST['fone'];
$ddd_celular=$_POST['ddd_celular'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$obs=$_POST['obs'];

if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_fornecedor SET nm_forn='$nome', cnpj='$cnpj', dt_ini_ativ='$dt_ini_ativ', dt_cadastro='$dtcad', end_rua='$end_rua', end_nro='$end_nro', 
	end_compl='$end_compl', end_cep= '$end_cep', end_bairro= '$end_bairro', fk_id_cidade='$cidade', ddd_fone='$ddd_fone', fone='$fone', 
	ddd_celular='$ddd_celular', celular='$celular', email='$email', obs= '$obs' WHERE id_forn='$id'";
}
else {

$sql="INSERT INTO tb_fornecedor (nm_forn, cnpj, dt_ini_ativ, dt_cadastro, end_rua, end_nro, end_compl, end_cep, end_bairro, fk_id_cidade, ddd_fone, 
fone, ddd_celular, celular, email, obs) 
VALUES ('$nome', '$cnpj', '$dt_ini_ativ', '$dtcad', '$end_rua', '$end_nro', '$end_compl', '$end_cep', '$end_bairro', '$cidade', '$ddd_fone', 
'$fone', '$ddd_celular', '$celular', '$email', '$obs')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaFornecedor.php");


?>