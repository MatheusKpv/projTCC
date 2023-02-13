<?php
include '../conexao/conecta.php';

//$sql = "SELECT v.id_venda, vd.nm_vendedor, cli.nm_cliente,v.dt_venda FROM tb_venda v INNER JOIN tb_vendedor vd ON v.fk_id_vendedor=vd.id_vendedor INNER JOIN tb_cliente cli ON cli.id_cliente=v.fk_id_cliente";
$sql = "SELECT comp.id_compra, forne.nm_forn, comprad.nm_comprador,comp.dt_compra FROM tb_compra comp 
INNER JOIN tb_fornecedor forne ON comp.fk_id_fornecedor=forne.id_forn 
INNER JOIN tb_comprador comprad ON comprad.id_comprador=comp.fk_id_comprador WHERE comp.id_compra=$id";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
	die("SQL: " . $sql . "<br />" . mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<h2>Lista de Compras</h2>
<a href="../compra/formListaCompra.php">Adicionar</a>

<table border="1">
	<tr>
		<td>Id</td>
		<td>Data</td>
		<td>Comprador</td>
		<td>Fornecedor</td>
		<td></td>
	</tr>
<?php
	while($linha = mysqli_fetch_array($resultado)) {
		echo "<tr>";
		echo "<td>$linha[id_compra]</td>";
		echo "<td>$linha[dt_compra]</td>";
		echo "<td>$linha[nm_comprador]</td>";
		echo "<td>$linha[nm_forn]</td>";
		
		echo "<td>";

		

		echo "<a href='detalheCompra.php?id=$linha[id_compra]'><img src='editar.png' alt='Detalhes' title='Detalhes'>";
		
		echo "</td>";
		echo "</tr>";
	}
?>
</table>
