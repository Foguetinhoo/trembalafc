<?php
include_once('Controllers/autoload.php');
session_start();
$login = new Usuario();
$login->verificasession();
$users = new Inscrito();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../Resources/CSS/adm.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../Library/FontAwesome/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis|Indie+Flower|Kavivanar|Lobster|Montserrat|Noto+Sans|Oswald|Roboto|Roboto+Mono|Roboto+Slab|Titillium+Web" rel="stylesheet">

	<title>Inscricao</title>
</head>

<body>

	<!--Menu de Navegação-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container-fluid" id="nav">
			<img src="../Resources/images/logo.png" id="logo-nav">
			<a class="navbar-brand h1 mr-auto ml-2">Trem Bala FC</a>

		</div>
	</nav>

	<main>

		<div class="container-fluid my-5">
			<div class="row">
				<div class="col-xs col-sm col-md col-lg mr-4">
					<div class="card box-shadow">
						<div class="card-header">
							<div class="card-text">
								<h3 class="card-title text-center my-4">Seja bem vindo <?php echo $_SESSION['usuario'] ?>!</h3>
							</div>
							<?php
							if ($_SESSION['usuario'] == 'titiavera') :
								echo '<p>TITIA VERA VOCÊ É FODA MORÔ?
										MELHOR TREINADORA DA PORRA TODA!<i class="fas fa-heart"></i>
										</p';
							endif;
							?>
						</div>
						<div class="card-body text-center">
							<button type="button" id="button" data-toggle="modal" data-target="#logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 my-3">
					<div class="bd-highlight">
					<a href="../Controllers/PlanilhaController.class.php" class="btn btn-md btn-success">
							<i class="fas fa-file-excel"></i> Gerar Planilha</a>
					</div>
					<div class="bd-highlight bt2">
						<a href="../Controllers/PDFController.class.php" class="btn btn-md btn-danger"><i class="far fa-file-pdf"></i> Gerar PDF</a>
					</div>
					<!--/Classes/gerarplanilha.php-->

				</div>
			</div>
		</div>
		<!---->
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Nascimento</th>
					<th scope="col">CPF</th>
					<th scope="col">RG</th>
				</tr>
			</thead>
			<tbody>

				<?php $users->selectLista(); ?>

			</tbody>
		</table>
	</main>
	<!-- <div class="container-fluid" id="rodape">
		<hr class="display-3" style="background: rgba(245, 130, 36, 0.931);">
		<div class="row my-2 ">
			<blockquote class="blockquote text-center col-12  ">
				<p>Desenvolvido por Gilliard.&nbsp; Copyright © 2019 &nbsp;Trem Bala.&nbsp;&nbsp; Todos os direitos reservados.</p>
			</blockquote>
		</div>
	</div> -->
	<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logout" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="logout">Aviso</h4>
				</div>
				<div class="modal-body">
					<h5>Deseja realmente sair?</h5>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar <i class="fas fa-check"></i></button>
					<a class="btn btn-danger" href="../Controllers/logout.php">Sair <i class="fa fa-times fa-md"></i></a>
				</div>
			</div>
		</div>
	</div>

	<!--Fim Modal-->

	<!--Plugins adicionais-->
	<script src="Library/JS/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="../Library/JS/bootstrap-notify.min.js"></script>
	<script src="../Library/JS/jquery.validate.min.js"></script>
	<script src="../Library/JS/jquery.mask.min.js"></script>
	<script src="../Resources/JS/menu.js"></script>
</body>

</html>