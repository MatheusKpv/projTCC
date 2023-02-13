<?php
error_reporting(0);
include '../conexao/conecta.php';

if ($_GET['id']) {
  $sql = "SELECT id_grupo, nm_grupo FROM tb_grupo WHERE id_grupo = " . $_GET['id'];

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado == false) {
    die("Erro: " . mysqli_error($conexao));
  } else {
    $grupo = mysqli_fetch_array($resultado);
  }
} 

$sqlGrupo = "SELECT id_grupo, nm_grupo FROM tb_grupo ORDER BY nm_grupo";
$resultadoGrupo = mysqli_query($conexao, $sqlGrupo);
?>

<meta charset="utf-8">
<link rel="stylesheet" href="../css/edita.css">
<h2>Cadastro de Grupos</h2>
<a href="formListaGrupo.php">Lista de Grupos</a> <br> <br>
<form method="POST" action="GravaGrupo.php">

<?php
if ($_GET['id'])  {
  ?>
  <label>ID: </label> <br>
  <input type="TEXT" name="id" readonly="readonly" value=<?php echo $grupo['id_grupo'] ?> > <br> <br>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" value=<?php echo $grupo['nm_grupo']?> > <br>

  <?php
}

else {
  ?>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" > <br>

  <?php
}

?>                                                      
<input type="submit" name="Salvar" value="Salvar">
</form>