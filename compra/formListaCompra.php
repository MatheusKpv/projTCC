<?php
include '../conexao/conecta.php';
$sql="SELECT comp.id_compra, comp.dt_compra, comprad.nm_comprador, forne.nm_forn, comp.vl_total FROM tb_compra comp 
INNER JOIN tb_fornecedor forne ON forne.id_forn=comp.fk_id_fornecedor 
INNER JOIN tb_comprador comprad ON comprad.id_comprador=comp.fk_id_comprador";
$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lista.css">
<h2> Lista de Compras</h2>
<a class="acess" href="../inicio.php">Inicio</a>
<label>|</label>
<a class="acess" href="formEditaCompra.php">Novo</a>
<table>
	<tr>
		<th>ID </th>
		<th>Data de Compra</th>
		<th>Comprador</th>
		<th>Fornecedor</th>
		<th>Valor Total</th>
		<th colspan="3">Ações</th>
	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_compra] </td>";
         	echo "<td> $item[dt_compra] </td>";
			echo "<td> $item[nm_comprador] </td>";
			echo "<td> $item[nm_forn] </td>";
			echo "<td> $item[vl_total] </td>";
         	

         	echo "<td><a href='formEditaCompra.php?id=$item[id_compra]'>Editar</a></td>";
         	echo "<td><a href='formExcluirCompra.php?id=$item[id_compra]'>Excluir</a></td>";

            echo "<td>";

		

		echo "<a href='../compra1/detalheCompra.php?id=$item[id_compra]'><img src='../editar1.png' alt='Detalhes' title='Detalhes'>";
		
		echo "</td>";


         }
?>
</table>