<?php
error_reporting(0);
include '../conexao/conecta.php';

if ($_GET['id']) {
  $sql = "SELECT id_venda, dt_venda, fk_id_cliente, fk_id_vendedor, vl_total FROM tb_venda WHERE id_venda = " . $_GET['id'];

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado == false) {
    die("Erro: " . mysqli_error($conexao));
  } else {
    $venda = mysqli_fetch_array($resultado);
  }
} 

$sqlCliente = "SELECT id_cliente, nm_cliente FROM tb_cliente ORDER BY nm_cliente";
$resultadoCliente = mysqli_query($conexao, $sqlCliente);

$sqlVendedor = "SELECT id_vendedor, nm_vendedor FROM tb_vendedor ORDER BY nm_vendedor";
$resultadoVendedor = mysqli_query($conexao, $sqlVendedor);
?>

<meta charset="utf-8">
<link rel="stylesheet" href="../css/edita.css">
<h2>Cadastro de Vendas</h2>
<a href="formListaVenda.php">Lista de Vendas</a> <br> <br>
<form method="POST" action="GravaVenda.php">

<?php
if ($_GET['id'])  {
  ?>
  <label>ID: </label> <br>
  <input type="TEXT" name="id" readonly="readonly" value=<?php echo $venda['id_venda'] ?> > <br> <br>

  <label>Data de Venda:</label> <br>
  <input type="DATE" name="dt" value=<?php echo $venda['dt_venda']?>   > <br>

  <label>Cliente:</label> <br>
  <select name="cliente">
    <option>Selecione</option>
    <?php
    while ($itemCliente=mysqli_fetch_array($resultadoCliente)) {
      if ($itemCliente['id_cliente']==$venda['fk_id_cliente']) {
        echo "<option value='$itemCliente[id_cliente]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemCliente[id_cliente]' >";
      }
      echo $itemCliente['nm_cliente']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>

  <label>Vendedor:</label> <br>
  <select name="vendedor">
    <option>Selecione</option>
    <?php
    while ($itemVendedor=mysqli_fetch_array($resultadoVendedor)) {
      if ($itemVendedor['id_vendedor']==$venda['fk_id_vendedor']) {
        echo "<option value='$itemVendedor[id_vendedor]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemVendedor[id_vendedor]' >";
      }
      echo $itemVendedor['nm_vendedor']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>

  <label>Valor Total:</label> <br>
  <input type="TEXT" name="vl" value=<?php echo $venda['vl_total']?> readonly='readonly'  > <br>
  <?php
}

else {
  ?>

<label>Data de Venda:</label> <br>
  <input type="DATE" name="dt" > <br>

  <label>Cliente:</label> <br>
  <select name="cliente">
    <option>Selecione</option>
    <?php
    while ($itemCliente=mysqli_fetch_array($resultadoCliente)) {
      if ($itemCliente['id_cliente']==$venda['fk_id_cliente']) {
        echo "<option value='$itemCliente[id_cliente]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemCliente[id_cliente]' >";
      }
      echo $itemCliente['nm_cliente']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>

  <label>Vendedor:</label> <br>
  <select name="vendedor">
    <option>Selecione</option>
    <?php
    while ($itemVendedor=mysqli_fetch_array($resultadoVendedor)) {
      if ($itemVendedor['id_vendedor']==$venda['fk_id_vendedor']) {
        echo "<option value='$itemVendedor[id_vendedor]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemVendedor[id_vendedor]' >";
      }
      echo $itemVendedor['nm_vendedor']; 
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