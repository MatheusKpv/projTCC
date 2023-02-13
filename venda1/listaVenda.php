<?php
include '../conexao/conecta.php';

$sql = "SELECT v.id_venda, vd.nm_vendedor, cli.nm_cliente,v.dt_venda FROM tb_venda v INNER JOIN tb_vendedor vd ON v.fk_id_vendedor=vd.id_vendedor INNER JOIN tb_cliente cli ON cli.id_cliente=v.fk_id_cliente";
$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
	die("SQL: " . $sql . "<br />" . mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<h2>Lista de Vendas</h2>
<a href="../venda/formListaVenda.php">Adicionar</a>

<table border="1">
	<tr>
		<td>Id</td>
		<td>Data</td>
		<td>Cliente</td>
		
		<td>Vendedor</td>
		<td></td>
	</tr>
<?php
	while($linha = mysqli_fetch_array($resultado)) {
		echo "<tr>";
		echo "<td>$linha[id_venda]</td>";
		echo "<td>$linha[dt_venda]</td>";
		echo "<td>$linha[nm_cliente]</td>";
		echo "<td>$linha[nm_vendedor]</td>";
		
		echo "<td>";

		

		echo "<a href='detalheVenda.php?id=$linha[id_venda]'><img src='editar.png' alt='Detalhes' title='Detalhes'>";
		
		echo "</td>";
		echo "</tr>";
	}
?>
</table>
