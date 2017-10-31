<?php

/*///////////////////////////////////////////////////////////
////////////adiciona o arquivo de conexao a esse aquivo/////
/////////////////////////////////////////////////////////*/
include_once("conexao.php");

/*///////////////////////////////////////////////////////////
////////////Verifica se as variáveis estão null/////////////
/////////////////////////////////////////////////////////*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $php_nomecandidato = (isset($_POST["php_nomecandidato"]) && $_POST["php_nomecandidato"] != null) ? $_POST["php_nomecandidato"] : "";
    $php_nomesocial = (isset($_POST["php_nomesocial"]) && $_POST["php_nomesocial"] != null) ? $_POST["php_nomesocial"] : "";
    $php_cpfcandidato = (isset($_POST["php_cpfcandidato"]) && $_POST["php_cpfcandidato"] != null) ? $_POST["php_cpfcandidato"] : "";
    $php_rgcandidato = (isset($_POST["php_rgcandidato"]) && $_POST["php_rgcandidato"] != null) ? $_POST["php_rgcandidato"] : NULL;
} else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $id
    $php_nomecandidato = NULL;
    $php_nomesocial = NULL;
    $php_cpfcandidato = NULL;
    $php_rgcandidato = NULL;
}

/*///////////////////////////////////////////////////////////
////////////area onde irá fazer o envio de dados ao banco///
/////////////////////////////////////////////////////////*/

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
    try {
        if($id !=""){
                $stmt = $conexao->prepare("UPDATE CANDIDATO SET NOME=?,NOME_SOCIAL=?,CPF=?,RG=?,DATA_NASCIMENTO=?,SEXO=?,ESTADO_CIVIL=?,QTD_FILHOS=?,CNH=?,CEP=?,ENDERECO=?,NUMERO_CASA=?,COMPLEMENTO=?,BAIRRO=?,CIDADE=?,ESTADO=?,PAIS=?,TEL_CELULAR=?,TEL_RESIDENCIAL=?,TEL_RECADO=?,EMAIL=?,ESCOLARIDADE=?,LINGUAS,AREA_PRETENDIDA=?");
                $stmt->bindParam(4, $id);
        }else {
            $stmt = $conexao->prepare("INSERT INTO contatos (nome, email, celular) VALUES (?, ?, ?)");
        }
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $celular);
         
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "Dados cadastrados com sucesso!";
                $id = null;
                $nome = null;
                $email = null;
                $celular = null;
            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        } else {
               throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
}

/*

echo "<script type='text/javascript'>alert('antesDoIf');</script>";

//if(isset($_POST['submit'])) {
	$php_nomecandidato = mysqli_real_escape_string($mysqli,$_POST['php_nomecandidato']);
	$php_nomesocial = mysqli_real_escape_string($mysqli, $_POST['php_nomesocial']);
	$php_cpfcandidato = mysqli_real_escape_string($mysqli, $_POST['php_cpfcandidato']);
	$php_rgcandidato = mysqli_real_escape_string($mysqli, $_POST['php_rgcandidato']);
	$php_datanascimento = mysqli_real_escape_string($mysqli, $_POST['php_datanascimento']);
	$php_sexo = mysqli_real_escape_string($mysqli, $_POST['php_sexo']);
	echo "<script type='text/javascript'>alert('batata $teste');</script>";
	$php_estadocivil = mysqli_real_escape_string($mysqli, $_POST['php_estadocivil']);
	$php_qtdafilhos = mysqli_real_escape_string($mysqli, $_POST['php_qtdafilhos']);
	$php_cnh = mysqli_real_escape_string($mysqli, $_POST['php_cnh']);
	$php_cepcandidato = mysqli_real_escape_string($mysqli, $_POST['php_cepcandidato']);
	$php_enderecocandidato = mysqli_real_escape_string($mysqli, $_POST['php_enderecocandidato']);
	$php_numeroendereco = mysqli_real_escape_string($mysqli, $_POST['php_numeroendereco']);
	$php_complemento = mysqli_real_escape_string($mysqli, $_POST['php_complemento']);
	$php_bairro = mysqli_real_escape_string($mysqli, $_POST['php_bairro']);
	$php_cidade = mysqli_real_escape_string($mysqli, $_POST['php_cidade']);
	$php_estado = mysqli_real_escape_string($mysqli, $_POST['php_estado']);
	$php_pais = mysqli_real_escape_string($mysqli, $_POST['php_pais']);
	$php_celular = mysqli_real_escape_string($mysqli, $_POST['php_celular']);
	$php_tel_residencial = mysqli_real_escape_string($mysqli, $_POST['php_tel_residencial']);
	$php_tel_recado = mysqli_real_escape_string($mysqli, $_POST['php_tel_recado']);
	$php_emailcandidato = mysqli_real_escape_string($mysqli, $_POST['php_emailcandidato']);
	$php_escolariedade =  mysqli_real_escape_string($mysqli, $_POST['php_escolariedade']);
	$php_linguas =  mysqli_real_escape_string($mysqli, $_POST['php_linguas']);
	$php_areapretendida =  mysqli_real_escape_string($mysqli, $_POST['php_areapretendida']);

echo "<br><br>copiou as variáveis";
echo "<script type='text/javascript'>alert('antesDoIf');</script>";
	// checking empty fields
	if(empty($php_nomecandidato) || empty($php_cpfcandidato) || empty($php_cnhrgcandidato) ||
	 empty($php_datanascimento) || empty($php_estadocivil) || empty($php_sexo) ||
	 empty($php_enderecocandidato) || empty($php_numeroendereco) ||
	 empty($php_bairro) || empty($php_cidade) || empty($php_estado) ||
	  empty($php_pais) || empty($php_celular) || empty($php_emailcandidato)) {

			if(empty($php_nomecandidato)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($php_cpfcandidato) ) {
			echo "<font color='red'>O Campo CPF está vazio.</font><br/>";
		}

		if(empty($php_cnhrgcandidato)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($php_datanascimento)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($php_estadocivil)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($php_sexo)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($php_enderecocandidato)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($php_numeroendereco)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($php_bairro)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($php_cidade)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($php_pais)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($php_celular)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($php_emailcandidato)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	//else {
		// if all the fields are filled (not empty)
echo "<script type='text/javascript'>alert('antes do sql');</script>";
		//insert data to database$result = mysqli_query($mysqli, "INSERT INTO CANDIDATO(NOME,) VALUES('$name','$age','$email')");
$result = mysqli_query($mysqli, "INSERT INTO CANDIDATO(NOME,NOME_SOCIAL,CPF,RG,
	DATA_NASCIMENTO,SEXO,ESTADO_CIVIL,QTD_FILHOS,CNH,CEP,ENDERECO,NUMERO_CASA,
	COMPLEMENTO,BAIRRO,CIDADE,ESTADO,PAIS,TEL_CELULAR,TEL_RESIDENCIAL,TEL_RECADO,EMAIL,
	ESCOLARIDADE,LINGUAS,AREA_PRETENDIDA)
	VALUES('$php_nomecandidato','$php_nomesocial','$php_cpfcandidato','$php_rgcandidato',
		'$php_datanascimento','$php_sexo','$php_estadocivil','$php_qtdafilhos','$php_cnh',
		'$php_cepcandidato','$php_enderecocandidato','$php_numeroendereco','$php_complemento',
		'$php_bairro','$php_cidade','$php_estado','$php_pais','$php_celular','$php_tel_residencial',
		'$php_tel_recado','$php_emailcandidato','$php_escolaridade','$php_linguas','$php_areapretendida')");
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";

*/
?>
