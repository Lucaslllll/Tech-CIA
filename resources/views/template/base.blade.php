<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/js/bootstrap.js" />
	<link rel="stylesheet" type="text/css" href="assets/css/style-menu.css">

	<link rel="stylesheet" type="text/css" href="style-faca.css">
	<title>TecHay</title>


</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="img col-12">
				<nav class="navbar navbar-expand-lg navbar-dark cor">
					<a class="navbar-brand" href="home">Home</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="#ancora">Produtos<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="faca_seu_pedido">Faça seu pedido</a>
							</li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn bu my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div>
				</nav>

				<!-- jumbotron do index -->
				@yield('adicao')
				

			</div>
		</div>

		<div class="row">
			
		</div>
		<a id="ancora"></a>
		@yield('conteudo')

		<div class="row">
			<div class="rodape col-12">
				
				<p class="centro">Todos os direitos reservados Tech & CIA.</p>


				<p class="centro">Contato: (xx) xx xxxxx-xxxx</p>


				<p class="centro">E-mail: Tech&CIA@empresarial.com.br</p>

				<!-- OBS: precisamos de um E-mail empresarial, este acima é fictício -->

			</div>
		</div>

	</div>


	

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript">
		$('.nav a[href^="#"]').on('click', function(e) {
			e.preventDefault();
			var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
			$('html, body').animate({ 
				scrollTop: targetOffset - 100
			}, 500);
		});
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>