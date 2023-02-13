<?php

include '../conexao/conecta.php';

$id = $_GET['id'];

//$sql = "SELECT cd_compra, nm_forn, dt_compra FROM tb_compra WHERE cd_compra = $cod";

$sql = "SELECT comp.id_compra, forne.nm_forn, comprad.nm_comprador,comp.dt_compra FROM tb_compra comp 
INNER JOIN tb_fornecedor forne ON comp.fk_id_fornecedor=forne.id_forn 
INNER JOIN tb_comprador comprad ON comprad.id_comprador=comp.fk_id_comprador WHERE comp.id_compra=$id";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
	die("SQL: " . $sql . "<br />" . mysqli_error($conexao));
} else {
	$compra = mysqli_fetch_array($resultado);
}

// LISTA DE PRODUTOS
$sqlProdutos = "SELECT id_produto, nm_produto, precocompra FROM tb_produto ORDER BY nm_produto";
$resultadoProdutos = mysqli_query($conexao, $sqlProdutos);
if (!$resultadoProdutos) {
	die("SQL: " . $sql . "<br />" . mysqli_error($conexao));
} 

// LISTA DE PRODUTOS VENDIDOS
//$sqlProdutosComprados = "SELECT p.cd_produto, p.nm_produto, p.vl_preco, vp.qt_comprada FROM tb_produto p JOIN tb_compra_produto vp ON p.cd_produto = vp.cd_produto WHERE cd_compra = $cod";

$sqlProdutosComprados = "SELECT p.id_produto, p.nm_produto, p.precocompra, it.qtidade FROM tb_produto p JOIN tb_itens_compra it ON p.id_produto = it.fk_id_produto WHERE it.fk_id_compra = $id";

$resultadoProdutosComprados = mysqli_query($conexao, $sqlProdutosComprados);
if (!$resultadoProdutosComprados) {
	die("SQL: " . $sql . "<br />" . mysqli_error($conexao));
} 

?>
<link rel="stylesheet" href="../css/venda.css">
<h2>Detalhes da Compra</h2>
Código: <?php echo $compra['id_compra'] ?><br />
Fornecedor: <?php echo $compra['nm_forn'] ?><br />
Comprador: <?php echo $compra['nm_comprador'] ?><br />
Data: <?php echo $compra['dt_compra'] ?><br /><br />

<form method="post" action="gravaCompraProduto.php">
	<fieldset>
		<legend>Adicionar Produto</legend>
		Produto: 
		<input type="hidden" name="compra" value="<?php echo $id ?>">
		<select name="produto">
			<option>- selecione - </option>
	<?php
		while($linha = mysqli_fetch_array($resultadoProdutos)) {
			echo "<option value='$linha[id_produto]'>";
			echo $linha['nm_produto'] . " - (R$ ".$linha['precocompra'].")";
			echo "</option>";
		}
	?>
		</select> &nbsp;&nbsp;
		Quantidade:
		<input type="text" name="quantidade">&nbsp;&nbsp;
		<input type="submit" value="Adicionar">
	</fieldset>
</form>

<h3>Produtos Comprados</h3>
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
	while($linha = mysqli_fetch_array($resultadoProdutosComprados)) {
		echo "<tr>";
		echo "<td>$linha[id_produto]</td>";
		echo "<td>$linha[nm_produto]</td>";
		echo "<td>R$ $linha[precocompra]</td>";
		echo "<td>$linha[qtidade]</td>";
		echo "<td>R$ ". $linha['precocompra'] * $linha['qtidade'] ."</td>";
		echo "<td>";






		echo "<a href='excluirCompraProduto.php?produto=$linha[id_produto]&compra=$id'><img src='../excluir1.png'></a>";
		echo "</td>";
		echo "</tr>";
		$total = $total + ($linha['precocompra'] * $linha['qtidade']);
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
<?php mysqli_query($conexao,"UPDATE tb_compra SET vl_total=$total WHERE id_compra=$id ");
?>


<a href="../compra/formListaCompra.php">Finalizar Compra</a>
