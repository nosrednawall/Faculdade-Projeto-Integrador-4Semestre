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
//$id_pergunta = $_SESSION["pergunta_atual"];
$id_pergunta = $_GET["ID_PERGUNTA"];
$id_empresa = $_SESSION["id_empresa"];

/*///////////////////////////////////////////////////////////
////////////Faz o select do ID informado via get////////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli, "SELECT *FROM PERGUNTAS_EMPRESA WHERE ID_EMPRESA ='$id_empresa' AND ID_PERGUNTA = '$id_pergunta'");
$profissoes = mysqli_query($mysqli, "SELECT *FROM `PROFISSAO` ORDER BY AREA");
/*///////////////////////////////////////////////////////////
////////////Insere os dados recebidos em variaveis//////////
/////////////////////////////////////////////////////////*/
while($res = mysqli_fetch_array($result))
{
	$pergunta = $res['PERGUNTA'];
	$alt_a = $res['ALTERNATIVA_A'];
	$alt_b = $res['ALTERNATIVA_B'];
	$alt_c = $res['ALTERNATIVA_C'];
	$alt_d = $res['ALTERNATIVA_D'];
	$alt_e = $res['ALTERNATIVA_E'];
	$resposta	=	$res['RESPOSTA'];
	$id_profissao = $res['ID_PROFISSAO'];
}
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
			<h2>Editando a pergunta selecionada</h2>
		</div> <!--/container -->
	</div> <!--jumbotron -->
	<article class="container">

	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-4">

				<form method="post" action="_php/manter-empresa/edita_pergunta.php">

						<div class="form-group">
							<fieldset><legend>Área e Profissao</legend>
								<select id="css_pergunta" name="php_profissao" value="<?php echo"$id_profissao"; ?>" class="form-control">
									<option>Selecione</option>
									<?php  while($res = mysqli_fetch_array($profissoes)){
										echo "<optgroup label=\"$res[AREA]\">";
										echo "<option value=\"$res[ID_PROFISSAO] \"> $res[NOME] </option>";
										echo "</optgroup>";
									} ?>
								</select>
							</fieldset>
						</div> <!--/form-group -->

						<div class="form-group">
							<fieldset><legend>Pergunta</legend>
								<input id="css_pergunta" name="php_pergunta" type="text" maxlength="100" placeholder="Insira uma pergunta de até 500 caracteres" value="<?php echo"$pergunta"; ?>" class="form-control"/>

							</fieldset>
						</div> <!--/form-group -->

						<div class="form-group">
							<fieldset><legend>Alternativas</legend>
								<label for="css_a">a)</label>
								<input id="css_a" name="php_alt_a" type="text" max="100" maxlength="30" value="<?php echo"$alt_a"; ?>" class="form-control"/>

								<label for="css_b">b)</label>
								<input id="css_b" name="php_alt_b" type="text" max="100" maxlength="30" value="<?php echo"$alt_b"; ?>" class="form-control"/>

								<label for="css_c">c)</label>
								<input id="css_c" name="php_alt_c" type="text" max="100" maxlength="30" value="<?php echo"$alt_c"; ?>" class="form-control"/>

								<label for="css_d">d)</label>
								<input id="css_d" name="php_alt_d" type="text" max="100" maxlength="30" value="<?php echo"$alt_d"; ?>" class="form-control"/>

								<label for="css_e">e)</label>
								<input id="css_e" name="php_alt_e" type="text" max="100" maxlength="30" value="<?php echo"$alt_e"; ?>" class="form-control"/>

							</fieldset>
						</div> <!--/form-group -->



						<div class="form-group">
							<fieldset><legend>Resposta</legend>
								<label class="radio-inline">
									<input type="radio" name="php_resposta" value="a" <?php if($resposta=='A'){echo 'checked';}?>/>a
								</label>
								<label class="radio-inline">
									<input type="radio" name="php_resposta" value="b" <?php if($resposta=='B'){echo 'checked';}?>/>b
								</label>
								<label class="radio-inline">
									<input type="radio" name="php_resposta" value="c" <?php if($resposta=='C'){echo 'checked';}?>/>c
								</label>
								<label class="radio-inline">
									<input type="radio" name="php_resposta" value="d" <?php if($resposta=='D'){echo 'checked';}?>/>d
								</label>
								<label class="radio-inline">
									<input type="radio" name="php_resposta" value="e" <?php if($resposta=='E'){echo 'checked';}?>/>e
								</label>
							</fieldset>
						</div>


						<div class="form-group">
							<input type="button" value="Voltar" onClick="history.go(-1)" class="btn-danger">
							<input type="button" value="Atualizar" onClick="history.go(0)" class="btn-info">
							<input type="hidden" name="php_status" value="ATIVO" /> <!-- necessário para a empresa ser cadastrada como ativa no bd-->

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
