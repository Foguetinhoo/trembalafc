<?php
include_once('Resources/dependencias.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Dosis|Indie+Flower|Kavivanar|Lobster|Montserrat|Noto+Sans|Oswald|Roboto|Roboto+Mono|Roboto+Slab|Titillium+Web" rel="stylesheet">
	<title>Inicio</title>
</head>
<body>
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

	<main>
		<div class="jumbotron  col-xs col-md col-sm  text-center" id="jumbotron">
			<div class="container">
				<h1 class="display-4 my-4" id="oi">Seja bem-vindo ao TREM BALA FC!</h1>
				<hr class="my-3">
				<p>Se interessou? Quer participar do festival? Não perca tempo, se Inscreva já! </p>
				<a class="btn btn-lg" href="inscricao" role="button" id="button"><i class="far fa-edit"></i> Inscrever-se</a></p>
			</div>
		</div>

		<div class="container-fluid" id="rodape">
			<div class="row">
				<div class="col-md-4">
					<h3 class="">Participe!</h3>
					<p>Venha fazer parte desse timasso, e veja que aqui é só tapa de qualidade</p>
				</div>
				<div class="col-md-4">
				
					<ul class="list">
					<h3 class="ml-3">Menu</h3>
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
	<script>
	let verificawidht = ()=>{
	//   var windowWidth = window.innerWidth;
	//   var windowHeight = window.innerHeight;
	//   var screenHeight = screen.height;
	var screenWidth = screen.width;
	var oi =   document.querySelector('#oi');
		if(screenWidth >= 575)
		{
			oi.setAttribute('class','display-4 my-4');
		}	
	}
		window.addEventListener('resize',verificawidht);

	</script>
</body>

</html>