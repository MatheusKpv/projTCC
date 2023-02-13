<?php
include '../conexao/conecta.php';
$login = $_POST['login'];
$senha = MD5($_POST['senha']);


$query_select = "SELECT login FROM tb_usuario WHERE login = '$login'";
$select = mysqli_query($conexao,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    form_usuario.php';</script>";
  }
  else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        form_usuario.php';</script>";
        die();

      }else{
        $query = "INSERT INTO tb_usuario (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($conexao,$query);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='form_login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='form_usuario.php'</script>";
        }
      }
    }
?>