<?php
include '../conexao/conecta.php';
$sql="SELECT id_grupo, nm_grupo FROM tb_grupo";
$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lista.css">
<h2> Lista de Grupos</h2>
<a class="acess" href="../inicio.php">Inicio</a>
<label>|</label>
<a class="acess" href="formEditaGrupo.php">Novo</a>
<table>
	<tr>
		<th>ID </th>
		<th>Grupo</th>
		<th colspan="2">Ações</th>
	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_grupo] </td>";
         	echo "<td> $item[nm_grupo] </td>";

         	echo "<td><a href='formEditaGrupo.php?id=$item[id_grupo]'>Editar</a></td>";
         	echo "<td><a href='formExcluirGrupo.php?id=$item[id_grupo]'>Excluir</a></td>";
         }
?>
</table>