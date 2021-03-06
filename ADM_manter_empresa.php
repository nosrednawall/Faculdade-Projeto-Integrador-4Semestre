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
		<div class="jumbotron">
			<br>
			<div class="container">
				<p>Gerencie os dados cadastrais das empresas parceiras<p>
			</div> <!--/container -->
		</div> <!--jumbotron -->
		<article class="container "> <!--inicio do article -->
			<div class="row"> <!-- incio da linha-->
				<div class="col-sm-4 col-md-4"> <!-- inicio das colunas nessa primeira linha-->
							<!--aqui vai o conteudo de empresa -->
					<h3 class="">Manter futuro parceiro e ou adicionar como empresa parceira</h3>
							<!-- <input type="button" onclick="location.href='empresa_solicitar_contato.html'" value="Solicite contato" /> -->
					<p><a class="btn btn-primary btn-lg" onclick="location.href='ADM_empresa_manter_futuro_parceiro.php'" role="button">Manter futuro parceiro &raquo;</a></p>
				</div><!--/col -->

				<div class="col-sm-4 col-md-4"> <!-- outra coluna nessa mesma linha-->
							<!-- aqui vai conteudo candidato-->
					<h3>Alterar informações ou inativar empresa parceira</h3>
							<!-- <input type="button" onclick="location.href='candidato_cadastrar.php'" value="Se cadastre conosco" /> -->
					<p><a class="btn btn-primary btn-lg" onclick="location.href='empresa_alterar.php'" role="button">Editar dados empresas &raquo;</a></p>
				</div><!--/col -->
				<div class="col-sm-4 col-md-4"> <!-- outra coluna nessa mesma linha-->
							<!-- aqui vai conteudo candidato-->
					<h3>Gerencie empresas inativadas</h3>
							<!-- <input type="button" onclick="location.href='candidato_cadastrar.php'" value="Se cadastre conosco" /> -->
					<p><a class="btn btn-primary btn-lg" onclick="location.href='empresa_inativa.php'" role="button">Empresas Inativas&raquo;</a></p>
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
