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
	<nav class="navbar navbar-fixed-top">
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
	</nav> <!--/navbar -->
	<div class="jumbotron">
		<br>
		<div class="container">
			<!-- <h2>Trabalhe conosco Soluções em RH</h2></br> -->
			<p>Candidato Cansado de ficar enviando currículos a empresas que só te ignoram?<p>
			<p>Empresa Cansado de ficar recebendo apenas os mesmos currículos?<p>
			<p>Pois bem os problemas de ambos acabaram</p>
		</div> <!--/container -->
	</div> <!--jumbotron -->
	<article class="container "> <!--inicio do article -->

		<div class="row"> <!-- incio da linha-->
			<div class="col-sm-6 col-md-4"> <!-- inicio das colunas nessa primeira linha-->
				<!--aqui vai o conteudo de empresa -->
				<div class="well"><h3 class="">Deseja ser um parceiro nosso?</h3></div>
				<!-- <input type="button" onclick="location.href='empresa_solicitar_contato.html'" value="Solicite contato" /> -->
				<p><a class="btn btn-primary btn-lg btn-block" href="empresa_solicitar_contato.html" role="button">Solicite contato</a></p>
			</div><!--/col -->

			<div class="col-sm-6 col-md-4"> <!-- outra coluna nessa mesma linha-->
				<!-- aqui vai conteudo candidato-->
				<div class="well"><h3>Procura uma opotunidade de emprego?</h3></div>
				<!-- <input type="button" onclick="location.href='candidato_cadastrar.php'" value="Se cadastre conosco" /> -->
				<p><a class="btn btn-primary btn-lg  btn-block" href="candidato_cadastrar.php" role="button">Crie um currículo conosco</a></p>
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

<!--
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Extras <span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li role="separator" class="divider"></li>
		<li class="dropdown-header">Logins</li>
		<li><a href="#">Login Empresa</a></li>
		<li><a href="#">Login Candidato</a></li>
		<li><a href="#">Login ADM</a></li>
		<li role="separator" class="divider"></li>
		<li class="dropdown-header">Contatos</li>
		<li><a href="#">Entre em contato conosco</a></li>
	</ul>
</li>



 -->
