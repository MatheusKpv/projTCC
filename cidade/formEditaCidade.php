<?php
error_reporting(0);
include '../conexao/conecta.php';

if ($_GET['id']) {
  $sql = "SELECT id_cidade, nm_cidade, fk_id_estado FROM tb_cidade WHERE id_cidade = " . $_GET['id'];

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado == false) {
    die("Erro: " . mysqli_error($conexao));
  } else {
    $cidade = mysqli_fetch_array($resultado);
  }
} 

$sqlEstado = "SELECT id_estado, nm_estado FROM tb_estado ORDER BY nm_estado";
$resultadoEstado = mysqli_query($conexao, $sqlEstado);
?>

<meta charset="utf-8">
<link rel="stylesheet" href="../css/edita.css">
<h2>Cadastro de Cidades</h2>
<a href="formListaCidade.php">Lista de Cidades</a> <br> <br>
<form method="POST" action="GravaCidade.php">

<?php
if ($_GET['id'])  {
  ?>
  <label>ID: </label> <br>
  <input type="TEXT" name="id" readonly="readonly" value=<?php echo $cidade['id_cidade'] ?> > <br> <br>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" value=<?php echo $cidade['nm_cidade']?>   > <br>

  <label>Estado:</label> <br>
  <select name="estado">
    <option>Selecione</option>
    <?php
    while ($itemEstado=mysqli_fetch_array($resultadoEstado)) {
      if ($itemEstado['id_estado']==$cidade['fk_id_estado']) {
        echo "<option value='$itemEstado[id_estado]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemEstado[id_estado]' >";
      }
      echo $itemEstado['nm_estado']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>
  <?php
}

else {
  ?>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" > <br> 

  <label>Estado:</label> <br>
  <select name="estado">
    <option>Selecione</option>
    <?php
    while ($itemEstado=mysqli_fetch_array($resultadoEstado)) {
      if ($itemEstado['id_estado']==$cidade['fk_id_estado']) {
        echo "<option value='$itemEstado[id_estado]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemEstado[id_estado]' >";
      }
      echo $itemEstado['nm_estado']; 
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