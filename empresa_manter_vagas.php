<?php
session_start();
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/

    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
        header("Location: empresa_area_nao_logada.php");
    }
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
					<a href="#Empresa" onclick="location.href='empresa_area_logada.php'" title="Empresa">Empresa</a>
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
			<h3>Gerencie as vagas oferecidas pela sua empresa, e também verifique quais candidatos estão melhor classificados pelo Rank</h3>
		</div> <!--/container -->
	</div> <!--jumbotron -->
	<div class="container">
		<div class="row-fluid">
			<div class="col-sm-4" >
        <div class="jumbotron jumbotron-fluid">
				<div class="well"><h3>Visualizar vagas criadas</h3></div>
				<button onclick="location.href='empresa_visualizar_vagas.php'" class="btn btn-primary btn-lg btn-block">Visualizar vagas</button>
      </div>
			</div>
			<div class="col-sm-4" >
        <div class="jumbotron jumbotron-fluid">
				<div class="well"><h3>Cadastrar Vagas</h3></div>
				<button onclick="location.href='empresa_cadastrar_vaga.php'" class="btn btn-primary btn-lg btn-block">Cadastrar Vagas</button>
      </div>
			</div>
			<div class="col-sm-4" >
        <div class="jumbotron jumbotron-fluid">
				<div class="well"><h3>Visualizar vagas inativas</h3></div>
				<button onclick="location.href='empresa_visualizar_vagas_inativas.php'" class="btn btn-primary btn-lg btn-block">Visualizar vagas inativas</button>
      </div>
      </div>
		</div> <!--/row -->
<!--
    <div class="row-fluid">
      <div class="col-sm-6" >
        <div class="jumbotron jumbotron-fluid">
        <div class="well"><h3>Visualizar vagas preenchidas</h3></div>
        <button onclick="location.href='empresa_visualizar_vagas_preenchidas.php'" class="btn btn-primary btn-lg btn-block">Visualizar vagas preenchidas</button>
      </div>
      </div>
      <div class="col-sm-6" >
        <div class="jumbotron jumbotron-fluid">
        <div class="well"><h3>Visualizar Rank de candidatos</h3></div>
        <button onclick="location.href='rank.php'" class="btn btn-primary btn-lg btn-block">Rank</button>
      </div>
      </div>

    </div>
  -->
	</div> <!--/container -->

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
