<?php
include_once('Resources/dependencias.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Dosis|Indie+Flower|Kavivanar|Lobster|Montserrat|Noto+Sans|Oswald|Roboto|Roboto+Mono|Roboto+Slab|Titillium+Web" rel="stylesheet">

	<title>Inscricao</title>
</head>

<body class="ins_page">
	<!--Menu de Navegação-->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container-fluid">
			<img src="Resources/images/logo.png" id="logo-nav">
			<a class="navbar-brand h1 " href="home">Trem Bala FC</a>
			
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navega" aria-controls="navega" aria-expanded="false" aria-label="Toggle navigation"id="btn-mobile">
				<i class="fa fa-align-justify"></i>
			</button>
			<div class="collapse navbar-collapse" id="navega">
				<ul class="navbar-nav">
					<li class="nav-item ">
						<a class="nav-link h4" href="home"><i class="fas fa-home "></i> Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link h4" href="inscricao">
							<i class="fas fa-futbol"></i> Inscricão
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Classe Pai-->
	<main>
		<div class="container-fluid my-5">
			<div class="row " id="form">
				<div class="col-md-7 ml-5">
					<h3 class="display-4 "> Cadastre-se agora!</h3>
				</div>
			</div>
			<div class="row ">
				<div class="  col-xs-7 col-sm-9 col-md-12 col-lg col-xl ml-5 " id="colunaform">
					<div class=" col-xs-6 col-md-12 col-lg-12">
						<div id="alert" class="text-center"></div>
					</div>
					<form id="inscricao" name="inscricao" method="POST">

						<div class="form-row ">
							<div class="form-group  col-xs-8 col-md-8 col-lg-10">
								<label class="">Nome Completo:</label>
								<input type="text" name="nome" class="form-control" id="nome" placeholder="Fulano Oliveira">

							</div>
						</div>
						<div class="form-row ">
							<div class="form-group col-md-8 col-lg-10	">
								<label class="">Data de Nascimento:</label>
								<input type="text" name="datanascimento" id="datanascimento" class="form-control" placeholder="08/03/1998">
							</div>
						</div>
						<div class="form-row ">
							<div class="form-group col-md-4 col-lg-10">
								<label for="cpf" class="">CPF:</label>
								<input type="text" id="cpf" name="cpf" class="form-control" placeholder="444.444.4444-00">
							</div>
							<div class="form-group col-md-4 col-lg-10">
								<label for="cpf" class="">RG:</label>
								<input type="text" id="rg" name="rg" class="form-control" placeholder="44.444.4444-0">
							</div>

						</div>
						<div class="form-row text-center">
							<div class="form-group col-md-4 col-lg-10 ">
								<button type="submit" class="btn btn-info btn-lg" id="button1"><i class="fas fa-envelope"></i> Enviar</button>
							</div>
						</div>

					</form>

				</div>
				<div class="col-xs-5 col-sm-10 col-md-9 col-lg col-xl mr-4">
					<div class="card box-shadow">
						<div class="card-header">
							<h3 class="card-title text-center my-4"><i class="far fa-comments"></i> Entre em contato!</h3>
						</div>
						<div class="card-body">
							<p class=""><i class="fas fa-map-marker-alt fa-2x"></i> Rua Antonio Maria, 36 Praia Grande/SP</p>
							<p><i class="fab fa-whatsapp fa-2x"></i> (13) 98876 1237</p>
							<p> <i class="fab fa-google-plus fa-2x"></i> projetounidosdoparque@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!---->
		<div class="container-fluid" id="rodape">
			<div class="row">
				<div class="col-md-4">
					<h3 class="">Participe!</h3>
					<p>Venha fazer parte desse timasso, e veja que aqui é só tapa de qualidade</p>
				</div>
				<div class="col-md-4">
					<h3 class="ml-3">Menu</h3>
					<ul class="list">
						<li>
							<a href="home" id="home">
								<i class="fas fa-home"></i> Home
							</a>
						</li>
						<li>
							<a href="inscricao" id="inscricao">
								<i class="fas fa-futbol"></i> Inscricão
							</a>
						</li>
						<ul>
				</div>
				<div class="col-md-4">
					<img src="/Resources/images/logo.png" id="logo">
				</div>
			</div>

			<hr class="display-3" style="background: rgba(245, 130, 36, 0.931);">
			<div class="row my-2 ">
				<blockquote class="blockquote text-center col-12  ">
					<p>Desenvolvido por Gilliard.&nbsp; Copyright © 2019 &nbsp;Trem Bala.&nbsp;&nbsp; Todos os direitos reservados.</p>
					<a href="#">
						<i class="fab fa-facebook-square"></i>
					</a>
					<a href="#">
						<i class="fab fa-google-plus-square"></i>
					</a>
				</blockquote>
			</div>
		</div>
	</main>
	<!--<script src="Library/JS/jquery.min.js"></script>-->
	<!--<script src="Library/JS/popper.min.js"></script>-->
	<!--<script src="Library/JS/bootstrap.min.js"></script>-->
	<!--<script src="Library/JS/jquery.validate.min.js"></script>-->
	<!--<script src="Library/JS/jquery.mask.min.js"></script>-->
	<!--<script src="Library/FontAwesome/js/fontawesome.min.js"></script>-->
	<!--<script src="Library/JS/bootstrap-notify.min.js"></script>-->
	<!--<script src="Resources/JS/validaform.js"></script>-->
	<!--<script src="Resources/JS/menu.js"></script>-->
</body>

</html>