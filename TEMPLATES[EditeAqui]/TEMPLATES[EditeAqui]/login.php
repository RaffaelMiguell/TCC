<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login Escambeando</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="container">
		<form class="form-login" action="#" method="POST">				   					
			<div class="titulo">
				<img src="img/png/gray_128/mail.png" id="imagem_titulo">		
				<h3 class="form-login-heading">Login</h3>
				<p>Bora Escambear!</p>
			<div class="form-group">
				<!-- <label class="sr-only" for="email" >E-mail</label>
				<input id="input_email" type="email" name="email" placeholder="E-mail"> -->

				<div class="input-group">
				    <span class="input-group-addon"><img src="img/png/color_18/mail.png" alt=""></span>
				    <input class="form-control input-lg" type="email" id="inputGroupSuccess4" name="email">
			  	</div>


				<!-- <label class="sr-only" for="senha">Senha</label>
				<input id="input_senha"  type="password" name="senha" placeholder="Senha"><br> -->
				<div class="input-group">
				    <span class="input-group-addon"><img src="img/png/color_18/lock.png" alt=""></span>
				    <input class="form-control input-lg" type="text" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
			  	</div><br>
				
				<input class="btn btn-lg btn-primary btn-block" value="Entrar">	
				<br>
				<a href="cadastro.php">Cadastre-se</a>
				
			</div>
		</form>
	</div>
</body>
</html>