<?php
include '../conexao/conecta.php';
$sql="SELECT id_auditoria, nm_tabela, dt_evento, evento, vl_anterior, vl_novo FROM tb_auditoria";
$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lista.css">
<h2> Lista Auditoria</h2>
<a href="../inicio.php">inicio</a>
<table>
	<tr>
		<th>ID </th>
		<th>Tabela</th>
		<th>Data</th>
		<th>Evento</th>
		<th>Valor anterior</th>
		<th>Valor novo</th>
		<th>Ações</th>
	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_auditoria] </td>";
         	echo "<td> $item[nm_tabela] </td>";
         	echo "<td> $item[dt_evento] </td>";
         	echo "<td> $item[evento] </td>";
         	echo "<td> $item[vl_anterior] </td>";
         	echo "<td> $item[vl_novo] </td>";
         	echo "<td><a href='formExcluirAuditoria.php?id=$item[id_auditoria]'>Excluir</a></td>";
         }
?>
	<tr>
		<th colspan=10><a href='formExcluirTudoAuditoria.php?id=$item[id_auditoria]'>Excluir Tudo</a></th>
	</tr>
</table>