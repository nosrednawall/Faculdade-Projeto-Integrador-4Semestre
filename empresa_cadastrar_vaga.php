<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
session_start();
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    header("Location: empresa_area_nao_logada.php");
}

include_once("_php/conexao.php");
$id_empresa = $_SESSION["id_empresa"];


$query = "SELECT PERGUNTAS_EMPRESA.ID_PERGUNTA , PERGUNTAS_EMPRESA.PERGUNTA , PROFISSAO.NOME , PROFISSAO.AREA , STATUS
  FROM PERGUNTAS_EMPRESA,PROFISSAO WHERE PERGUNTAS_EMPRESA.ID_EMPRESA = '$id_empresa' AND PERGUNTAS_EMPRESA.ID_PROFISSAO = PROFISSAO.ID_PROFISSAO
  AND PERGUNTAS_EMPRESA.STATUS LIKE 'ATIVA' ORDER BY PROFISSAO.AREA";
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
			<p>Cadastrando vaga<p>
		</div> <!--/container -->
	</div> <!--jumbotron -->

	<article class="container">
		<form  action="_php/manter-vaga/adicionar_vaga.php" method="post">
			<div class="row">
				<div class="col-sm-6">
          <div class="form-group">
  					<fieldset>
              <div class="form-group">
                <div class="well"><label for="css_resumo">Faça uma breve descrição para identificar essa vaga</label></div>
                <input type="text" id="css_resumo" name="php_resumo" placeholder="Ex.: Vaga para estágio area TI" maxlength="40" max="40" class="form-control"/>
              </div>
              <div class="form-group">
                <div class="well"><label for="css_descricao-vaga" >Descrição da vaga</label></div>
  						  <textarea id="css_descricao-vaga" name="php_descricao-vaga" placeholder="limite de 500 caracteres" cols="60" rows="9" maxlength="500" class="form-control"></textarea>
              </div>
              <div class="form-group">
  						    <div class="well"><label for="css_quantidade-vaga">Quantidade de vagas</label></div>
  						    <input type="number" id="css_quantidade-vaga" name="php_quantidade-vaga" placeholder="Máximo 10 vagas" min="1" max="10"  class="form-control" /> <!-- verificar opcao enter aceita e pula linha -->
              </div>
              <div class="form-group">
    						<div class="well"><label for="css_numero-pergunta">Verifique suas perguntas personalizadas</label></div>

                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">1</span>
      						<select id="css_pergunta1" name="php_pergunta1" class="form-control" >
      							<option>Selecione</option>
                    <?php
                    $perguntas = mysqli_query($mysqli,$query);
                    while($res = mysqli_fetch_array($perguntas)){
                        echo "<optgroup label=\"Área $res[AREA] | Profissão $res[NOME]\"><option value=\"$res[ID_PERGUNTA] \"> Pergunta: $res[PERGUNTA] </option></optgroup>";
                      }
                     ?>
      						</select>
                </div>

                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">2</span>
                  <select id="css_pergunta2" name="php_pergunta2"  class="form-control">
                    <option>Selecione</option>
                    <?php
                    $perguntas = mysqli_query($mysqli,$query);
                    while($res = mysqli_fetch_array($perguntas)){
                        echo "<optgroup label=\"Área $res[AREA] | Profissão $res[NOME]\"><option value=\"$res[ID_PERGUNTA] \"> Pergunta: $res[PERGUNTA] </option></optgroup>";
                      }
                     ?>
                  </select>
                </div>

                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">3</span>
                  <select id="css_pergunta3" name="php_pergunta3" class="form-control">
                    <option>Selecione</option>
                    <?php
                      $perguntas = mysqli_query($mysqli,$query);
                        while($res = mysqli_fetch_array($perguntas)){
                          echo "<optgroup label=\"Área $res[AREA] | Profissão $res[NOME]\"><option value=\"$res[ID_PERGUNTA] \"> Pergunta: $res[PERGUNTA] </option></optgroup>";
                        }
                    ?>
                  </select>
                </div>

                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">4</span>
                  <select id="css_pergunta4" name="php_pergunta4" class="form-control">
                    <option>Selecione</option>
                    <?php
                    $perguntas = mysqli_query($mysqli,$query);
                    while($res = mysqli_fetch_array($perguntas)){
                        echo "<optgroup label=\"Área $res[AREA] | Profissão $res[NOME]\"><option value=\"$res[ID_PERGUNTA] \"> Pergunta: $res[PERGUNTA] </option></optgroup>";
                      }
                     ?>
                  </select>
                </div>

                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">5</span>
                  <select id="css_pergunta5" name="php_pergunta5" class="form-control">
                    <option>Selecione</option>
                    <?php
                    $perguntas = mysqli_query($mysqli,$query);
                    while($res = mysqli_fetch_array($perguntas)){
                        echo "<optgroup label=\"Área $res[AREA] | Profissão $res[NOME]\"><option value=\"$res[ID_PERGUNTA] \"> Pergunta: $res[PERGUNTA] </option></optgroup>";
                      }
                     ?>
                  </select>
                </div>

  			   </fieldset>
        </div>
        <div class="form-group">
          <input type="button" value="Voltar" onClick="history.go(-1)" class="btn-danger">
          <input type="button" value="Atualizar" onClick="history.go(0)" class="btn-info">
          <input type="hidden" name="php_status" value="ATIVA" /> <!-- necessário para a empresa ser cadastrada como ativa no bd-->
          <input type="submit" value="Salvar" class="btn-success" onclick="alert('A sua vaga foi criada com sucesso!')"/>
        </div> <!--/form-group -->
			</div> <!--/col -->
		</div><!--/row -->
		</form>
	</article>
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
