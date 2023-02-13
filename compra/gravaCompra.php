<?php
include '../conexao/conecta.php';
$dt=$_POST['dt'];
$comprador=$_POST['comprador'];
$fornecedor=$_POST['fornecedor'];
$vl=$_POST['vl'];


if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_compra SET dt_compra='$dt', fk_id_comprador='$comprador', fk_id_fornecedor='$fornecedor', vl_total='$vl' WHERE id_compra='$id'";
}
else {

$sql="INSERT INTO tb_compra (dt_compra, fk_id_comprador, fk_id_fornecedor, vl_total) VALUES ('$dt', '$comprador', '$fornecedor', '$vl')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaCompra.php");


?>