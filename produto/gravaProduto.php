<?php
include '../conexao/conecta.php';
$nm_produto=$_POST['nome'];
$uni=$_POST['uni'];
$precocompra=$_POST['precocompra'];
$precovenda=$_POST['precovenda'];
$estoque=$_POST['estoque'];
$fk_id_grupo=$_POST['grupo'];
$obs=$_POST['obs'];
$dt_cadastro=$_POST['dt'];

if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_produto SET nm_produto='$nm_produto', uni_produto='$uni', precocompra='$precocompra', precovenda='$precovenda', 
	qtd_estoque='$estoque', fk_id_grupo='$fk_id_grupo',obs='$obs',    dt_cadastro= '$dt_cadastro' WHERE id_produto='$id'";
}
else {

$sql="INSERT INTO tb_produto (nm_produto, uni_produto, precocompra, precovenda, qtd_estoque, fk_id_grupo, obs, dt_cadastro) 
VALUES ('$nm_produto', '$uni', '$precocompra', '$precovenda', '$estoque', '$fk_id_grupo', '$obs', '$dt_cadastro')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaProduto.php");


?>