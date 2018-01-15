<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
include_once("../conexao.php");

/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via POST e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
$id = $_POST['php_id'];
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

/*///////////////////////////////////////////////////////////
////////////envianda os dados ao BD/////////////////////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli, "UPDATE EMPRESA SET CNPJ='$cnpj', RAZAO_SOCIAL='$razao_social', NOME_FANTASIA='$nome_fantasia', TELEFONE_COMERCIAL='$telefone', EMAIL='$email_empresa', SITE='$site', CEP='$cep', ENDERECO='$endereco',
NUMERO_EMPRESA='$numero_empresa', COMPLEMENTO='$complemento', BAIRRO='$bairro', CIDADE='$cidade', ESTADO = '$estado', PAIS = '$pais' WHERE ID_EMPRESA = $id");

/*///////////////////////////////////////////////////////////////////
////////////Mensagens finais e link para voltar a pagina anterior///
/////////////////////////////////////////////////////////////////*/
//echo "<h1>Os dados foram enviados com sucesso!</h1><br>";
//echo "<br/><a href='../../empresa_alterar.php'>Volte a página anterior</a>";
header("Location:../../empresa_area_logada.php");
?>
