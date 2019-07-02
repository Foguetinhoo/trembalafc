<?php
include('Controllers/autoload.php');
session_start();
if(isset($_SESSION['usuario'])):
    ?>
    	<script>
			   location.href ="menu";
			</script>
    <?php
    endif;
?>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable = no">
		<link rel="stylesheet" href="../Resources/CSS/login.css">
		<link rel="stylesheet" href="../Library/FontAwesome/css/all.css">
		<!-- <link rel="stylesheet" href="/Library/CSS/bootstrap.css"> -->
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
	</head>
	<body>
		
	<h2 class="tempo"></h2>
			<form class="login_form" id="formlogin">
				<!-- <div class="logo">
					<img src="/Resources/images/logo.png" alt="">
				</div> -->
				<h1><i class="fas fa-lock"></i> login</h1>
			
				<div class="input-group">
					<i class="fas fa-user"></i>
					<input type="text" class="inputUsuario" name="inputUsuario" id="inputUsuario" placeholder="Usuário" maxlength="15">
				</div>	
				<div class="input-group">
					<i class="fas fa-key"></i>
					<input type="password" class="inputSenha" name="inputSenha" id="inputSenha" placeholder="Senha" maxlength="15">	
				</div>	
				<div id="msg" role="alert"></div>		
					<div class="teste">
						<button type="submit" class="button-envia">Entrar <i class="fas fa-arrow-right"></i></button>
					</div>
			</form>
			<script src="../Library/JS/jquery.min.js"></script>
<script src="../Library/JS/popper.min.js"></script>
<script src="../Library/JS/bootstrap.min.js"></script>
<script src="../Library/JS/jquery.validate.min.js"></script>
			<script src="../Resources/JS/validalogin.js"></script>
		
	</body>
</html>