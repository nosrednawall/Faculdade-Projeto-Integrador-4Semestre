<?php
  session_start();
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/

    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
        header("Location: candidato_area_nao_logada.php");
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
      <div class="row">
        <?php echo "<h2>Seja bem-vindo, ".$_SESSION["nome_social"]."</h2>"; ?>
      </div>
    </div> <!--/container -->
	</div> <!--jumbotron -->

	<article class="container">
		<div class="row-fluid">
			<div class="col-sm-4 col-lg-4">
        <div class="well">
				      <h3>Visualizar Oportunidades</h3>
        </div>
        <p><a href="candidato_logado_vagas.php" class="btn btn-primary btn-lg btn-block" role="button" >Ver Vagas</a></p>
			</div> <!--/col -->
			<div class="col-sm-4 col-lg-4">
        <div class="well">
				      <h3>Gerenciar suas informações</h3>
        </div>
          <p><a href="candidato_editar_logado.php" class="btn btn-primary btn-lg btn-block" role="button" >Alterar informações</a></p>
			</div>

			<div class="col-sm-4 col-lg-4">
        <div class="well">
				      <h3>Historico e Pendencias</h3>
        </div>
          <p><a href="empresa_manter_perguntas.php" class="btn btn-primary btn-lg btn-block" role="button" >Consultar</a></p>
			</div>
		</div> <!--/row -->
	</article>
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

<?php /*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////
    include_once("../conexao.php");
    $result = mysqli_query($mysqli, "SELECT * FROM `EMPRESA` WHERE `EMAIL` LIKE '$email_empresa' AND `SENHA_EMPRESA` LIKE '$senha' ");
    session_start();
    while($res = mysqli_fetch_array($result))
    {
      $id_empresa = $res['ID_EMPRESA'];
    }
    if(!isset($_SESSION["EMAIL"]) || !isset($_SESSION["SENHA_EMPRESA"])){
        header"Location: empresa_area_nao_logada.php";
        exit;
    }
?>

*/
 ?>
