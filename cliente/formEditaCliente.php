<?php
error_reporting(0);
include '../conexao/conecta.php';

if ($_GET['id']) {
  $sql = "SELECT id_cliente, nm_cliente, cpf, dt_nasc, dt_cadastro, end_rua, end_nro, end_compl, end_cep, fk_id_cidade, ddd_fone, fone, 
  ddd_celular, celular, email, obs FROM tb_cliente WHERE id_cliente = " . $_GET['id'];

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado == false) {
    die("Erro: " . mysqli_error($conexao));
  } else {
    $cliente = mysqli_fetch_array($resultado);
  }
} 

$sqlCidade = "SELECT id_cidade, nm_cidade FROM tb_cidade ORDER BY nm_cidade";
$resultadoCidade = mysqli_query($conexao, $sqlCidade);
?>

<meta charset="utf-8">
<link rel="stylesheet" href="../css/edita.css">
<h2>Cadastro de Clientes</h2>
<a href="formListaCliente.php">Lista de Clientes</a> <br> <br>
<form method="POST" action="GravaCliente.php">

<?php
if ($_GET['id'])  {
  ?>
  <label>ID: </label> <br>
  <input type="TEXT" name="id" readonly="readonly" value=<?php echo $cliente['id_cliente'] ?> > <br> <br>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" value=<?php echo $cliente['nm_cliente']?>   > <br> 

  <label>CPF:</label> <br>
  <input type="TEXT" name="cpf" value=<?php echo $cliente['cpf']?>   > <br> 

  <label>Data de Nascimento:</label> <br>
  <input type="date" name="dtnasc" value=<?php echo $cliente['dt_nasc'] ?> > <br>

  <label>Data de Cadastro:</label> <br>
  <input type="date" name="dtcad" value=<?php echo $cliente['dt_cadastro'] ?> > <br>

  <label>Rua:</label> <br>
  <input type="TEXT" name="end_rua" value=<?php echo $cliente['end_rua']?> > <br>

  <label>Número:</label> <br>
  <input type="NUMBER" name="end_nro" value=<?php echo $cliente['end_nro']?> > <br>

  <label>Complemento: </label> <br>
  <input type="TEXT" name="end_compl" value=<?php echo $cliente['end_compl'] ?> > <br> 

  <label>CEP:</label> <br>
  <input type="TEXT" name="end_cep" value=<?php echo $cliente['end_cep'] ?> > <br>

  <label>Cidade:</label> <br>
  <select name="cidade">
    <option>Selecione</option>
    <?php
    while ($itemCidade=mysqli_fetch_array($resultadoCidade)) {
      if ($itemCidade['id_cidade']==$cliente['fk_id_cidade']) {
        echo "<option value='$itemCidade[id_cidade]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemCidade[id_cidade]' >";
      }
      echo $itemCidade['nm_cidade']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>

  <label>Telefone:</label> <br>
  <div class="num">
    <input class="ddd" type="NUMBER" name="ddd_fone" placeholder="DDD" value=<?php echo $cliente['ddd_fone']?> >
    <input class="cel" type="TEXT" name="fone" value=<?php echo $cliente['fone']?> > 
  </div><br><br>
  <label>Celular:</label> <br>
  <div class="num">
    <input class="ddd" type="NUMBER" name="ddd_celular" placeholder="DDD" value=<?php echo $cliente['ddd_celular']?> >
    <input class="cel" type="TEXT" name="celular" value=<?php echo $cliente['celular']?> > 
  </div><br><br>
  <label>Email:</label> <br>
  <input class="email" type="TEXT" name="email" value=<?php echo $cliente['email']?> > <br>

  <label>Observação:</label> <br>
  <TEXTAREA cols=30 rows=05 id="obs" name="obs" ><?php echo $cliente['obs']?> </TEXTAREA> <br/> <br/>
  <?php
}

else {
  ?>

  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" > <br> 

  <label>CPF:</label> <br>
  <input type="TEXT" name="cpf" > <br> 

  <label>Data de Nascimento:</label> <br>
  <input type="date" name="dtnasc" > <br>

  <label>Data de Cadastro:</label> <br>
  <input type="date" name="dtcad" > <br>

  <label>Rua:</label> <br>
  <input type="TEXT" name="end_rua" > <br>

  <label>Número:</label> <br>
  <input type="NUMBER" name="end_nro" > <br>

  <label>Complemento: </label> <br>
  <input type="TEXT" name="end_compl" > <br> 

  <label>CEP:</label> <br>
  <input type="TEXT" name="end_cep" > <br>

  <label>Cidade:</label> <br>
  <select name="cidade">
    <option>Selecione</option>
    <?php
    while ($itemCidade=mysqli_fetch_array($resultadoCidade)) {
      if ($itemCidade['id_cidade']==$cliente['fk_id_cidade']) {
        echo "<option value='$itemCidade[id_cidade]' selected='selected' >";
        # code...
      } 
      else {
        echo "<option value='$itemCidade[id_cidade]' >";
      }
      echo $itemCidade['nm_cidade']; 
      echo "</option>";
      # code...
    }
  ?>
  </select>
  <br><br>

  <label>Telefone:</label> <br>
  <div class="num">
    <input class="ddd" type="NUMBER" name="ddd_fone" placeholder="DDD" >
    <input class="cel" type="TEXT" name="fone" > 
  </div><br><br>

  <label>Celular:</label> <br>
  <div class="num">
    <input class="ddd" type="NUMBER" name="ddd_celular" placeholder="DDD" >
  <input class="cel" type="TEXT" name="celular" >
  </div><br><br>

  <label>Email:</label> <br>
  <input class="email" type="TEXT" name="email" > <br>

  <label>Observação:</label> <br>
  <TEXTAREA cols=30 rows=05 id="obs" name="obs" > </TEXTAREA> <br/> <br/>
  <?php
}
?>                                                      
<input type="submit" name="Salvar" value="Salvar">
</form>