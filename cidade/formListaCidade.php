<?php
include '../conexao/conecta.php';
$sql="SELECT cid.id_cidade, cid.nm_cidade, est.nm_estado FROM tb_cidade cid INNER JOIN tb_estado est ON est.id_estado=cid.fk_id_estado";
$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lista.css">
<h2> Lista de Cidades</h2>
<a class="acess" href="../inicio.php">Inicio</a>
<label>|</label>
<a class="acess" href="formEditaCidade.php">Novo</a>
<table>
	<tr>
		<th>ID </th>
		<th>Cidade</th>
		<th>Estado</th>
		<th colspan="2">Ações</th>
	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_cidade] </td>";
         	echo "<td> $item[nm_cidade] </td>";
			echo "<td> $item[nm_estado] </td>";
         	

         	echo "<td><a href='formEditaCidade.php?id=$item[id_cidade]'>Editar</a></td>";
         	echo "<td><a href='formExcluirCidade.php?id=$item[id_cidade]'>Excluir</a></td>";
         }
?>
</table>