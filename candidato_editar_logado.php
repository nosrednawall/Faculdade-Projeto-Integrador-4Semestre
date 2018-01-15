<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/

include_once("_php/conexao.php");
/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via get e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
//$id = $_GET['ID
session_start();
$id = $_SESSION["id_candidato"];

/*///////////////////////////////////////////////////////////
////////////Faz o select dOS CANDIDATOS  selecionada///////////
/////////////////////////////////////////////////////////*/
//$result = mysqli_query($mysqli, "SELECT * FROM `CANDIDATO` WHERE `ID_CANDIDATO` = $id ");

$result = mysqli_query($mysqli, "SELECT * FROM `CANDIDATO` WHERE ID_CANDIDATO = $id");
/*///////////////////////////////////////////////////////////
////////////Insere os dados recebidos em variaveis//////////
/////////////////////////////////////////////////////////*/
while($res = mysqli_fetch_array($result))
{
	$nomecandidato = $res['NOME'];
	$nomesocial = $res['NOME_SOCIAL'];
	$cpfcandidato = $res['CPF'];
	$rgcandidato = $res['RG'];
	$datanascimento = date("Y-m-d", strtotime($res['DATA_NASCIMENTO'])); //transforma a string em formato data para gravar no BD
	$sexo = $res['SEXO'];
	$estadocivil = $res['ESTADO_CIVIL'];
	$qtdafilhos = $res['QTD_FILHOS'];
	$cnh = $res['CNH'];
	$cepcandidato = $res['CEP'];
	$enderecocandidato = $res['ENDERECO'];
	$numeroendereco = $res['NUMERO_CASA'];
	$complemento = $res['COMPLEMENTO'];
	$bairro = $res['BAIRRO'];
	$cidade = $res['CIDADE'];
	$estado = $res['ESTADO'];
	$pais = $res['PAIS'];
	$celular = $res['TEL_CELULAR'];
	$tel_residencial = $res['TEL_RESIDENCIAL'];
	$tel_recado = $res['TEL_RECADO'];
	$emailcandidato = $res['EMAIL'];
	$escolaridade =  $res['ESCOLARIDADE'];
	$linguas = $res['LINGUAS'];
	$areapretendida = $res['AREA_PRETENDIDA'];
	$senha = $res['SENHA_CANDIDATO'];
	

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
	<nav class="navbar navbar-fixed-top">
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
	</nav> <!--/navbar -->
	<div class="jumbotron">
		<br>
		<div class="container">
			<!-- <h2>Trabalhe conosco Soluções em RH</h2></br> -->
			<h3>Alterando os dados cadastrais<h3>
		</div> <!--/container -->
	</div> <!--jumbotron -->

		<article class="container-fluid " role="group">
			<div class="row"> <!--div responsável pelos dados pessoais e endereço -->
				<div class="col-sm-4 col-sm-offset-4"> <!-- div responsável por deixar o texto no meio -->
					<form method="post" name="php_forulario-candidato" action="_php/manter-candidato/editar-candidato.php">
					<!-- dados pessoais -->
						<div class="form-group">
							<div class="well"><fieldset><legend>Dados pessoais</legend></div>
							
								<!-- inserir dados da pessoa de contato nosso -->
									<label for="css_nome-candidato">Nome</label>
									<br>
									<input type="text" name="php_nomecandidato" id="css_nome-candidato" size="20" class="form-control" maxlength="100"	 value="<?php echo"$nomecandidato"; ?>" required/>
									<br>
									<label for="css_nomesocial">Nome social</label>
									<br>
									<input type="text" name="php_nomesocial" id="css_nomesocial" class="form-control" size="20" maxlength="100"	value="<?php echo"$nomesocial"; ?>" required/>
									<br>
									<label for="css_cpf-candidato">CPF</label>
									<br>
									<input type="text"  name="php_cpfcandidato" class="form-control" id="css_cpf-candidato" size="11" maxlength="11"	 value="<?php echo"$cpfcandidato"; ?>" required/>
									<br
									<label for="css_rg-candidato">RG</label>
									<br>
									<input type="text" name="php_rgcandidato" id="css_rg-candidato" class="form-control" size="9" maxlength="9"	 value="<?php echo"$rgcandidato"; ?>" required/>
									<br>
									<label for="css_datanascimento">Data de Nascimento</label>
									<br>
									<input id="css_datanascimento" name="php_datanascimento"  class="form-control" type="date"  value="<?php echo"$datanascimento"; ?>"/>
									<br>
									<label for="css_sexo">Sexo</label>
									<br>
									<input id="css_sexo" list="lista-sexo" class="form-control" name="php_sexo" placeholder="Escolha uma das opções" value="<?php echo"$sexo"; ?>"/>
									<datalist id="lista-sexo">
										<option value="M">Masculino</option>
										<option value="F">Feminino</option>
									</datalist>
									</br>
									<label for="css_estado-civil">Estado civil</label>
									<br>
									<input id="css_estado-civil" list="lista-estados-civis" class="form-control" name="php_estadocivil" placeholder="Ex: casado(a)" value="<?php echo"$estadocivil"; ?>"/>
									<datalist id="lista-estados-civis">
											<option value="CASADO(A)">Casado(a)</option>
											<option value="SOLTEIRO(A)">Solteiro(a)</option>
											<option value="SEPARADO(A)">Separado(a)</option>
											<option value="VIUVO(A)">Viúvo(a)</option>
									</datalist>
									</br>
									<label for="css_qtda-filhos">Quantidade de filhos</label>
									<br>
									<input id="css_qtda-filhos" name="php_qtdafilhos" class="form-control" placeholder="Ex: 0" type="number" min="0" max="99" value="<?php echo"$qtdafilhos"; ?>"/>
									</br>
									<label for="css-tipo-cnh">Tipo de CNH</label>
									<br>
									<input id="css-tipo-cnh" list="lista-tipo-cnh" name="php_cnh" class="form-control" placeholder="Ex: Carteira A Moto" value="<?php echo"$cnh"; ?>"/>
									<datalist id="lista-tipo-cnh">
											<option value="A">Carteira do tipo A(Condutor de veículo motorizado de duas ou três rodas, com ou sem carro lateral.)</option>
											<option value="B">Carteira do tipo B(Carros e veiculos leves que não excedam 3500kg)</option>
											<option value="C">Carteira do tipo C(Condutor de veículos, utilizados em transporte de carga, cujo peso bruto total exceda a três mil e quinhentos quilogramas. ex caminhão )</option>
											<option value="D">Carteira do tipo D(Condutor de veículos, utilizados no transporte de passageiros, cuja lotação exceda a 08 passageiros, excluindo o motorista.)</option>
											<option value="E">Carteira do tipo E(Reboque, semi reboque, trailer ou articulada tenha 6.000 kg (seis mil quilogramas) ou mais de peso bruto total, ou cuja lotação exceda a 8 (oito) lugares. )</option>
									</datalist>
							</fieldset>		<!-- fim do fieldset dados pessoais-->
						</div>
						<div class="form-group">

							<div class="well"><fieldset><legend>Endereço</legend></div> <!-- fieldset para inserir os dados de endereco -->
								<label for="css_cep-candidato">CEP</label>
								<br>
								<input id="css_cep-candidato" name="php_cepcandidato" class="form-control" required  maxlength="9" type="text" value="<?php echo"$cepcandidato"; ?>"/>
								</br>
								<label for="css_endereco-candidato">Endereço</label>
								<br>
								<input id="css_endereco-candidato" name="php_enderecocandidato" class="form-control" required maxlength="100" type="text" value="<?php echo"$enderecocandidato"; ?>"/>
								</br>
								<label for="css_numero-endereco-candidato">Numero</label>
								<br>
								<input id="css_numero-endereco-candidato" name="php_numeroendereco" class="form-control" required maxlength="20" value="<?php echo"$numeroendereco"; ?>"/>
								</br>
								<label for="css_complemento">Complemento</label>
								<br>
								<input id="css_complemento" name="php_complemento" class="form-control" maxlength="100" type="text" value="<?php echo"$complemento"; ?>"/>
								</br>
								<label for="css_bairro-candidato">Bairro</label>
								<br>
								<input id="css_bairro-candidato" name="php_bairro" class="form-control" maxlength="100" type="text" value="<?php echo"$bairro"; ?>"/>
								</br>
								<label for="css_cidade-candidato">Cidade</label>
								<br>
								<input id="css_cidade-candidato" name="php_cidade" type="text" class="form-control"  maxlength="100" value="<?php echo"$cidade"; ?>"/>
								</br>
								<label for="css_estado-candidato">Estado</label>
								<br>
								<input id="css_estado-candidato" name="php_estado" class="form-control" list="listaestados-candidato" placeholder="Informe o estado onde você vive atualmente" value="<?php echo"$estado"; ?>"/>
								<datalist id="listaestados-candidato">
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
								<label for="css_pais-candidato">País</label>
								<br>
								<input id="css_pais-candidato" name="php_pais" list="listapais-candidato" class="form-control" placeholder="Por enquanto atuamos apenas no Brasil" value="<?php echo"$pais"; ?>"/>
								<datalist id="listapais-candidato">
									<select>
										<option value="BRA">Brasil</option>
									</select>
								</datalist>
							</fieldset>	<!-- fim do fieldset endereco -->
						</div>
					
							
						<div class="form-group">
							<div class="well"><fieldset><legend>Contato</legend></div>
								<!-- <p>Insira ao menos um número celular para contato</p> </br> -->
								<label id="css_celular-contato">Celular</label>
								<br>
								<input id="css_celular-contato" name="php_celular" class="form-control" class="form-control" type="text" maxlength="10" placeholder="Campo obrigatório" value="<?php echo"$celular"; ?>" required/>
								</br>
								<label id="css_tel-residencial">Telefone Residencial</label>
								<br>
								<input id="css_tel-residencial" name="php_tel_residencial" class="form-control" type="text" maxlength="10" placeholder="Campo não obrigatório" value="<?php echo"$tel_residencial"; ?>"/>
								</br>
								<label id="css_tel-recado">Telefone para recado</label>
								<br>
								<input id="css_tel-recado" name="php_tel_recado" class="form-control" type="text" maxlength="10" placeholder="Campo não obrigatório" value="<?php echo"$tel_recado"; ?>"/>
								</br>
							</fieldset>
						</div>
						<div class="form-group">
							<div class="well"><fieldset><legend>Curriculo</legend></div>
								<label id="css_escolaridade">Escolariedade</label>
								<br>
								<input id="css_escolaridade" name="php_escolaridade" class="form-control" list="lista-escolariedade" value="<?php echo"$escolaridade"; ?>"/>
									<datalist id="lista-escolariedade">
										<select>
												<option value="ENSINO FUNDAMENTAL INCOMPLETO"> Ensino fundamental incompleto</option>
												<option value="ENSINO FUNDAMENTAL COMPLETO"> Ensino fundamental completo </option>
												<option value="ENSINO MÉDIO INCOMPLETO"> Ensino médio incompleto </option>
												<option value="ENSINO MÉDIO COMPLETO"> Ensino médio completo </option>
												<option value="ENSINO SUPERIOR INCOMPLETO"> Ensino superior incompleto </option>
												<option value="ENSINO SUPERIOR COMPLETO"> Ensino superior completo </option>
			              </select>
			            </datalist>
								</br>
								<label id="css_linguas">Linguas faladas</label>
								<br>
								<input type="text" name="php_linguas" id="css_linguas" class="form-control" value="<?php echo"$linguas"; ?>" />
								</br>
								<label id="css_areapretendida">Áreas pretendidas</label>
								<br>
								<input type="text" name="php_areapretendida" class="form-control" id="css_areapretendida" value="<?php echo"$areapretendida"; ?>" />
								</br>
							</fieldset>
						</div><!--/col -->
						<div class="form-group">
							<div class="well"><fieldset><legend>Login e senha</legend></div>
							
				        <label id="css_email-candidato">E-mail</label>
								<br>
								<input id="css_email-candidato" name="php_emailcandidato" class="form-control" type="email" maxlength="100" required value="<?php echo"$emailcandidato"; ?>"/>
								<br>
								<label id="css_senha_candidato">Senha</label>
								<br>
								<input id="css_senha_candidato" name="php_senha" class="form-control" type="text" maxlength="100" required  value="<?php echo"$senha"; ?>" />
								</br>
							</fieldset>
						</div><!--/col -->
						<br><br>
					<hr>
					<div class="form-group">
              <input type="button" value="Voltar" onClick="history.go(-1)" class="btn-danger">
              <input type="button" value="Atualizar" onClick="history.go(0)" class="btn-info">
              <input type="hidden" name="php_status" value="ATIVO" /> <!-- necessário para a empresa ser cadastrada como ativa no bd-->

              <input type="submit" value="Salvar" class="btn-success"/>
              <input type="hidden" name="php_id" value="<?php echo"$id"; ?>" />
            </div> <!--/form-group -->
					</form> <!-- fim do form-->
		</div> <!-- /div col 8 -->
		</div>
	</article><!-- /article -->

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
