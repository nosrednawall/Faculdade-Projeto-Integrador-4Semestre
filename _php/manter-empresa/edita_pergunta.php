<?php
session_start();
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
		header("Location: empresa_area_nao_logada.php");
}
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
include_once("../conexao.php");

/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via post e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
$pergunta = $_POST['php_pergunta'];
$alt_a = $_POST['php_alt_a'];
$alt_b = $_POST['php_alt_b'];
$alt_c = $_POST['php_alt_c'];
$alt_d = $_POST['php_alt_d'];
$alt_e = $_POST['php_alt_e'];
$resposta	=	$_POST['php_resposta'];
$id_pergunta = $_POST['php_id_pergunta'];
$id_profissao = $_POST['php_profissao'];
/*///////////////////////////////////////////////////////////
////////////envianda os dados ao BD/////////////////////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli, "UPDATE `PERGUNTAS_EMPRESA` SET `PERGUNTA` = '$pergunta', `ALTERNATIVA1` = '$alt_a', `ALTERNATIVA2` = '$alt_b', `ALTERNATIVA3` = '$alt_c', `ALTERNATIVA4` = '$alt_d', `ALTERNATIVA5` = '$alt_e', `RESPOSTA` = '$resposta',
`ID_PROFISSAO` = '$id_profissao' WHERE `PERGUNTAS_EMPRESA`.`ID_PERGUNTA` = '$id_pergunta' ");

/*///////////////////////////////////////////////////////////
////////////Retorna a página principal do site//////////////
/////////////////////////////////////////////////////////*/
//echo "<br/><a href='../../ADM_empresa_manter_futuro_parceiro.php'>Volte a página principal</a>";
header("Location:../../empresa_visualizar_perguntas.php");
?>
