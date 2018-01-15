<!DOCTYPE html>
<html lang="pt-BR" xmlns:id="http://www.w3.org/1999/xhtml">
<head> <!-- Inicio do cabeçalho -->
	<link rel="stylesheet"  href="_css/bootstrap.min.css" >
	<link rel="stylesheet"  href="_css/header.css" >
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8" />
	<title>Trabalhe Conosco</title> <!-- Título da página -->
	<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</head> <!-- Fim do cabeçalho -->
<body> <!-- Começo do Body -->
	<!-- INICIO DO HEADER PERSONALIZADO, PORÉM COM A CLASSE CONTEINER DO BOOTSTRAP-->
	<div class="bootstrap-iso">
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
			<h3>Obrigado por nos escolher e<h3>
			<p>Por favor insira os seus dados nos campos abaixo.<p>
		</div> <!--/container -->
	</div> <!--jumbotron -->

	<article class="container btn-group btn-group-justified input-group " role="group">
		<div class="row"> <!--div responsável pelos dados pessoais e endereço -->
			<div class="col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-4"> <!-- div responsável por deixar o texto no meio -->
				<form method="post" name="php_forulario-candidato" action="_php/manter-candidato/adicionar-candidato.php">
				<div class="row">
					<!-- dados pessoais -->
						<div class="form-group">
							<div class="well"><fieldset id="css_formulario-dados-pessoais"><legend>Dados pessoais</legend></div>
								<!-- inserir dados da pessoa de contato nosso -->
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">Nome</span>
									<input class="form-control"  type="text" name="php_nomecandidato" id="css_nome-candidato" size="20" maxlength="100"	 placeholder="Insira o seu nome completo" required/>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">Nome social</span>
									<input class="form-control" type="text" name="php_nomesocial" id="css_nomesocial" size="20" maxlength="100"	 placeholder="Insira o seu nome social se houver" required/>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">CPF</span>
									<input class="form-control" type="text"  name="php_cpfcandidato" id="css_cpf-candidato" size="11" maxlength="11"	 placeholder="Insira o seu CPF completo" required/>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">RG</span>
									<input class="form-control" type="text" name="php_rgcandidato" id="css_rg-candidato" size="9" maxlength="9"	 placeholder="Insira o seu nome completo" required/>
								</div>
								<div class="form-group">
	                 <div class='input-group date' id='datetimepicker1'>
	                     <input type='text' class="form-control" />
	                     <span class="input-group-addon">
	                         <span class="glyphicon glyphicon-calendar"></span>
	                     </span>
	                 </div>
	             </div>
	         </div>
	         <script type="text/javascript">
	             $(function () {
	                 $('#datetimepicker1').datetimepicker();
	             });
	         </script>       

								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">Data Nascimento</span>
									<input  class="form-control"  id="css_datanascimento" name="php_datanascimento"  type="date" />
								</div>
									<fieldset id="css_sexo"><legend>Sexo</legend>
										<label>♂</label>
										<input type="radio" name="php_sexo" value="M">
										<label>♀</label>
										<input type="radio" name="php_sexo" value="F">
									</fieldset>
									</br>
									<label for="css_estado-civil">Estado civil</label>
									<br>
									<input id="css_estado-civil" list="lista-estados-civis" name="php_estadocivil" placeholder="Ex: casado(a)"/>
									<datalist id="lista-estados-civis">
											<option value="CASADO(A)">Casado(a)</option>
											<option value="SOLTEIRO(A)">Solteiro(a)</option>
											<option value="SEPARADO(A)">Separado(a)</option>
											<option value="VIUVO(A)">Viúvo(a)</option>
									</datalist>
									</br>
									<label for="css_qtda-filhos">Quantidade de filhos</label>
									<br>
									<input id="css_qtda-filhos" name="php_qtdafilhos" placeholder="Ex: 0" type="number" min="0" max="99"/>
									</br>
									<label for="css-tipo-cnh">Tipo de CNH</label>
									<br>
									<input id="css-tipo-cnh" list="lista-tipo-cnh" name="php_cnh" placeholder="Ex: Carteira A Moto"/>
									<datalist id="lista-tipo-cnh">
											<option value="A">Carteira do tipo A(Condutor de veículo motorizado de duas ou três rodas, com ou sem carro lateral.)</option>
											<option value="B">Carteira do tipo B(Carros e veiculos leves que não excedam 3500kg)</option>
											<option value="C">Carteira do tipo C(Condutor de veículos, utilizados em transporte de carga, cujo peso bruto total exceda a três mil e quinhentos quilogramas. ex caminhão )</option>
											<option value="D">Carteira do tipo D(Condutor de veículos, utilizados no transporte de passageiros, cuja lotação exceda a 08 passageiros, excluindo o motorista.)</option>
											<option value="E">Carteira do tipo E(Reboque, semi reboque, trailer ou articulada tenha 6.000 kg (seis mil quilogramas) ou mais de peso bruto total, ou cuja lotação exceda a 8 (oito) lugares. )</option>
									</datalist>
							</fieldset>		<!-- fim do fieldset dados pessoais-->
						</div>
						<div class="col-sm-6 col-md-4 col-lg-2">
							<fieldset id="css_formulario-endereco"><legend>Endereço</legend> <!-- fieldset para inserir os dados de endereco -->
								<label for="css_cep-candidato">CEP</label>
								<br>
								<input id="css_cep-candidato" name="php_cepcandidato" required  maxlength="9" type="text"/>
								</br>
								<label for="css_endereco-candidato">Endereço</label>
								<br>
								<input id="css_endereco-candidato" name="php_enderecocandidato" required maxlength="100" type="text" />
								</br>
								<label for="css_numero-endereco-candidato">Numero</label>
								<br>
								<input id="css_numero-endereco-candidato" name="php_numeroendereco" required maxlength="20" />
								</br>
								<label for="css_complemento">Complemento</label>
								<br>
								<input id="css_complemento" name="php_complemento" maxlength="100" type="text" />
								</br>
								<label for="css_bairro-candidato">Bairro</label>
								<br>
								<input id="css_bairro-candidato" name="php_bairro" maxlength="100" type="text" />
								</br>
								<label for="css_cidade-candidato">Cidade</label>
								<br>
								<input id="css_cidade-candidato" name="php_cidade" type="text" maxlength="100" />
								</br>
								<label for="css_estado-candidato">Estado</label>
								<br>
								<input id="css_estado-candidato" name="php_estado" list="listaestados-candidato" placeholder="Informe o estado onde você vive atualmente" />
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
								<input id="css_pais-candidato" name="php_pais" list="listapais-candidato" placeholder="Por enquanto atuamos apenas no Brasil" />
								<datalist id="listapais-candidato">
									<select>
										<option value="BRA">Brasil</option>
									</select>
								</datalist>
							</fieldset>	<!-- fim do fieldset endereco -->
						</div>
					</div> <!--/div row1 -->
					<br><br>
					<div class="row">
						<div class="col-sm-4 col-lg-2">
							<fieldset id="css_contato"><legend>Contato</legend>
								<!-- <p>Insira ao menos um número celular para contato</p> </br> -->
								<label id="css_celular-contato">Celular</label>
								<br>
								<input id="css_celular-contato" name="php_celular" type="text" maxlength="10" placeholder="Campo obrigatório" required/>
								</br>
								<label id="css_tel-residencial">Telefone Residencial</label>
								<br>
								<input id="css_tel-residencial" name="php_tel_residencial" type="text" maxlength="10" placeholder="Campo não obrigatório" />
								</br>
								<label id="css_tel-recado">Telefone para recado</label>
								<br>
								<input id="css_tel-recado" name="php_tel_recado" type="text" maxlength="10" placeholder="Campo não obrigatório"/>
								</br>
							</fieldset>
						</div>
						<div class="col-sm-4 col-lg-2">
							<fieldset id="css_coisas a mais"><legend>Currículo breve</legend>
								<label id="css_escolaridade">Escolariedade</label>
								<br>
								<input id="css_escolaridade" name="php_escolaridade" list="lista-escolariedade" />
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
								<input type="text" name="php_linguas" id="css_linguas" value="INGLES" />
								</br>

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



								<label id="css_areapretendida">Áreas pretendidas</label>
								<br>
								<input type="text" name="php_areapretendida" id="css_areapretendida" value="PROGRAMADOR" />
								</br>
							</fieldset>
						</div><!--/col -->
						<div class="col-sm-4 col-lg-2">
							<fieldset><legend>Login e senha</legend>
				        <label id="css_email-candidato">E-mail</label>
								<br>
								<input id="css_email-candidato" name="php_emailcandidato" type="email" maxlength="100" required />
								<br>
								<label id="css_senha_candidato">Senha</label>
								<br>
								<input id="css_senha_candidato" name="php_senha" type="password" maxlength="100" required/>
								</br>
							</fieldset>
						</div><!--/col -->
					</div><!--/row -->
					<br><br>
					<hr>
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-2">
							<div class="container">
								<input name="php_status" type="hidden" value="ATIVO" />
								<input type="submit" value="Enviar" name="css_enviar-dados" id="php_enviar-dados" class="input-formulario"/>
								<button type="button" name="css_voltar" id="php_voltar"  onclick="location.href='area_candidato.html'" >Voltar</button>
								<input type="reset" value="Limpar" />
							</div> <!--/container -->
						</div> <!--/col -->
					</div> <!--/row -->
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
</div>
</body>
</html>
