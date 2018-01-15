<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
include_once("../conexao.php");

/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via post e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
$cnpj = $_POST['php_cnpj'];
$razao_social = $_POST['php_razao_social'];
$email_empresa	=	$_POST['php_email_empresa'];
$nome_fantasia = $_POST['php_nome_fantasia'];
$telefone = $_POST['php_telefone'];
$cep = $_POST['php_cep'];
$endereco = $_POST['php_endereco'];
$numero_empresa = $_POST['php_numero_empresa'];
$complemento = $_POST['php_complemento'];
$bairro = $_POST['php_bairro'];
$cidade = $_POST['php_cidade'];
$estado = $_POST['php_estado'];
$pais = $_POST['php_pais'];
$site = $_POST['php_site'];
$senha = $_POST['php_senha'];
$status = $_POST['php_status'];
$id_futuro_parceiro = $_POST['ID_EFP'];
/*///////////////////////////////////////////////////////////
////////////envianda os dados ao BD/////////////////////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli, "INSERT INTO EMPRESA (ID_EMPRESA,CNPJ,RAZAO_SOCIAL,NOME_FANTASIA,STATUS_CADASTRO,TELEFONE_COMERCIAL,EMAIL,SITE,CEP,ENDERECO,NUMERO_EMPRESA,COMPLEMENTO,BAIRRO,CIDADE,ESTADO,PAIS,SENHA_EMPRESA)
VALUES(NULL,'$cnpj','$razao_social','$nome_fantasia','$status','$telefone','$email_empresa','$site','$cep','$endereco','$numero_empresa','$complemento','$bairro','$cidade','$estado','$pais','$senha')");


/*///////////////////////////////////////////////////////////
////////////Apaga o cliente do BD futuros parceiros/////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli,"DELETE FROM `FUTURO_PARCEIRO` WHERE `FUTURO_PARCEIRO`.`ID_EFP` = $id_futuro_parceiro");

/*///////////////////////////////////////////////////////////
////////////Retorna a página principal do site//////////////
/////////////////////////////////////////////////////////*/
//echo "<br/><a href='../../ADM_empresa_manter_futuro_parceiro.php'>Volte a página principal</a>";
header("Location:../../ADM.php");
?>
