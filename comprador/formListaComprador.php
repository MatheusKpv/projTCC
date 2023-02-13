<?php
include '../conexao/conecta.php';
$sql="SELECT id_comprador, nm_comprador, perc_comissao, ddd_fone, fone, ddd_celular, celular FROM tb_comprador";

$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lista.css">
<h2> Lista de Compradores</h2>
<a class="acess" href="../inicio.php">Inicio</a>
<label>|</label>
<a class="acess" href="formEditaComprador.php">Novo</a>
<table>
	<tr>
		<th>ID</th>
		<th>Comprador</th>
		<th>Perc Comissão</th>
		<th>ddd Telefone</th>
		<th>Telefone</th>
		<th>ddd Celular</th>
		<th>Celular</th>

		<th colspan="2">Ações</th>
	</tr>

	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_comprador] </td>";
         	echo "<td> $item[nm_comprador] </td>";
			echo "<td> $item[perc_comissao] </td>";
			echo "<td> $item[ddd_fone] </td>";
			echo "<td> $item[fone] </td>";
			echo "<td> $item[ddd_celular] </td>";
			echo "<td> $item[celular] </td>";
         	

         	echo "<td><a href='formEditaComprador.php?id=$item[id_comprador]'>Editar</a></td>";
         	echo "<td><a href='formExcluirComprador.php?id=$item[id_comprador]'>Excluir</a></td>";
         }
?>
</table>