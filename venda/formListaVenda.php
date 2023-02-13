<?php
include '../conexao/conecta.php';
$sql="SELECT ven.id_venda, ven.dt_venda, cli.nm_cliente, vendor.nm_vendedor, ven.vl_total FROM tb_venda ven 
INNER JOIN tb_cliente cli ON cli.id_cliente=ven.fk_id_cliente INNER JOIN tb_vendedor vendor ON vendor.id_vendedor=ven.fk_id_vendedor";
$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lista.css">
<h2> Lista de Vendas</h2>
<a class="acess" href="../inicio.php">Inicio</a>
<label>|</label>
<a class="acess" href="formEditaVenda.php">Novo</a>
<table>
	<tr>
		<th>ID </th>
		<th>Data de Venda</th>
		<th>Cliente</th>
		<th>Vendedor</th>
		<th>Valor Total</th>
		<th colspan="3">Ações</th>
	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_venda] </td>";
         	echo "<td> $item[dt_venda] </td>";
			echo "<td> $item[nm_cliente] </td>";
			echo "<td> $item[nm_vendedor] </td>";
			echo "<td> $item[vl_total] </td>";
         	

         	echo "<td><a href='formEditaVenda.php?id=$item[id_venda]'>Editar</a></td>";
         	echo "<td><a href='formExcluirVenda.php?id=$item[id_venda]'>Excluir</a></td>";

            echo "<td>";

		

		echo "<a href='../venda1/detalheVenda.php?id=$item[id_venda]'><img src='../editar1.png' alt='Detalhes' title='Detalhes'>";
		
		echo "</td>";


         }
?>
</table>