<?php

/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
include_once("../conexao.php");

/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via post e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
$nome_contato = $_POST['php_nome_contato_empresa'];
$nome_empresa =	$_POST['php_nome_empresa'];
$email_empresa	=	$_POST['php_email_empresa'];
$motivo_contato	=	$_POST['php_motivo_contato'];

/*///////////////////////////////////////////////////////////
////////////Verfica se as variaveis estão com valor vazio///
/////////////////////////////////////////////////////////*/
if (empty($nome_contato) || empty($nome_empresa) || empty($email_empresa) || empty($motivo_contato)) {
	if(empty($nome_contato)) {
		echo "<font color='red'>Name field is empty.</font><br/>";
	}
	if(empty($nome_empresa)) {
		echo "<font color='red'>Name field is empty.</font><br/>";
	}
	if(empty($email_empresa)) {
		echo "<font color='red'>Name field is empty.</font><br/>";
	}
	if(empty($motivo_contato)) {
		echo "<font color='red'>Name field is empty.</font><br/>";
	}
}

/*///////////////////////////////////////////////////////////
////////////envianda os dados ao BD/////////////////////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli, "INSERT INTO FUTURO_PARCEIRO(NOME_EMPRESA,EMAIL_EMPRESA,NOME_CONTATO,MOTIVO_CONTATO)
VALUES('$nome_empresa','$email_empresa','$nome_contato','$motivo_contato')");

/*///////////////////////////////////////////////////////////
////////////Retorna a página principal do site//////////////
/////////////////////////////////////////////////////////*/
header("Location:../../index.php");
?>
