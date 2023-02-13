<?php
include '../conexao/conecta.php';
$sql="SELECT id_estado, nm_estado, sigla FROM tb_estado";
$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lista.css">
<h2> Lista de Estados</h2>
<a class="acess" href="../inicio.php">Inicio</a>
<label>|</label>
<a class="acess" href="formEditaEstado.php">Novo</a>
<table>
	<tr>
		<th>ID </th>
		<th>Estado</th>
		<th>Sigla</th>
		<th colspan="2">Ações</th>
	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_estado] </td>";
         	echo "<td> $item[nm_estado] </td>";
			echo "<td> $item[sigla] </td>";
         	

         	echo "<td><a href='formEditaEstado.php?id=$item[id_estado]'>Editar</a></td>";
         	echo "<td><a href='formExcluirEstado.php?id=$item[id_estado]'>Excluir</a></td>";
         }
?>
</table>