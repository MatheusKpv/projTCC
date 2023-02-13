<?php

include '../conexao/conecta.php';

$id = $_GET['id'];

//$sql = "SELECT cd_venda, nm_vendedor, dt_venda FROM tb_venda WHERE cd_venda = $cod";

$sql = "SELECT v.id_venda, vd.nm_vendedor, cli.nm_cliente,v.dt_venda FROM tb_venda v INNER JOIN tb_vendedor vd ON v.fk_id_vendedor=vd.id_vendedor INNER JOIN tb_cliente cli ON cli.id_cliente=v.fk_id_cliente WHERE v.id_venda=$id";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
	die("SQL: " . $sql . "<br />" . mysqli_error($conexao));
} else {
	$venda = mysqli_fetch_array($resultado);
}

// LISTA DE PRODUTOS
$sqlProdutos = "SELECT id_produto, nm_produto, precovenda FROM tb_produto ORDER BY nm_produto";
$resultadoProdutos = mysqli_query($conexao, $sqlProdutos);
if (!$resultadoProdutos) {
	die("SQL: " . $sql . "<br />" . mysqli_error($conexao));
} 

// LISTA DE PRODUTOS VENDIDOS
//$sqlProdutosVendidos = "SELECT p.cd_produto, p.nm_produto, p.vl_preco, vp.qt_comprada FROM tb_produto p JOIN tb_venda_produto vp ON p.cd_produto = vp.cd_produto WHERE cd_venda = $cod";

$sqlProdutosVendidos = "SELECT p.id_produto, p.nm_produto, p.precovenda, it.qtidade FROM tb_produto p JOIN tb_itens_venda it ON p.id_produto = it.fk_id_produto WHERE it.fk_id_venda = $id";

$resultadoProdutosVendidos = mysqli_query($conexao, $sqlProdutosVendidos);
if (!$resultadoProdutosVendidos) {
	die("SQL: " . $sql . "<br />" . mysqli_error($conexao));
} 

?>
<link rel="stylesheet" href="../css/venda.css">
<h2>Detalhes da Venda</h2>
Código: <?php echo $venda['id_venda'] ?><br />
Cliente: <?php echo $venda['nm_cliente'] ?><br />
Vendedor: <?php echo $venda['nm_vendedor'] ?><br />
Data: <?php echo $venda['dt_venda'] ?><br /><br />

<form method="post" action="gravaVendaProduto.php">
	<fieldset>
		<legend>Adicionar Produto</legend>
		Produto: 
		<input type="hidden" name="venda" value="<?php echo $id ?>">
		<select name="produto">
			<option>- selecione - </option>
	<?php
		while($linha = mysqli_fetch_array($resultadoProdutos)) {
			echo "<option value='$linha[id_produto]'>";
			echo $linha['nm_produto'] . " - (R$ ".$linha['precovenda'].")";
			echo "</option>";
		}
	?>
		</select> &nbsp;&nbsp;
		Quantidade:
		<input type="text" name="quantidade">&nbsp;&nbsp;
		<input type="submit" value="Adicionar">
	</fieldset>
</form>

<h3>Produtos Vendidos</h3>
<table border="1">
	<tr>
		<td>ID</td>
		<td>Produto</td>
		<td>Preço</td>
		<td>Qtd</td>
		<td>Total</td>
		<td>Ação</td>
	</tr>
<?php
	$total = 0;
	while($linha = mysqli_fetch_array($resultadoProdutosVendidos)) {
		echo "<tr>";
		echo "<td>$linha[id_produto]</td>";
		echo "<td>$linha[nm_produto]</td>";
		echo "<td>R$ $linha[precovenda]</td>";
		echo "<td>$linha[qtidade]</td>";
		echo "<td>R$ ". $linha['precovenda'] * $linha['qtidade'] ."</td>";
		echo "<td>";






		echo "<a href='excluirVendaProduto.php?produto=$linha[id_produto]&venda=$id'><img src='../excluir1.png'></a>";
		echo "</td>";
		echo "</tr>";
		$total = $total + ($linha['precovenda'] * $linha['qtidade']);
	}
?>
	<tr>
		<td colspan="4">TOTAL:
		<td>R$ <?php echo $total ?></td>
	</tr>

</table>
<form action="" method="post">
	
	<input type="hidden" name="total" value="<?php echo $total ?>">


</form> 
<?php mysqli_query($conexao,"UPDATE tb_venda SET vl_total=$total WHERE id_venda=$id ");
?>


<a href="../venda/formListaVenda.php">Finalizar Venda</a>
