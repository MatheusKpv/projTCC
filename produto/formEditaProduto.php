<?php
error_reporting(0);
include '../conexao/conecta.php';

if ($_GET['id']) {
  $sql = "SELECT id_produto, nm_produto, uni_produto, precocompra, precovenda, qtd_estoque, dt_cadastro, fk_id_grupo, obs 
  FROM tb_produto WHERE id_produto = " . $_GET['id'];

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado == false) {
    die("Erro: " . mysqli_error($conexao));
  } else {
    $produto = mysqli_fetch_array($resultado);
  }
} 

$sqlGrupo = "SELECT id_grupo, nm_grupo FROM tb_grupo ORDER BY nm_grupo";
$resultadoGrupo = mysqli_query($conexao, $sqlGrupo);
?>

<meta charset="utf-8">
<link rel="stylesheet" href="../css/edita.css">
<h2>Cadastro de Produtos</h2>
<a href="formListaProduto.php">Lista de Produtos</a> <br> <br>
<form method="POST" action="GravaProduto.php">

<?php
if ($_GET['id'])  {
  ?>
  <label>ID: </label> <br>
  <input type="TEXT" name="id" readonly="readonly" value=<?php echo $produto['id_produto'] ?> > <br> <br>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" value=<?php echo $produto['nm_produto']?>   > <br> 

  <label>Unidade:</label> <br>
  <input type="TEXT" name="uni" value=<?php echo $produto['uni_produto']?>   > <br> 

  <label>Preço de Compra:</label> <br>
  <input type="TEXT" name="precocompra" value=<?php echo $produto['precocompra']?> > <br>

  <label>Preço de Venda:</label> <br>
  <input type="TEXT" name="precovenda" value=<?php echo $produto['precovenda']?> > <br>

  <label>Estoque: </label> <br>
  <input type="number" name="estoque" value=<?php echo $produto['qtd_estoque'] ?> > <br> 

  <label>Data de Cadastro:</label> <br>
  <input type="date" name="dt" value=<?php echo $produto['dt_cadastro'] ?> > <br>

  <label>Grupo:</label> <br>
  <select name="grupo">
    <option>Selecione</option>
    <?php
    while ($itemGrupo=mysqli_fetch_array($resultadoGrupo)) {
      if ($itemGrupo['id_grupo']==$produto['fk_id_grupo']) {
        echo "<option value='$itemGrupo[id_grupo]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemGrupo[id_grupo]' >";
      }
      echo $itemGrupo['nm_grupo']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>
  <label>Observação:</label> <br>
  <TEXTAREA cols=30 rows=05 id="obs" name="obs" ><?php echo $produto['obs']?> </TEXTAREA> <br/> <br/>
  <?php
}

else {
  ?>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" > <br> 

  <label>Unidade:</label> <br>
  <input type="TEXT" name="uni" > <br> 

  <label>Preço de Compra:</label> <br>
  <input type="TEXT" name="precocompra" > <br>

  <label>Preço de Venda:</label> <br>
  <input type="TEXT" name="precovenda" > <br>

  <label>Estoque: </label> <br>
  <input type="number" name="estoque" > <br> 

  <label>Data de Cadastro:</label> <br>
  <input type="date" name="dt"> <br>

  <label>Grupo:</label> <br>
  <select name="grupo">
    <option>Selecione</option>
    <?php
    while ($itemGrupo=mysqli_fetch_array($resultadoGrupo)) {
      if ($itemGrupo['id_grupo']==$produto['fk_id_grupo']) {
        echo "<option value='$itemGrupo[id_grupo]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemGrupo[id_grupo]' >";
      }
      echo $itemGrupo['nm_grupo']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>
  <label>Observação:</label> <br>
  <TEXTAREA cols=30 rows=05 id="obs" name="obs" > </TEXTAREA> <br/> <br/>
  <?php
}
?>                                                      
<input type="submit" name="Salvar" value="Salvar">
</form>