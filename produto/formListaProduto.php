<?php
include '../conexao/conecta.php';
$sql="SELECT prod.id_produto, prod.nm_produto, prod.uni_produto, prod.precocompra, prod.precovenda, prod.qtd_estoque, prod.dt_cadastro,
gr.nm_grupo, prod.obs FROM tb_produto prod INNER JOIN tb_grupo gr ON gr.id_grupo=prod.fk_id_grupo";
$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lista.css">
<h2> Lista de Produtos</h2>
<a class="acess" href="../inicio.php">Inicio</a>
<label>|</label>
<a class="acess" href="formEditaProduto.php">Novo</a>
<table>
	<tr>
		<th>ID </th>
		<th>Produto</th>
		<th>Unidade</th>
		<th>Preço de Compra</th>
		<th>Preço de Venda</th>
		<th>Estoque</th>
		<th>Data</th>
		<th>Grupo</th>
		<th>Obs</th>
		<th colspan="2">Ações</th>
	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_produto] </td>";
         	echo "<td> $item[nm_produto] </td>";
			echo "<td> $item[uni_produto] </td>";
         	echo "<td> $item[precocompra] </td>";
         	echo "<td> $item[precovenda] </td>";
			echo "<td> $item[qtd_estoque] </td>";
			echo "<td> $item[dt_cadastro] </td>";
         	echo "<td> $item[nm_grupo] </td>";
         	echo "<td> $item[obs] </td>";
         	

         	echo "<td><a href='formEditaProduto.php?id=$item[id_produto]'>Editar</a></td>";
         	echo "<td><a href='formExcluirProduto.php?id=$item[id_produto]'>Excluir</a></td>";
         }
?>
</table>