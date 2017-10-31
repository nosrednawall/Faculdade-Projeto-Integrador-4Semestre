<!-- esse trecho de código foi copiado, então ainda não possuo total conhecimento sobre ele
	Basicamente ele serve para verificar a conexao com o bd -->

<?php
//including the database connection file
include_once("_php/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<!-- fim do recho copiado -->

<!DOCTYPE html>
<html lang="pt-BR">

<head> <!-- Inicio do cabeçalho -->

	<link rel="stylesheet"  href="_css/header.css" >
	<link rel="stylesheet"  href="_css/estilo.css" > <!-- Estilo CSS do do site -->
	<link rel="stylesheet"	<href="_css/formulario.css">

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8" />

	<title>Trabalhe Conosco</title> <!-- Título da página -->

</head> <!-- Fim do cabeçalho -->

<body> <!-- Começo do Body -->
<div id="site" class="">
    <header>
      <h1 class="float-l">
        <a href="#" title="Trabalhe Conosco" > Trabalhe Conosco </a>
      </h1>

      <input type="checkbox" id="control-nav" />
      <label for="control-nav" class="control-nav"></label>
      <label for="control-nav" class="control-nav-close"></label>

        <nav class="float-r">
        <ul class="list-auto">
          <li>
            <a href="#Candidato" onclick="location.href='area_candidato.html'" title="Candidado">Candidato</a>
          </li>
          <li>
            <a href="#Empresa" onclick="location.href='area_empresa.html'" title="Empresa">Empresa</a>
          </li>
          <li>
            <a href="#Sobre nós" onclick="location.href='sobre_nos.html'" title="Sobre nós">Sobre nós</a>
          </li>
          <li>
            <a href="#Contato" onclick="location.href='contato.html'" title="Contato">Contato</a>
          </li>
        </ul>
      </nav>
    </header>


		<form method="post" name="php_forulario-candidato" action="_php/manter-candidato/adicionar-candidato.php">
		</br>


		<!-- dados pessoais -->
			<fieldset id="css_formulario-dados-pessoais"><legend>Dados pessoais</legend>
					<br></br>
				<!-- inserir dados da pessoa de contato nosso -->
					<label for="css_nome-candidato">Nome</label>
					<input type="text" name="php_nomecandidato" id="css_nome-candidato" size="20" maxlength="100"	 placeholder="Insira o seu nome completo" required/>
					<br></br>

					<label for="css_nomesocial">Nome</label>
					<input type="text" name="php_nomesocial" id="css_nomesocial" size="20" maxlength="100"	 placeholder="Insira o seu nome social se houver" required/>
					<br></br>

					<label for="css_cpf-candidato">CPF</label>
					<input type="text"  name="php_cpfcandidato" id="css_cpf-candidato" size="11" maxlength="11"	 placeholder="Insira o seu CPF completo" required/>
					<br></br>

					<label for="css_rg-candidato">RG</label>
					<input type="text" name="php_rgcandidato" id="css_rg-candidato" size="9" maxlength="9"	 placeholder="Insira o seu nome completo" required/>
					<br></br>

					<label for="css_datanascimento">Data de Nascimento</label>
					<input id="css_datanascimento" name="php_datanascimento"  type="date" />
					<br></br>

					<fieldset id="css_sexo"><legend>Sexo</legend>
						<label>♂</label>
						<input type="radio" name="php_sexo" value="M">
						<label>♀</label>
						<input type="radio" name="php_sexo" value="F">

					</fieldset>

				</br>
					<label for="css_estado-civil">Estado civil</label>
					<input id="css_estado-civil" list="lista-estados-civis" name="php_estadocivil" placeholder="Ex: casado(a)"/>
					<datalist id="lista-estados-civis">
							<option value="CASADO(A)">Casado(a)</option>
							<option value="SOLTEIRO(A)">Solteiro(a)</option>
							<option value="SEPARADO(A)">Separado(a)</option>
							<<option value="VIUVO(A)">Viúvo(a)</option>
					</datalist>
				</br> </br>

					<label for="css_qtda-filhos">Quantidade de filhos</label>
					<input id="css_qtda-filhos" name="php_qtdafilhos" placeholder="Ex: 0" type="number" min="0" max="99"/>

					</br> </br>
					<label for="css-tipo-cnh">Tipo de CNH</label>
					<input id="css-tipo-cnh" list="lista-tipo-cnh" name="php_cnh" placeholder="Ex: Carteira A Moto"/>
					<datalist id="lista-tipo-cnh">
							<option value="A">Carteira do tipo A(Condutor de veículo motorizado de duas ou três rodas, com ou sem carro lateral.)</option>
							<option value="B">Carteira do tipo B(Carros e veiculos leves que não excedam 3500kg)</option>
							<option value="C">Carteira do tipo C(Condutor de veículos, utilizados em transporte de carga, cujo peso bruto total exceda a três mil e quinhentos quilogramas. ex caminhão )</option>
							<option value="D">Carteira do tipo D(Condutor de veículos, utilizados no transporte de passageiros, cuja lotação exceda a 08 passageiros, excluindo o motorista.)</option>
							<option value="E">Carteira do tipo E(Reboque, semi reboque, trailer ou articulada tenha 6.000 kg (seis mil quilogramas) ou mais de peso bruto total, ou cuja lotação exceda a 8 (oito) lugares. )</option>
					</datalist>

			</fieldset>		<!-- fim do fieldset dados pessoais-->


			<fieldset id="css_formulario-endereco"><legend>Endereço</legend> <!-- fieldset para inserir os dados de endereco -->

				<label for="css_cep-candidato">CEP</label>
				<input id="css_cep-candidato" name="php_cepcandidato" required  maxlength="9" type="text"/>
			</br></br>
				<label for="css_endereco-candidato">Endereço</label>
				<input id="css_endereco-candidato" name="php_enderecocandidato" required maxlength="100" type="text" />
			</br></br>
				<label for="css_numero-endereco-candidato">Numero</label>
				<input id="css_numero-endereco-candidato" name="php_numeroendereco" required maxlength="20" />
			</br></br>
				<label for="css_complemento">Complemento</label>
				<input id="css_complemento" name="php_complemento" maxlength="100" type="text" />
			</br></br>
				<label for="css_bairro-candidato">Bairro</label>
				<input id="css_bairro-candidato" name="php_bairro" maxlength="100" type="text" />
			</br></br>
				<label for="css_cidade-candidato">Cidade</label>
				<input id="css_cidade-candidato" name="php_cidade" type="text" maxlength="100" />
			</br></br>
				<label for="css_estado-candidato">Estado</label>
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
</br></br>
				<label for="css_pais-candidato">País</label>
				<input id="css_pais-candidato" name="php_pais" list="listapais-candidato" placeholder="Por enquanto atuamos apenas no Brasil" />
				<datalist id="listapais-candidato">
					<select>
						<option value="BRA">Brasil</option>
					</select>
				</datalist>
			</fieldset>	<!-- fim do fieldset endereco -->

			<fieldset id="css_contato"><legend>Contato</legend>
				<p>Insira ao menos um celular para contato</p> </br>

				<label id="css_celular-contato">Celular</label>
				<input id="css_celular-contato" name="php_celular" type="text" maxlength="10" />
				</br></br>
				<label id="css_tel-residencial">Telefone Residencial</label>
				<input id="css_tel-residencial" name="php_tel_residencial" type="text" maxlength="10" />
				</br></br>
				<label id="css_tel-recado">Telefone para recado</label>
				<input id="css_tel-recado" name="php_tel_recado" type="text" maxlength="10" />
				</br></br>
			</fieldset>
			<fieldset id="css_coisas a mais"><legend>Currículo breve</legend>
				<label id="css_escolaridade">Escolariedade</label>
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
				</br></br>
				<label id="css_linguas">Linguas faladas</label>
				<input type="text" name="php_linguas" id="css_linguas" value="INGLES" />
				</br></br>
				<label id="css_areapretendida">Áreas pretendidas</label>
				<input type="text" name="php_areapretendida" id="css_areapretendida" value="PROGRAMADOR" />
				</br></br>
			</fieldset>
			
			<fieldset><legend>Login e senha</legend>
                <label id="css_email-candidato">E-mail</label>
				<input id="css_email-candidato" name="php_emailcandidato" type="email" maxlength="100" required />
				<br>
				<label id="css_senha_candidato">Senha</label>
				<input id="css_senha_candidato" name="php_senha" type="password" maxlength="100" required/>
				</br>
			</fieldset>
			<input type="submit" value="Enviar" name="css_enviar-dados" id="php_enviar-dados" class="input-formulario"/>
			<button type="button" name="css_voltar" id="php_voltar"  onclick="location.href='area_candidato.html'" >Voltar</button>
			

		</form> <!-- fim do form-->
	</div> <!-- fim da div-->

<!--
    <footer id="footer" class="footer">

      <p>Trabalhe Conosco Todos os direitos Reservados 2017</p>

	</footer>
-->
</body>
</html>



<!-- rascunhos


					<br><br><br><br>


				< inserir enddereco de email para contato
					<label for="css_emailEmpresa">E-mail</label>
					<input type="email" class="input-formulario"name="php_emailEmpresa" id="css_emailEmpresa" size="20" maxlength="100" placeholder="E-mail para contato">
					<br>


				  inserir o motivo da empresa entrar em contato
					<p for="cDescricao">Porfavor nos informe os motivos de entrar em contato conosco!</p><br><br>
					<textarea id="cDescricao" name="tDescricao" maxlength="500"	placeholder="Máximo 500 caracteres"	cols="60" rows="9"></textarea>
					<br>



										<label for="css_emissorrg">Estado emissor</label>
										<input name="php_idestado" list="listaestados" placeholder="Informe o estado emissor do RG">
										<datalist id="listaestados">
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





-->
