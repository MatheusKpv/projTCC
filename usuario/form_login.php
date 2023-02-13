<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel=stylesheet href=../css/edita.css>
		<title> Login de Usuário </title>
	</head>
	<body>
		<section class="boxLogin container">
		<div class="content">  
			<form class="login" method="POST" action="cad_login.php">
				<h1><i class="icon icon-key-1"></i> Entre no Sistema: </h1>
				<div class="padding">
					<label>
						<input type="text" class="campos" placeholder=" E-mail" name="login" id="login"><br>
					</label>
					<label>
						<input type="password" class="campos" placeholder=" Senha" name="senha" id="senha"><br>
					</label>
					<input type="submit" class="btn fade_8S" value="entrar" id="entrar" name="entrar"><br>
					<a class="link" href="form_usuario.php">Cadastre-se</a>
				</div>
			</form>
		</div>
	</body>
</html>