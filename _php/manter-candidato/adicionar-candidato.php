<?php

/*///////////////////////////////////////////////////////////
////////////adiciona o arquivo de conexao a esse aquivo/////
/////////////////////////////////////////////////////////*/
include_once("../conexao.php");
//echo "<script type='text/javascript'>alert('antesDoIf');</script>";

/*///////////////////////////////////////////////////////////
////////////adiciona o arquivo de conexao a esse aquivo/////
/////////////////////////////////////////////////////////*/
	$php_nomecandidato = $_POST['php_nomecandidato'];
	$php_nomesocial = $_POST['php_nomesocial'];
	$php_cpfcandidato = $_POST['php_cpfcandidato'];
	$php_rgcandidato = $_POST['php_rgcandidato'];
	$php_datanascimento = date("Y-m-d", strtotime($_POST['php_datanascimento'])); //transforma a string em formato data para gravar no BD
	$php_sexo = $_POST['php_sexo'];
	$php_estadocivil = $_POST['php_estadocivil'];
	$php_qtdafilhos = $_POST['php_qtdafilhos'];
	$php_cnh = $_POST['php_cnh'];
	$php_cepcandidato = $_POST['php_cepcandidato'];
	$php_enderecocandidato = $_POST['php_enderecocandidato'];
	$php_numeroendereco = $_POST['php_numeroendereco'];
	$php_complemento = $_POST['php_complemento'];
	$php_bairro = $_POST['php_bairro'];
	$php_cidade = $_POST['php_cidade'];
	$php_estado = $_POST['php_estado'];
	$php_pais = $_POST['php_pais'];
	$php_celular = $_POST['php_celular'];
	$php_tel_residencial = $_POST['php_tel_residencial'];
	$php_tel_recado = $_POST['php_tel_recado'];
	$php_emailcandidato = $_POST['php_emailcandidato'];
	$php_escolaridade =  $_POST['php_escolaridade'];
	$php_linguas = $_POST['php_linguas'];
	$php_idprofissao = $_POST['php_profissao'];
	$php_senha = $_POST['php_senha'];
	$php_status = $_POST['php_status'];



/*///////////////////////////////////////////////////////////
////////////verificando se as variáveis estão vazias////////
/////////////////////////////////////////////////////////*/
	if(empty($php_nomecandidato) || empty($php_cpfcandidato) || empty($php_cnhrgcandidato) ||
	 empty($php_datanascimento) || empty($php_estadocivil) || empty($php_sexo) ||
	 empty($php_enderecocandidato) || empty($php_numeroendereco) ||
	 empty($php_bairro) || empty($php_cidade) || empty($php_estado) ||
	  empty($php_pais) || empty($php_celular) || empty($php_emailcandidato)) {

			if(empty($php_nomecandidato)) {
			echo "<font color='red'>O campo nome está vazio.</font><br/>";
		}

		if(empty($php_cpfcandidato) ) {
			echo "<font color='red'>O campo cpf está vazio.</font><br/>";
		}

		if(empty($php_rgcandidato)) {
			echo "<font color='red'>O campo rg está vazio.</font><br/>";
		}

		if(empty($php_datanascimento)) {
			echo "<font color='red'>O campo data nascimento está vazio.</font><br/>";
		}

		if(empty($php_estadocivil)) {
			echo "<font color='red'><p>O campo estado está vazio<p></font><br/>";
		}

		if(empty($php_sexo)) {
			echo "<font color='red'>O campo sexo está vazio.</font><br/>";
		}

		if(empty($php_enderecocandidato)) {
			echo "<font color='red'>endereco.</font><br/>";
		}

		if(empty($php_numeroendereco)) {
			echo "<font color='red'>O campo numero endereco está vazio</font><br/>";
		}

		if(empty($php_bairro)) {
			echo "<font color='red'>O campo bairro está vazio.</font><br/>";
		}

		if(empty($php_cidade)) {
			echo "<font color='red'>O campo cidade está vazio.</font><br/>";
		}

		if(empty($php_pais)) {
			echo "<font color='red'>O campo pais está vazio.</font><br/>";
		}

		if(empty($php_celular)) {
			echo "<font color='red'>O campo celular está vazio.</font><br/>";
		}

		if(empty($php_emailcandidato)) {
			echo "<font color='red'>O campo email está vazio.</font><br/>";
		}

        if(empty($php_senha)) {
			echo "<font color='red'>O campo senha está vazio.</font><br/>";
		}

		//link to the previous page
		//echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	//else {
		// if all the fields are filled (not empty)

/*///////////////////////////////////////////////////////////
////////////enviando dados ao servidor//////////////////////
/////////////////////////////////////////////////////////*/

//echo "<script type='text/javascript'>alert('antes do sql');</script>";

$result = mysqli_query($mysqli, "INSERT INTO CANDIDATO(ID_CANDIDATO,NOME,NOME_SOCIAL,CPF,RG,
	DATA_NASCIMENTO,SEXO,ESTADO_CIVIL,QTD_FILHOS,CNH,CEP,ENDERECO,NUMERO_CASA,
	COMPLEMENTO,BAIRRO,CIDADE,ESTADO,PAIS,TEL_CELULAR,TEL_RESIDENCIAL,TEL_RECADO,EMAIL,
	ESCOLARIDADE,LINGUAS,ID_PROFISSAO,SENHA_CANDIDATO,STATUS)
	VALUES(NULL,'$php_nomecandidato','$php_nomesocial','$php_cpfcandidato','$php_rgcandidato',
		'$php_datanascimento','$php_sexo','$php_estadocivil','$php_qtdafilhos','$php_cnh',
		'$php_cepcandidato','$php_enderecocandidato','$php_numeroendereco','$php_complemento',
		'$php_bairro','$php_cidade','$php_estado','$php_pais','$php_celular','$php_tel_residencial',
		'$php_tel_recado','$php_emailcandidato','$php_escolaridade','$php_linguas','$php_idprofissao','$php_senha','$php_status')");
		//display success message
		//echo "<font color='green'>Data added successfully.";
		//}
//}
//echo "<script type='text/javascript'>alert('depois do sql');</script>";
//echo "<script type='text/javascript'>alert('$php_escolaridade');</script>";
header("Location:../../index.php");
?>
