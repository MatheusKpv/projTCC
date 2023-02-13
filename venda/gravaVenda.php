<?php
include '../conexao/conecta.php';
$dt=$_POST['dt'];
$cliente=$_POST['cliente'];
$vendedor=$_POST['vendedor'];
$vl=$_POST['vl'];


if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_venda SET dt_venda='$dt', fk_id_cliente='$cliente', fk_id_vendedor='$vendedor', vl_total='$vl' WHERE id_venda='$id'";
}
else {

$sql="INSERT INTO tb_venda (dt_venda, fk_id_cliente, fk_id_vendedor, vl_total) VALUES ('$dt', '$cliente', '$vendedor', '$vl')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaVenda.php");


?>