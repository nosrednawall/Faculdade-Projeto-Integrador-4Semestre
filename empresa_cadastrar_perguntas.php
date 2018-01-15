<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
session_start();
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
		header("Location: empresa_area_nao_logada.php");
}
include_once("_php/conexao.php");

/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via post e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
$id = $_SESSION["id_empresa"];


$result = mysqli_query($mysqli, "SELECT *FROM `PROFISSAO` ORDER BY AREA");

//$result = mysqli_query($mysqli, "SELECT ID_PERGUNTA,PERGUNTA,NOME_PROFISSAO,AREA_PROFISSAO,STATUS FROM PERGUNTAS_EMPRESA,PROFISSAO WHERE PERGUNTAS_EMPRESA.ID_EMPRESA = '$id_empresa' AND PERGUNTAS_EMPRESA.ID_PROFISSAO = PROFISSAO.ID_PROFISSAO AND PERGUNTAS_EMPRESA.STATUS LIKE 'ATIVA'");

?>

<!--*///////////////////////////////////////////////////////////
////////////Começa o html//////////////////////////////////////
//////////////////////////////////////////////////////////-->
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
			<h2>Cadastrando perguntas com 5 alternativas</h2>
		</div> <!--/container -->
	</div> <!--jumbotron -->
	<article class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
	   			<form method="post" action="_php/manter-empresa/adiciona_pergunta.php">
						<div class="form-group">
							<fieldset><legend>Área e Profissao</legend>
								<label for="css_profissao" class="form-group">Profissão</label>
								<select id="css_pergunta" name="php_profissao" class="form-control">
									<option>Selecione</option>
									<?php  while($res = mysqli_fetch_array($result)){
										echo "<optgroup label=\"Área de atuação: $res[AREA]\">";
										echo "<option value=\"$res[ID_PROFISSAO] \">Profissão: $res[NOME] </option>";
										echo "</optgroup>";
									} ?>
								</select>
						</div> <!--/form-group -->
						<div class="form-group">
							</fieldset>
							<fieldset><legend>Pergunta</legend>
								<textarea id="css_pergunta" name="php_pergunta" type="text" maxlength="100" placeholder="Insira uma pergunta de até 500 caracteres" class="form-control"/></textarea>
								</br>
							</fieldset>
						</div> <!--/form-group -->
						<div class="form-group">
							<fieldset><legend>Alternativas</legend>
								<label for="css_a">a)</label>
								<textarea id="css_a" name="php_alt_a" type="text" max="100" maxlength="100" class="form-control"/></textarea>
								<label for="css_b">b)</label>
								<textarea id="css_b" name="php_alt_b" type="text" max="100" maxlength="100" class="form-control"/></textarea>
								<label for="css_c">c)</label>
								<textarea id="css_c" name="php_alt_c" type="text" max="100" maxlength="100" class="form-control"/></textarea>
								<label for="css_d">d)</label>
								<textarea id="css_d" name="php_alt_d" type="text" max="100" maxlength="100" class="form-control"/></textarea>
								<label for="css_e">e)</label>
								<textarea id="css_e" name="php_alt_e" type="text" max="100" maxlength="100" class="form-control"/></textarea>
							</fieldset>
						</div> <!--/form-group -->
						<div class="form-group">
							<fieldset><legend>Resposta</legend>
								<label class="radio-inline">
									<input type="radio" name="php_resposta" value="a"/>a
								</label>
								<label class="radio-inline">
									<input type="radio" name="php_resposta" value="b"/>b
								</label>
								<label class="radio-inline">
									<input type="radio" name="php_resposta" value="c" />c
								</label>
								<label class="radio-inline">
									<input type="radio" name="php_resposta" value="d" />d
								</label>
								<label class="radio-inline">
									<input type="radio" name="php_resposta" value="e" />e
								</label>
							</fieldset>
						</div>

						<div class="form-group">
							<input type="button" value="Voltar" onClick="history.go(-1)" class="btn-danger">
							<input type="button" value="Atualizar" onClick="history.go(0)" class="btn-info">
							<input type="hidden" name="php_status" value="ATIVO" /> <!-- necessário para a empresa ser cadastrada como ativa no bd-->
							<input type="reset"  value="Limpar" class="btn-warning"/>
							<input type="submit" value="Salvar" class="btn-success"/>
							<input type="hidden" name="ID_EMPRESA" value="<?php echo"$id"; ?>" />
						</div> <!--/form-group -->
				</form> <!-- fim da form-->
			</div> <!--/col -->
	</div> <!--/row -->
</article> <!-- fim do article-->
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
