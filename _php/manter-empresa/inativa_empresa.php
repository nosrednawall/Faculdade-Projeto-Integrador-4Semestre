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
////////////DESATIVA A EMPRESA VIA BD/////////////////////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli,"UPDATE `EMPRESA` SET `STATUS_CADASTRO` = 'INATIVO' WHERE `EMPRESA`.`ID_EMPRESA` = $id");

/*///////////////////////////////////////////////////////////
////////////Retorna a página anterior//////////////
/////////////////////////////////////////////////////////*/
header("Location:../../ADM_empresa_alterar.php");
?>
