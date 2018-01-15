<?php
session_start();
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
include_once("_php/conexao.php");
/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via get e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
$id = $_SESSION["id_empresa"];
/*///////////////////////////////////////////////////////////
////////////Faz o select das empresas selecionada///////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli, "SELECT * FROM `EMPRESA` WHERE `ID_EMPRESA` = $id ");
/*///////////////////////////////////////////////////////////
////////////Insere os dados recebidos em variaveis//////////
/////////////////////////////////////////////////////////*/
while($res = mysqli_fetch_array($result))
{
 	$id_empresa = $res['ID_EMPRESA'];
	$razao_social = $res['RAZAO_SOCIAL'];
	$email_empresa = $res['EMAIL'];
	$cnpj = $res['CNPJ'];
	$nome_fantasia = $res['NOME_FANTASIA'];
	$telefone = $res['TELEFONE_COMERCIAL'];
	$cep = $res['CEP'];
	$endereco = $res['ENDERECO'];
	$numero_empresa = $res['NUMERO_EMPRESA'];
	$complemento = $res['COMPLEMENTO'];
	$bairro = $res['BAIRRO'];
	$cidade = $res['CIDADE'];
	$estado = $res['ESTADO'];
	$pais = $res['PAIS'];
	$site = $res['SITE'];
	$senha = $res['SENHA_EMPRESA'];
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
			<h2>Editando suas informações</h2>
		</div> <!--/container -->
	</div> <!--jumbotron -->
  <div class="container">

	    <article class="row">
				<form method="post" action="_php/manter-empresa/edita_empresa.php">

						<div class="form-group">
							<div class="well"><fieldset><legend>Dados Juridicos</legend></div>
								<label id="css_cnpj">CNPJ</label>
								</br>
                <input id="css_cnpj" name="php_cnpj" type="text" max="20" maxlength="20" value="<?php echo"$cnpj"; ?>" class="form-control" readonly="readonly"/>
								</br>
								<label id="css_razao_social">Razão Social</label>
								</br>
                <input id="css_razao_social" name="php_razao_social" type="text" value="<?php echo"$razao_social"; ?>"  class="form-control" readonly="readonly"/>
								<br>
								<label id="css_nomefantasia">Nome Fantasia</label>
								</br>
                <input id="css_nomefantasia" name="php_nome_fantasia" type="text" max="100" maxlength="30" value="<?php echo"$nome_fantasia"; ?>" class="form-control"/>
								</br>
								<label id="css_telefone">Telefone</label>
								</br>
                <input id="css_telefone" name="php_telefone" type="text" max="20" maxlength="20" value="<?php echo"$telefone"; ?>" class="form-control"/>
								</br>
								<label id="css_site">Site</label>
								</br>
                <input id="css_site" name="php_site" type="text" max="100" maxlength="30" value="<?php echo"$site"; ?>" class="form-control"/>
								</br>
							</fieldset>
						</div> <!--/col -->
						<div class="form-group">
						<div class="well"><fieldset><legend>Endereço</legend></div>
								<label id="css_cep">CEP</label>
								</br>
                <input id="css_cep" name="php_cep" type="text" max="10" maxlength="10" value="<?php echo"$cep"; ?>" class="form-control"/>
								</br>
								<label id="css_endereco">Endereço</label>
								</br>
                <input id="css_endereco" name="php_endereco" type="text" max="100" maxlength="30" value="<?php echo"$endereco"; ?>" class="form-control"/>
								</br>
								<label id="css_numero_empresa">Numero estabelecimento</label>
								</br>
                <input id="css_numero_empresa" name="php_numero_empresa" type="text" max="20" maxlength="20" value="<?php echo"$numero_empresa"; ?>" class="form-control"/>
								</br>
								<label id="css_complemento">Complemento</label>
								</br>
                <input id="css_complemento" name="php_complemento" type="text" max="100" maxlength="30" value="<?php echo"$complemento"; ?>" class="form-control"/>
								</br>
								<label id="css_bairro">Bairro</label>
								</br>
                <input id="css_bairro" name="php_bairro" type="text" max="100" maxlength="30" value="<?php echo"$bairro"; ?>" class="form-control"/>
								</br>
								<label id="css_cidade">Cidade</label>
								</br>
                <input id="css_cidade" name="php_cidade" type="text" max="100" maxlength="30" value="<?php echo"$cidade"; ?>" class="form-control"/>
								</br>
								<label for="css_estado">Estado</label>
								</br>
                <input id="css_estado" name="php_estado" list="lista_estados" placeholder="Informe o estado de vossa localidade" value="<?php echo"$estado"; ?>" class="form-control"/>
								<datalist id="lista_estados">
									<select>
										<option value="AC"> Acre</option>
										<option value="AL"> Alagoas </option>
										<option value="AP"> Amapá </option>
										<option value="AM"> Amazonas </option>
										<option value="BA"> Bahia </option>
										<option value="CE"> Ceará </option>
										<option value="DF"> Distrito Federal </option>
										<option value="ES"> Espírito Santo </option>
										<option value="GO"> Goiás </option>
										<option value="MA"> Maranhão </option>
										<option value="MT"> Mato Grosso </option>
										<option value="MS"> Mato Grosso do Sul </option>
										<option value="MG"> Minas Gerais </option>
										<option value="PA"> Pará </option>
										<option value="PB"> Paraíba </option>
										<option value="PR"> Paraná </option>
										<option value="PE"> Pernambuco </option>
										<option value="PI"> Piauí </option>
										<option value="RJ"> Rio de Janeiro </option>
										<option value="RN"> Rio Grande do Norte </option>
										<option value="RS"> Rio Grande do Sul </option>
										<option value="RO"> Rondônia </option>
										<option value="RR"> Roraima </option>
										<option value="SC"> Santa Catarina </option>
										<option value="SP"> São Paulo </option>
										<option value="SE"> Sergipe </option>
										<option value="TO"> Tocantins </option>
									</select>
								</datalist>
								</br>
								<label for="css_pais">País</label>
								</br>
                <input id="css_pais" name="php_pais" list="lista_pais" placeholder="Por enquanto atuamos apenas no Brasil" value="<?php echo"$pais"; ?>" class="form-control"/>
								<datalist id="lista_pais">
									<select>
										<option value="BRA">Brasil</option>
									</select>
								</datalist>
							</fieldset>
						</div>
						<div class="form-group">
							<div class="well"><fieldset><legend>Login e senha</legend></div>
								<label id="css_email_empresa">E-mail Empresa</label>
								</br>
                <input id="css_email_empresa" name="php_email_empresa" type="email" value="<?php echo"$email_empresa"; ?>" class="form-control" />
								</br>
								<label id="css_email_empresa">Senha</label>
								</br>
                <input id="css_senha_empresa" name="php_senha_empresa" type="text" value="<?php echo"$senha"; ?>"  class="form-control"/>
							</fieldset>
						</div> <!--/col -->

            <div class="form-group">
              <input type="button" value="Voltar" onClick="history.go(-1)" class="btn-danger">
              <input type="button" value="Atualizar" onClick="history.go(0)" class="btn-info">
              <input type="hidden" name="php_status" value="ATIVO" /> <!-- necessário para a empresa ser cadastrada como ativa no bd-->

              <input type="submit" value="Salvar" class="btn-success"/>
              <input type="hidden" name="php_id" value="<?php echo"$id"; ?>" />
            </div> <!--/form-group -->



					</div>
				</form> <!-- fim da form-->
	    </article> <!-- fim do article-->
	</div> <!--/col -->
	</div> <!--/row -->
</div> <!-- /container-fluid -->
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
