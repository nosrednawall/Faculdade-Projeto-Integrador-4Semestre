<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
include_once("_php/conexao.php");

/*///////////////////////////////////////////////////////////
////////////faz select dos dados ///////////////////////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli, "SELECT * FROM FUTURO_PARCEIRO");
?>
<!-- inicio do html-->
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
			<h2>Manter futuro parceiro</h2>
			<p>Abaixo estão as empresas desejam entrar em contato conosco, e se inscreveram via formulario do site<p>
		</div> <!--/container -->
	</div> <!--jumbotron -->

    <article class="container"> <!-- inicio do artigo-->
            <table width='80%' border=0 class="table-striped"> <!--inicio da tabela -->
                <tr bgcolor='#CCCCCC'>
										<td>#</td>
                    <td>Nome da empresa</td>
                    <td>E-mail</td>
                    <td>Contato da empresa</td>
                    <td>Ações</td>
                    <td>Adicionar Parceiro</td>
                </tr>
                <?php
								/*//////////////////////////////////////////////////////////////
								////////////inicio do loop para imprimir os futuros parceiros//
								//////////////////////////////////////////////////////////*///
                    while($res = mysqli_fetch_array($result)) {
                        echo "<tr>";
													echo "<td>".$res['ID_EFP']."</td>";
	                        echo "<td>".$res['NOME_EMPRESA']."</td>";
	                        echo "<td>".$res['EMAIL_EMPRESA']."</td>";
	                        echo "<td>".$res['NOME_CONTATO']."</td>";
													//echo "<td><button type=\"button\" class=\"btn btn-xs btn-warning\" href=\"_php/manter-empresa/edita_futuro_parceiro.php?ID=$res[ID_EFP]\">Alterar</button> | <button type=\"button\" class=\"btn btn-xs btn-danger\" href=\"_php/manter-empresa/delete_futuro_parceiro.php?ID=$res[ID_EFP]\">Excluir</button></td>";
	                        echo "<td><a href=\"_php/manter-empresa/edita_futuro_parceiro.php?ID=$res[ID_EFP]\" class=\"btn btn-xs btn-warning\" role=\"button\">Alterar</a> | <a href=\"_php/manter-empresa/delete_futuro_parceiro.php?ID=$res[ID_EFP]\" class=\"btn btn-xs btn-danger\" role=\"button\" onClick=\"return confirm('Você tem certeza que deseja deletar?')\">	Deletar</a></td>";
													echo "<td><p><a href=\"empresa_adicionar.php?ID=$res[ID_EFP]\" class=\"btn btn-xs btn-primary\"\ role=\"button\" \">Adicionar &raquo;</a></p></td>";
													//echo "<td><button  type=\"button\" class=\"btn btn-xs btn-primary\" href=\"empresa_adicionar.php?ID=$res[ID_EFP]\">Adicionar</button></td>";
												echo "</tr>";
                    }
                ?>
            </table>  <!--fim da tabela -->
    </article>  <!--fim do artigo -->
	</div> <!-- fim da div site-->
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
