<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
include_once("../conexao.php");

/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via post e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
$id_vagac =  $_POST['php_id_vagac'];
$descricao = $_POST['php_descricao-vaga'];
$qtda_ofertada = $_POST['php_quantidade-vaga'];
$resumo = $_POST['php_resumo'];
$id_pergunta1 = $_POST['php_pergunta1'];
$id_pergunta2 = $_POST['php_pergunta2'];
$id_pergunta3 = $_POST['php_pergunta3'];
$id_pergunta4 = $_POST['php_pergunta4'];
$id_pergunta5 = $_POST['php_pergunta5'];


//UPDATE `VAGA_CRIADA` SET `ID_PERGUNTA1` = '42', `ID_PERGUNTA2` = '42', `ID_PERGUNTA3` = '42', `ID_PERGUNTA4` = '42', `ID_PERGUNTA5` = '42' WHERE `VAGA_CRIADA`.`ID_VAGAC` = 2;
/*///////////////////////////////////////////////////////////
////////////envianda os dados ao BD/////////////////////////
/////////////////////////////////////////////////////////*/

  $result = mysqli_query($mysqli, "UPDATE `VAGA_CRIADA`
     SET `DESCRICAO` = '$descricao', `RESUMO` = '$resumo', `QTDA_OFERTADA` = '$qtda_ofertada',
     `ID_PERGUNTA1` = '$id_pergunta1', `ID_PERGUNTA2` = '$id_pergunta2', `ID_PERGUNTA3` = '$id_pergunta3', `ID_PERGUNTA4` = '$id_pergunta4',`ID_PERGUNTA5` = '$id_pergunta5'
     WHERE `VAGA_CRIADA`.`ID_VAGAC` = $id_vagac");

/*///////////////////////////////////////////////////////////
////////////Retorna a página principal do site//////////////
/////////////////////////////////////////////////////////*/
//echo "<br/><a href='../../ADM_empresa_manter_futuro_parceiro.php'>Volte a página principal</a>";
header("Location:../../empresa_visualizar_vagas.php");
?>
