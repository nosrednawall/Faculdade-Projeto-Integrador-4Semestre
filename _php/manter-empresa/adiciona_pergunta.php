<?php
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
$id_empresa = $_POST['ID_EMPRESA'];
$id_profissao = $_POST['php_profissao'];

/*///////////////////////////////////////////////////////////
////////////envianda os dados ao BD/////////////////////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli, "INSERT INTO PERGUNTAS_EMPRESA (ID_PERGUNTA,PERGUNTA,ALTERNATIVA_A,ALTERNATIVA_B,ALTERNATIVA_C,ALTERNATIVA_D,ALTERNATIVA_E,RESPOSTA,ID_EMPRESA,ID_PROFISSAO)
VALUES(NULL,'$pergunta','$alt_a','$alt_b','$alt_c','$alt_d','$alt_e','$resposta','$id_empresa','$id_profissao')");

/*///////////////////////////////////////////////////////////
////////////Retorna a página principal do site//////////////
/////////////////////////////////////////////////////////*/
//echo "<br/><a href='../../ADM_empresa_manter_futuro_parceiro.php'>Volte a página principal</a>";
header("Location:../../empresa_visualizar_perguntas.php");
?>
