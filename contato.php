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
		</div> <!--/container -->
	</div> <!--jumbotron -->

	<article class="container">
		<div class="container-fluid bg-grey">
   <h2 class="text-center">Contato</h2>
   <div class="row">
     <div class="col-sm-5">
       <p>Entre em contato conosco, e receba o seu retorno em até 24 horas.</p>
       <p><span class="glyphicon glyphicon-map-marker"></span> São José dos Pinhais, PR</p>
       <p><span class="glyphicon glyphicon-phone"></span> +55 41 9999 9999</p>
       <p><span class="glyphicon glyphicon-envelope"></span> contato@trabalheconosco.com</p>
     </div>
     <div class="col-sm-7">
       <div class="row">
				 <form method="post" action="_php/contato.php">
	         <div class="col-sm-6 form-group">
	           <input class="form-control" id="name" name="nome" placeholder="Nome" type="text" required>
	         </div>
	         <div class="col-sm-6 form-group">
	           <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
	         </div>
	       </div>
	       <textarea class="form-control" id="comments" name="descricao" placeholder="Comentário" rows="5"></textarea><br>
	       <div class="row">
	         <div class="col-sm-12 form-group">
	           <button class="btn btn-default pull-right" type="submit">Enviar</button>
	         </div>
				 </form>
       </div>
     </div>
   </div>
 </div>
	</article>

	<footer class="footer">
		<hr>
		<div class="container">
			<p class="text-muted">&copy; 2018 Trabalhe Conosco todos os direitos reservados</p>
			<p class="text-muted">&copy; 2040 Trabalhe Conosco todos os direitos reservados</p>
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
