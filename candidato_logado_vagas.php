<?php
session_start();
include_once("_php/conexao.php");
$id_candidato= $_SESSION["id_candidato"];

//SELECT VAGA_CRIADA.ID_VAGAC,VAGA_CRIADA.RESUMO,VAGA_CRIADA.QTDA_OFERTADA,PROFISSAO.AREA FROM CANDIDATO INNER JOIN PROFISSAO ON CANDIDATO.ID_PROFISSAO = PROFISSAO.ID_PROFISSAO INNER JOIN VAGA_CRIADA ON PROFISSAO.ID_PROFISSAO = VAGA_CRIADA.VAGA_CRIADA,CANDIDATO,PROFISSAO WHERE CANDIDATO.ID_CANDIDATO = '11' AND CANDIDATO.ID_PROFISSAO = PROFISSAO.ID_PROFISSAO AND VAGA_CRIADA.STATUS LIKE '%ATIVA%'";

$result = mysqli_query($mysqli, "SELECT VAGA_CRIADA.ID_VAGAC,VAGA_CRIADA.RESUMO,VAGA_CRIADA.QTDA_OFERTADA,PROFISSAO.AREA FROM VAGA_CRIADA,CANDIDATO,PROFISSAO WHERE CANDIDATO.ID_CANDIDATO = '$id_candidato' AND
	 CANDIDATO.ID_PROFISSAO = PROFISSAO.ID_PROFISSAO AND VAGA_CRIADA.STATUS LIKE '%ATIVA%'");
//$result = mysqli_query($mysqli, "SELECT * FROM VAGA WHERE VAGA.STATUS = 'ATIVA'");
?>

<!DOCTYPE html>
<html lang="pt-BR" xmlns:id="http://www.w3.org/1999/xhtml">
<head> <!-- Inicio do cabeçalho -->
	<link rel="stylesheet"  href="_css/bootstrap.min.css" >
	<link rel="stylesheet"  href="_css/header.css" >
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8" />
	<title>Trabalhe Conosco</title> <!-- Título da página -->
	<script>
		function mostra(elemento){
			document.getElementById(elemento).style.visibility="visible";
		}
		//função para esconder os elementos de 2º e 3º plano
		function esconde(elemento){
			document.getElementById(elemento).style.visibility="hidden";
		}
	</script>
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
			<?php echo "<h2>Seja bem-vindo, ".$_SESSION["nome_social"]."</h2>"; ?>
			<h3>Visualize as oportunidades que separamos para você</h3>
		</div> <!--/container -->
	</div> <!--jumbotron -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<article class="container">
					<div class="row">
						<div class="col-md-12">
							<table width='80%' border=0 class="table-striped">
								<tr bgcolor='#CCCCCC'>
									<td>#</td>
									<td>Área de atuação</td>
									<td>Descrição</td>
									<td>Quantidade de Vagas</td>

									<td>Ações</td>
								</tr>
								<?php
									while($res = mysqli_fetch_array($result)) {
										echo "<tr>";
											echo "<td>".$res['ID_VAGAC']."</td>";
											echo "<td>".$res['AREA']."</td>";
											echo "<td>".$res['RESUMO']."</td>";
											echo "<td>".$res['QTDA_OFERTADA']."</td>";
											//echo "<td>".$res['STATUS']."</td>";
											//echo "<td><a href=\"candidato_logado_vagas_quest.php\" class=\"btn btn-xs btn-warning\" role=\"button\">CANDIDATAR-SE</a></td>";
											//echo "<td><a href=\"empresa_editar_perguntas.php?ID_PERGUNTA=$res[ID_PERGUNTA]\" class=\"btn btn-xs btn-warning\" role=\"button\">Editar</a> | <a href=\"_php/manter-empresa/inativar_pergunta.php?ID_PERGUNTA=$res[ID_PERGUNTA]\"class=\"btn btn-xs btn-danger\" role=\"button\" onClick=\"return confirm('Você tem certeza que deseja ativar essa empresa?')\">	Inativar</a></td>";
										echo "</tr>";
									}
								 ?>
							</table>
						</div>
					</div>
				</article>
			</div> <!-- /col -->
		</div> <!-- /row de selecao de empresa -->
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
