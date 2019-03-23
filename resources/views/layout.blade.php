<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Loja Virtual - @yield('pagina_titulo')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Styles -->
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<nav>
			<div class="nav-wrapper light-blue row">
				<span class="left">
					<a href="{{ route('index') }}" class="brand-logo col offset-l1">Loja Virtual
					</a>
					<a href="#" data-activates="mobile-menu" class="button-collapse">
						<i class="material-icons">menu</i>
					</a>
				</span>
				<ul class="right hide-on-med-and-down">
					@if (Auth::guest())
						<li><a href="{{ url('/login') }}" >Entrar</a></li>
						<li><a href="{{ url('/register') }}" >Cadastre-se</a></li>
					@else
						<li>
							<a class="dropdown-button" href="#!" data-activates="dropdown-user">
								Olá {{ Auth::user()->name }}!<i class="material-icons right">arrow_drop_down</i>
							</a>
							<ul id="dropdown-user" data-activates="dropdown-content">
								<li>
									<a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair
									</a>
								</li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</nav>
	</header>
	<main>
		@yield('pagina_conteudo')
	</main>
	<footer class="page-footer blue">
		<div class="footer-copyright">
			<div class="container">
				Carrinho compras
			</div>
		</div>
	</footer>

	<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	@stack('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
			// $(".button-collapse").sideNav();
			$('select').material_select();
		});
	</script>
</body>
</html>
