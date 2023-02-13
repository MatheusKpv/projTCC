<?php
$local="localhost";
$usuario='root';
$senha='';
$banco='bd_estoque';
$conexao=mysqli_connect($local, $usuario, $senha, $banco);
if ($conexao==false) {
	die("erro: ".mysqli_connect_error());
}
?>