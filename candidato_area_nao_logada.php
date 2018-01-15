<!DOCTYPE html>
<html lang="pt-BR" xmlns:id="http://www.w3.org/1999/xhtml">
<head> <!-- Inicio do cabeçalho -->
	<link rel="stylesheet"  href="_css/bootstrap.min.css" >
	<link rel="stylesheet"  href="_css/header.css" >
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8" />
	<title>Trabalhe Conosco</title> <!-- Título da página -->
</head> <!-- Fim do cabeçalho -->
<body> <!-- Começo do Body -->
	<!-- INICIO DO HEADER PERSONALIZADO, PORÉM COM A CLASSE CONTEINER DO BOOTSTRAP-->
	<header class="container">
		<h1 class="float-l">
			<a href="#" title="Trabalhe Conosco" onclick="location.href='index.php'"> Trabalhe Conosco </a>
		</h1>

		<input type="checkbox" id="control-nav" />
		<label for="control-nav" class="control-nav"></label>
		<label for="control-nav" class="control-nav-close"></label>

			<nav class="float-r">
			<ul class="list-auto">
				<li>
					<a href="#Candidato" onclick="location.href='candidato_area_nao_logada.php'" title="Candidado">Candidato</a>
				</li>
				<li>
					<a href="#Empresa" onclick="location.href='empresa_area_nao_logada.php'" title="Empresa">Empresa</a>
				</li>
				<li>
					<a href="#Sobre nós" onclick="location.href='sobre_nos.php'" title="Sobre nós">Sobre nós</a>
				</li>
				<li>
					<a href="#Contato" onclick="location.href='contato.php'" title="Contato">Contato</a>
				</li> <!--/li -->
			</ul> <!--/ul -->
		</nav> <!-- /nav-->
	</header> <!-- /HEADER-->
		<div class="jumbotron">
		<br>
		<div class="container">
			<h2>Caro Candidato</h2>
			<p>Abaixo estão os botões para efetuar login ou o vosso cadastro.<p>
		</div> <!--/container -->
	</div> <!--jumbotron -->

	<article class="container jumbotron"> <!--inicio do article -->
		<div class="row"> <!-- incio da linha-->
			<div class="col-sm-6 col-md-4 col-lg-4"> <!-- inicio das colunas nessa primeira linha-->
				<!--aqui vai o conteudo de login-->
				<form class="form-signin" method="post" action="_php/manter-candidato/loga_candidato.php">
					<fieldset><legend>Login e senha</legend>
						<label for="inputEmail" class="sr-only">Email address</label>
						<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus size="20" name="php_email_candidato">
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" id="inputPassword" class="form-control" placeholder="Password" required size="20" name="php_senha">
						<div class="checkbox">
						 <label>
							 <input type="checkbox" value="remember-me"> Remember me
						 </label>
						</div>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
						<button class="btn btn-lg btn-primary btn-block" type="reset">Limpar</button>
					</fieldset>
				</form>
			</div><!--/col -->


			<div class="col-sm-6 col-md-4"> <!-- outra coluna nessa mesma linha-->
				<h3>Não possui cadastro conosco? então o faça agora</h3>
				<p><a class="btn btn-primary btn-lg" href="candidato_cadastrar.php" role="button">Crie um currículo conosco &raquo;</a></p>
			</div><!--/col -->
		</div> <!--/row -->
	</article> <!-- /conteiner -->




	 <hr>
	 <footer class="footer">
	 	<hr>
	 	<div class="container">
	 		<p class="text-muted">&copy; 2017 Trabalhe Conosco todos os direitos reservados</p>
	 	</div>
	 </footer>

	 <!-- Bootstrap core JavaScript
	 ================================================== -->
	 <!-- Placed at the end of the document so the pages load faster -->
	 <script href="js/jquery.js"></script>
	 <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	 <script href="js/bootstrap.js"></script>
	 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	 <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	 </body>
	 </html>

<!--  exemplo de formulario de login
<div class="container">
	<form class="form-signin">
		<h2 class="form-signin-heading">Please sign in</h2>
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus size="20">
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required size="20">
		<div class="checkbox">
		 <label>
			 <input type="checkbox" value="remember-me"> Remember me
		 </label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	</form>
</div>


-->
