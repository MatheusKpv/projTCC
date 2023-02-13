<?php
include '../conexao/conecta.php';
$sql="SELECT forn.id_forn, forn.nm_forn, forn.cnpj, forn.dt_ini_ativ, forn.dt_cadastro, forn.end_rua, forn.end_nro, forn.end_compl, forn.end_cep, 
forn.end_bairro, cid.nm_cidade, forn.ddd_fone, forn.fone, forn.ddd_celular, forn.celular, forn.email, forn.obs 
FROM tb_fornecedor forn INNER JOIN tb_cidade cid ON cid.id_cidade=forn.fk_id_cidade";

$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lista.css">
<h2> Lista de Fornecedores</h2>
<a class="acess" href="../inicio.php">Inicio</a>
<label>|</label>
<a class="acess" href="formEditaFornecedor.php">Novo</a>
<table>
	<tr>
		<th>ID</th>
		<th>Fornecedor</th>
		<th>CNPJ</th>
		<th>Data de Inicio das Atividades</th>
		<th>Data de Cadastro</th>
		<th>Rua</th>
		<th>Número</th>
		<th>Complemeto</th>
		<th>Cep</th>
		<th>Bairro</th>
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
         	echo "<td> $item[id_forn] </td>";
         	echo "<td> $item[nm_forn] </td>";
			echo "<td> $item[cnpj] </td>";
         	echo "<td> $item[dt_ini_ativ] </td>";
         	echo "<td> $item[dt_cadastro] </td>";
			echo "<td> $item[end_rua] </td>";
			echo "<td> $item[end_nro] </td>";
         	echo "<td> $item[end_compl] </td>";
			echo "<td> $item[end_cep] </td>";
			echo "<td> $item[end_bairro] </td>";
			echo "<td> $item[nm_cidade] </td>";
			echo "<td> $item[ddd_fone] </td>";
			echo "<td> $item[fone] </td>";
			echo "<td> $item[ddd_celular] </td>";
			echo "<td> $item[celular] </td>";
			echo "<td> $item[email] </td>";
         	echo "<td> $item[obs] </td>";
         	

         	echo "<td><a href='formEditaFornecedor.php?id=$item[id_forn]'>Editar</a></td>";
         	echo "<td><a href='formExcluirFornecedor.php?id=$item[id_forn]'>Excluir</a></td>";
         }
?>
</table>