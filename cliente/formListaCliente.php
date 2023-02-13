<?php
include '../conexao/conecta.php';
$sql="SELECT cli.id_cliente, cli.nm_cliente, cli.cpf, cli.dt_nasc, cli.dt_cadastro, cli.end_rua, cli.end_nro, cli.end_compl, cli.end_cep, 
cid.nm_cidade, cli.ddd_fone, cli.fone, cli.ddd_celular, cli.celular, cli.email, cli.obs 
FROM tb_cliente cli INNER JOIN tb_cidade cid ON cid.id_cidade=cli.fk_id_cidade";

$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lista.css">
<h2> Lista de Clientes</h2>
<a class="acess" href="../inicio.php">Inicio</a>
<label>|</label>
<a class="acess" href="formEditaCliente.php">Novo</a>
<table>
	<tr>
		<th>ID</th>
		<th>Cliente</th>
		<th>CPF</th>
		<th>Data de Nascimento</th>
		<th>Data de Cadastro</th>
		<th>Rua</th>
		<th>Número</th>
		<th>Complemeto</th>
		<th>Cep</th>
		<th>Cidade</th>
		<th>ddd Telefone</th>
		<th>Telefone</th>
		<th>ddd Celular</th>
		<th>Celular</th>
		<th>Email</th>
		<th>Obs</th>

		<th colspan="2">Ações</th>
	</tr>

	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_cliente] </td>";
         	echo "<td> $item[nm_cliente] </td>";
			echo "<td> $item[cpf] </td>";
         	echo "<td> $item[dt_nasc] </td>";
         	echo "<td> $item[dt_cadastro] </td>";
			echo "<td> $item[end_rua] </td>";
			echo "<td> $item[end_nro] </td>";
         	echo "<td> $item[end_compl] </td>";
			echo "<td> $item[end_cep] </td>";
			echo "<td> $item[nm_cidade] </td>";
			echo "<td> $item[ddd_fone] </td>";
			echo "<td> $item[fone] </td>";
			echo "<td> $item[ddd_celular] </td>";
			echo "<td> $item[celular] </td>";
			echo "<td> $item[email] </td>";
         	echo "<td> $item[obs] </td>";
         	

         	echo "<td><a href='formEditaCliente.php?id=$item[id_cliente]'>Editar</a></td>";
         	echo "<td><a href='formExcluirCliente.php?id=$item[id_cliente]'>Excluir</a></td>";
         }
?>
</table>