<?php

session_start();


?>

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
				<p>Gerencie os dados cadastrais das empresas parceiras e dos candidatos cadastrados<p>
			</div> <!--/container -->
		</div> <!--jumbotron -->
		<article class="container "> <!--inicio do article -->
			<fieldset class="jumbotron jumbotron-fluid"><legend>ADM Manter Candidato</legend>
						<div class="row-fluid">
							<div class="col-sm-4"> <!-- inicio das colunas nessa primeira linha-->
										<!--aqui vai o conteudo de empresa -->
                                <div class="row">
                                    <div class="well"><h3 class="">Cadastrar um candidato</h3></div>
								</div>
                                    <!-- <input type="button" onclick="location.href='empresa_solicitar_contato.html'" value="Solicite contato" /> -->
                                <div class="row">
                                    <div class="form-group row"><p><a class="btn btn-primary btn-block active" onclick="location.href='candidato_cadastrar.php'"role="button">Cadastrar candidato &raquo;</a></p></div>
                                </div>
                                </div><!--/col -->

							<div class="col-sm-4"> <!-- outra coluna nessa mesma linha-->
										<!-- aqui vai conteudo candidato-->
                                <div class="well"><h3>Alterar informações ou excluir candidato</h3></div>
										<!-- <input type="button" onclick="location.href='candidato_cadastrar.php'" value="Se cadastre conosco" /> -->
								<p><a class="btn btn-primary btn-block active" onclick="location.href='candidato_alterar.php'" role="button">Editar candidatos &raquo;</a></p>
							</div><!--/col -->
							<div class="col-sm-4"> <!-- outra coluna nessa mesma linha-->
										<!-- aqui vai conteudo candidato-->
                                <div class="well"><h3>Gerencie candidatos inativados</h3></div>
										<!-- <input type="button" onclick="location.href='candidato_cadastrar.php'" value="Se cadastre conosco" /> -->
								<p><a class="btn btn-primary btn-block active" onclick="location.href='candidato_inativar.php'" role="button">Candidatos Inativos&raquo;</a></p>
							</div><!--/col -->
						</div> <!--/row -->
		</fieldset>
		
		<fieldset class="jumbotron jumbotron-fluid"><legend>ADM Manter Empresa</legend>

						<div class="row"> <!-- incio da linha-->
							<!-- inicio das colunas nessa primeira linha-->
							<div class="col-sm-2 col-md-4">
										<!--aqui vai o conteudo de empresa -->
                                <div class="well"><h3>Manter futuro parceiro e ou adicionar como empresa parceira</h3></div>
										<!-- <input type="button" onclick="location.href='empresa_solicitar_contato.html'" value="Solicite contato" /> -->
								<p><a class="btn btn-primary btn-block active" onclick="location.href='ADM_empresa_manter_futuro_parceiro.php'" role="button">Manter futuro parceiro &raquo;</a></p>
							</div><!--/col -->

							<div class="col-sm-2 col-md-4"> <!-- outra coluna nessa mesma linha-->
										<!-- aqui vai conteudo candidato-->
                                <div class="well"><h3>Alterar informações ou inativar empresa parceira</h3></div>
										<!-- <input type="button" onclick="location.href='candidato_cadastrar.php'" value="Se cadastre conosco" /> -->
								<p><a class="btn btn-primary btn-block active" onclick="location.href='ADM_empresa_alterar.php'" role="button">Editar dados empresas &raquo;</a></p>
							</div><!--/col -->
							<div class="col-sm-2 col-md-4"> <!-- outra coluna nessa mesma linha-->
										<!-- aqui vai conteudo candidato-->
                                <div class="well"><h3>Gerencie empresas inativadas</h3></div>
										<!-- <input type="button" onclick="location.href='candidato_cadastrar.php'" value="Se cadastre conosco" /> -->
								<p><a class="btn btn-primary btn-block active" onclick="location.href='empresa_inativa.php'" role="button">Empresas Inativas&raquo;</a></p>
							</div><!--/col -->
						</div> <!--/row -->
			</fieldset>
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
