<?php
include '../conexao/conecta.php';
$nm_grupo=$_POST['nome'];

if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_grupo SET nm_grupo='$nm_grupo' WHERE id_grupo='$id'";
}
else {

$sql="INSERT INTO tb_grupo (nm_grupo) 
VALUES ('$nm_grupo')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaGrupo.php");

?>