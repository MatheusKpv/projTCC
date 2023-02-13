<?php
error_reporting(0);
include '../conexao/conecta.php';

if ($_GET['id']) {
  $sql = "SELECT id_compra, dt_compra, fk_id_comprador, fk_id_fornecedor, vl_total FROM tb_compra WHERE id_compra = " . $_GET['id'];

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado == false) {
    die("Erro: " . mysqli_error($conexao));
  } else {
    $compra = mysqli_fetch_array($resultado);
  }
} 

$sqlForn = "SELECT id_forn, nm_forn FROM tb_fornecedor ORDER BY nm_forn";
$resultadoForn = mysqli_query($conexao, $sqlForn);

$sqlComprador = "SELECT id_comprador, nm_comprador FROM tb_comprador ORDER BY nm_comprador";
$resultadoComprador = mysqli_query($conexao, $sqlComprador);

?>

<meta charset="utf-8">
<link rel="stylesheet" href="../css/edita.css">
<h2>Cadastro de Compras</h2>
<a href="formListaCompra.php">Lista de Compras</a> <br> <br>
<form method="POST" action="GravaCompra.php">

<?php
if ($_GET['id'])  {
  ?>
  <label>ID: </label> <br>
  <input type="TEXT" name="id" readonly="readonly" value=<?php echo $compra['id_compra'] ?> > <br> <br>

  <label>Data de Compra:</label> <br>
  <input type="DATE" name="dt" value=<?php echo $compra['dt_compra']?>   > <br>

  <label>Comprador:</label> <br>
  <select name="comprador">
    <option>Selecione</option>
    <?php
    while ($itemComprador=mysqli_fetch_array($resultadoComprador)) {
      if ($itemComprador['id_comprador']==$compra['fk_id_comprador']) {
        echo "<option value='$itemComprador[id_comprador]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemComprador[id_comprador]' >";
      }
      echo $itemComprador['nm_comprador']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>

  <label>Fornecedor:</label> <br>
  <select name="fornecedor">
    <option>Selecione</option>
    <?php
    while ($itemForn=mysqli_fetch_array($resultadoForn)) {
      if ($itemForn['id_forn']==$compra['fk_id_fornecedor']) {
        echo "<option value='$itemForn[id_forn]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemForn[id_forn]' >";
      }
      echo $itemForn['nm_forn']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>

  <label>Valor Total:</label> <br>
  <input type="TEXT" name="vl" value=<?php echo $compra['vl_total']?> readonly='readonly'  > <br>
  <?php
}

else {
  ?>

  <label>Data de Compra:</label> <br>
  <input type="DATE" name="dt" > <br>

  <label>Comprador:</label> <br>
  <select name="comprador">
    <option>Selecione</option>
    <?php
    while ($itemComprador=mysqli_fetch_array($resultadoComprador)) {
      if ($itemComprador['id_comprador']==$compra['fk_id_comprador']) {
        echo "<option value='$itemComprador[id_comprador]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemComprador[id_comprador]' >";
      }
      echo $itemComprador['nm_comprador']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>

  <label>Fornecedor:</label> <br>
  <select name="fornecedor">
    <option>Selecione</option>
    <?php
    while ($itemForn=mysqli_fetch_array($resultadoForn)) {
      if ($itemForn['id_forn']==$compra['fk_id_fornecedor']) {
        echo "<option value='$itemForn[id_forn]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemForn[id_forn]' >";
      }
      echo $itemForn['nm_forn']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>

  <?php
}
?>                                                      
<input type="submit" name="Salvar" value="Salvar">
</form>