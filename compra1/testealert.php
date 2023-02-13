<html>
<head>
<title> 
    Teste do método window.alert() 
</title> 
<meta charset="utf-8">
</head> 
<body> 
<form name="formCadastro" onsubmit="return validarFormulario()" method="post">
    <label for="nome">Informe o seu Nome:</label>
    <input type="text" name="nome">
    <label for="cpf">Informe o seu CPF:</label>
    <input type="text" name="cpf">
    <input type="submit" value="Enviar">
</form>
<script>
    function validarFormulario(){
        var nomePessoa = document.forms["formCadastro"]["nome"].value;
        var vcpf=document.forms["formCadastro"]["cpf"].value;
        while (nomePessoa == "") {
            alert("Favor informar o seu nome!");
           // return false;     
        }
       //else{
       //     alert("Olá, " + nomePessoa + " !");
        //    return true;
       // }

        while (cpf == "") {
            alert("Favor informar o seu CPF!");
           // return false;     
        }
        //else{
       //     alert("Olá, " + nomePessoa + " !");
       //     return true;
     //   }
    }
</script>
</body> 
</html> 
