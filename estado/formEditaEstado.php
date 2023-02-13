<?php
error_reporting(0);
include '../conexao/conecta.php';

if ($_GET['id']) {
  $sql = "SELECT id_estado, nm_estado, sigla FROM tb_estado WHERE id_estado = " . $_GET['id'];

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado == false) {
    die("Erro: " . mysqli_error($conexao));
  } else {
    $estado = mysqli_fetch_array($resultado);
  }
} 

?>

<meta charset="utf-8">
<link rel="stylesheet" href="../css/edita.css">
<h2>Cadastro de Estados</h2>
<a href="formListaEstado.php">Lista de Estados</a> <br> <br>
<form method="POST" action="GravaEstado.php">

<?php
if ($_GET['id'])  {
  ?>
  <label>ID: </label> <br>
  <input type="TEXT" name="id" readonly="readonly" value=<?php echo $estado['id_estado'] ?> > <br> <br>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" value=<?php echo $estado['nm_estado']?>   > <br>

  <label>Sigla:</label> <br>
  <input type="TEXT" name="sigla" value=<?php echo $estado['sigla']?>   > <br>
  
  <?php
}

else {
  ?>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" > <br> 

  <label>Sigla:</label> <br>
  <input type="TEXT" name="sigla" > <br>

  <?php
}
?>                                                      
<input type="submit" name="Salvar" value="Salvar">
</form>