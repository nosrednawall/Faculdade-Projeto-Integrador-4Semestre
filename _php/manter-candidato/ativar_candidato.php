<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
include("../conexao.php");

/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via GET e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
$id = $_GET['ID'];

/*///////////////////////////////////////////////////////////
////////////ATIVA A EMPRESA VIA BD/////////////////////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli,"UPDATE `CANDIDATO` SET `STATUS` = 'ATIVO' WHERE `CANDIDATO`.`ID_CANDIDATO` = $id");

/*///////////////////////////////////////////////////////////
////////////Retorna a página anterior//////////////
/////////////////////////////////////////////////////////*/
header("Location:../../candidato_inativar.php");
?>
