<?php
error_reporting(0);
include '../conexao/conecta.php';

if ($_GET['id']) {
  $sql = "SELECT id_vendedor, nm_vendedor, perc_comissao, ddd_fone, fone, ddd_celular, celular FROM tb_vendedor WHERE id_vendedor = " . $_GET['id'];

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado == false) {
    die("Erro: " . mysqli_error($conexao));
  } else {
    $vendedor = mysqli_fetch_array($resultado);
  }
} 

?>

<meta charset="utf-8">
<link rel="stylesheet" href="../css/edita.css">
<h2>Cadastro de Vendedores</h2>
<a href="formListaVendedor.php">Lista de Vendedores</a> <br> <br>
<form method="POST" action="GravaVendedor.php">

<?php
if ($_GET['id'])  {
  ?>
  <label>ID: </label> <br>
  <input type="TEXT" name="id" readonly="readonly" value=<?php echo $vendedor['id_vendedor'] ?> > <br> <br>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" value=<?php echo $vendedor['nm_vendedor']?>   > <br>

  <label>Perc Comissão:</label> <br>
  <input type="TEXT" name="perc" value=<?php echo $vendedor['perc_comissao']?>   > <br>

  <label>Telefone:</label> <br>
  <div class="num">
  <input class="ddd" type="NUMBER" name="ddd_fone" placeholder="DDD" value=<?php echo $vendedor['ddd_fone']?> >
  <input class="cel" type="TEXT" name="fone" value=<?php echo $vendedor['fone']?> > 
  </div>  <br><br>

  <label>Celular:</label> <br>
  <div class="num">
  <input class="ddd" type="NUMBER" name="ddd_celular" placeholder="DDD" value=<?php echo $vendedor['ddd_celular']?> >
  <input class="cel" type="TEXT" name="celular" value=<?php echo $vendedor['celular']?> >
  </div>  <br><br>

  <?php
}

else {
  ?>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" > <br>

  <label>Perc Comissão:</label> <br>
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