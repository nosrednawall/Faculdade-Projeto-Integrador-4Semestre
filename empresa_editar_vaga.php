<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
session_start();
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    header("Location: empresa_area_nao_logada.php");
}
$id_empresa = $_SESSION["id_empresa"];


include_once("_php/conexao.php");

$id_vagac = $_GET["ID_VAGAC"];
$result = mysqli_query($mysqli, "SELECT * FROM `VAGA_CRIADA` WHERE `ID_VAGAC` = '$id_vagac'");
while($res = mysqli_fetch_array($result))
{
  $descricao = $res['DESCRICAO'];
  $qtda_ofertada =  $res['QTDA_OFERTADA'];
  $resumo =  $res['RESUMO'];
  $id_pergunta1 =  $res['ID_PERGUNTA1'];
  $id_pergunta2 =  $res['ID_PERGUNTA2'];
  $id_pergunta3 =  $res['ID_PERGUNTA3'];
  $id_pergunta4 =  $res['ID_PERGUNTA4'];
  $id_pergunta5 =  $res['ID_PERGUNTA5'];
}


  $query = "SELECT PERGUNTAS_EMPRESA.ID_PERGUNTA , PERGUNTAS_EMPRESA.PERGUNTA , PROFISSAO.NOME , PROFISSAO.AREA , STATUS
    FROM PERGUNTAS_EMPRESA,PROFISSAO WHERE PERGUNTAS_EMPRESA.ID_EMPRESA = '$id_empresa' AND PERGUNTAS_EMPRESA.ID_PROFISSAO = PROFISSAO.ID_PROFISSAO
    AND PERGUNTAS_EMPRESA.STATUS LIKE 'ATIVA' ORDER BY PROFISSAO.AREA";

    $pergunta_atual = "SELECT PERGUNTAS_EMPRESA.PERGUNTA , PROFISSAO.NOME , PROFISSAO.AREA
    FROM PERGUNTAS_EMPRESA,PROFISSAO WHERE PERGUNTAS_EMPRESA.ID_EMPRESA = '$id_empresa'
    PERGUNTAS_EMPRESA.ID_PERGUNTA = '$id_pergunta_atual' AND PERGUNTAS_EMPRESA.ID_PROFISSAO = PROFISSAO.ID_PROFISSAO
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
			<p>Editando a vaga de ID <?php echo $id_vagac; ?><p>
		</div> <!--/container -->
	</div> <!--jumbotron -->

	<article class="container">
		<form  action="_php/manter-vaga/editar_vaga.php" method="post">
			<div class="row">
				<div class="col-sm-6">
          <div class="form-group">
  					<fieldset>
              <div class="form-group">
                <div class="well"><label for="css_resumo">Resumo da vaga</label></div>
                <input class="form-control" type="text" id="css_resumo" name="php_resumo" placeholder="Ex.: Vaga para estágio area TI" maxlength="40" max="40" value="<?php echo"$resumo"; ?>"/>
              </div>
              <div class="form-group">
  						  <div class="well"><label for="css_descricao-vaga" >Descrição da vaga</label></div>
  						  <input class="form-control" id="css_descricao-vaga" name="php_descricao-vaga" placeholder="limite de 500 caracteres" cols="60" rows="9" maxlength="500" value="<?php echo"$descricao"; ?>" />
  						</div>
              <div class="form-group">
  						  <div class="well"><label for="css_quantidade-vaga">Quantidade de vagas</label></div>
  						  <input class="form-control" type="number" id="css_quantidade-vaga" name="php_quantidade-vaga" placeholder="Máximo 10 vagas" min="1" max="10"  value="<?php echo"$qtda_ofertada"; ?>" /> <!-- verificar opcao enter aceita e pula linha -->
  						</div>

              <div class="form-group">
  						  <div class="well"><label for="css_numero-pergunta">Verifique suas perguntas personalizadas</label></div>

                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">1</span>
  						    <select class="form-control" id="css_pergunta1" name="php_pergunta1" >
  							  <?php
                      echo "<option>ID:".$id_pergunta1."</option>";
                  ?>
                  <?php
                    $perguntas = mysqli_query($mysqli,$query);
                    while($res = mysqli_fetch_array($perguntas)){
                      echo "<optgroup label=\"Área $res[AREA] | Profissão $res[NOME]\"><option value=\"$res[ID_PERGUNTA] \"> ID:".$res[ID_PERGUNTA]." | Pergunta: $res[PERGUNTA] </option></optgroup>";
                    }
                  ?>
   						    </select>
                </div>

                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">2</span>
                  <select class="form-control" id="css_pergunta2" name="php_pergunta2">
                    <?php
                        echo "<option>ID:".$id_pergunta2."</option>";
                    ?>
                    <?php
                    $perguntas = mysqli_query($mysqli,$query);
                    while($res = mysqli_fetch_array($perguntas)){
                        echo "<optgroup label=\"Área $res[AREA] | Profissão $res[NOME]\"><option value=\"$res[ID_PERGUNTA] \"> ID:".$res[ID_PERGUNTA]." | Pergunta: $res[PERGUNTA] </option></optgroup>";
                      }
                     ?>
                  </select>
              </div>

              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">3</span>
                <select class="form-control" id="css_pergunta3" name="php_pergunta3">
                  <?php
                    echo "<option>ID:".$id_pergunta3."</option>";
                  ?>
                  <?php
                  $perguntas = mysqli_query($mysqli,$query);
                  while($res = mysqli_fetch_array($perguntas)){
                      echo "<optgroup label=\"Área $res[AREA] | Profissão $res[NOME]\"><option value=\"$res[ID_PERGUNTA] \"> ID:".$res[ID_PERGUNTA]." | Pergunta: $res[PERGUNTA] </option></optgroup>";
                    }
                   ?>
                </select>
              </div>

              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">4</span>
                <select class="form-control" id="css_pergunta4" name="php_pergunta4">
                  <?php
                    echo "<option>ID:".$id_pergunta4."</option>";
                  ?>
                  <?php
                  $perguntas = mysqli_query($mysqli,$query);
                  while($res = mysqli_fetch_array($perguntas)){
                      echo "<optgroup label=\"Área $res[AREA] | Profissão $res[NOME]\"><option value=\"$res[ID_PERGUNTA] \"> ID:".$res[ID_PERGUNTA]." | Pergunta: $res[PERGUNTA] </option></optgroup>";
                    }
                   ?>
                </select>
              </div>

              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">5</span>
                <select class="form-control" id="css_pergunta5" name="php_pergunta5">
                  <?php
                    echo "<option>ID:".$id_pergunta5."</option>";
                  ?>
                  <?php
                  $perguntas = mysqli_query($mysqli,$query);
                  while($res = mysqli_fetch_array($perguntas)){
                      echo "<optgroup label=\"Área $res[AREA] | Profissão $res[NOME]\"><option value=\"$res[ID_PERGUNTA] \"> ID:".$res[ID_PERGUNTA]." | Pergunta: $res[PERGUNTA] </option></optgroup>";
                    }
                   ?>
                </select>
              </div>
  			   </fieldset>
				</div>

        <div class="form-group">
          <input type="hidden" value="<?php echo"$id_vagac";?>"name="php_id_vagac" />
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
