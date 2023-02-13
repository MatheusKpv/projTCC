<?php
error_reporting(0);
include '../conexao/conecta.php';

if ($_GET['id']) {
  $sql = "SELECT id_comprador, nm_comprador, perc_comissao, ddd_fone, fone, ddd_celular, celular FROM tb_comprador 
  WHERE id_comprador = " . $_GET['id'];

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado == false) {
    die("Erro: " . mysqli_error($conexao));
  } else {
    $comprador = mysqli_fetch_array($resultado);
  }
} 

$sqlCidade = "SELECT id_cidade, nm_cidade FROM tb_cidade ORDER BY nm_cidade";
$resultadoCidade = mysqli_query($conexao, $sqlCidade);
?>

<meta charset="utf-8">
<link rel="stylesheet" href="../css/edita.css">
<h2>Cadastro de Compradores</h2>
<a href="formListaComprador.php">Lista de Compradores</a> <br> <br>
<form method="POST" action="GravaComprador.php">

<?php
if ($_GET['id'])  {
  ?>
  <label>ID: </label> <br>
  <input type="TEXT" name="id" readonly="readonly" value=<?php echo $comprador['id_comprador'] ?> > <br> <br>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" value=<?php echo $comprador['nm_comprador']?>   > <br> 

  <label>Percentual Comissão:</label> <br>
  <input type="TEXT" name="perc" value=<?php echo $comprador['perc_comissao']?>   > <br> 

  <label>Telefone:</label> <br>
  <div class="num">
    <input class="ddd" type="NUMBER" name="ddd_fone" placeholder="DDD" value=<?php echo $comprador['ddd_fone']?> >
    <input class="cel" type="TEXT" name="fone" value=<?php echo $comprador['fone']?> >
  </div>  <br><br>

  <label>Celular:</label> <br>
  <div class="num">
    <input class="ddd" type="NUMBER" name="ddd_celular" placeholder="DDD" value=<?php echo $comprador['ddd_celular']?> >
    <input class="cel" type="TEXT" name="celular" value=<?php echo $comprador['celular']?> >
  </div>  <br><br>

  <?php
}

else {
  ?>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" > <br> 

  <label>Percentual Comissão:</label> <br>
  <input type="TEXT" name="perc" > <br> 

  <label>Telefone:</label> <br>
  <div class="num">
    <input class="ddd" type="NUMBER" name="ddd_fone" placeholder="DDD" >
    <input class="cel" type="TEXT" name="fone" > 
  </div>  <br><br>

  <label>Celular:</label> <br>
  <div class="num">
    <input class="ddd" type="NUMBER" name="ddd_celular" placeholder="DDD" >
    <input class="cel" type="TEXT" name="celular" > 
  </div>  <br><br>

  <?php
}
?>                                                      
<input type="submit" name="Salvar" value="Salvar">
</form>