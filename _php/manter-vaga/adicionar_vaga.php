<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
include_once("../conexao.php");

/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via post e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
$descricao = $_POST['php_descricao-vaga'];
$qtda_ofertada = $_POST['php_quantidade-vaga'];
$status = $_POST['php_status'];
$resumo = $_POST['php_resumo'];
$id_pergunta1 = $_POST['php_pergunta1'];
$id_pergunta2 = $_POST['php_pergunta2'];
$id_pergunta3 = $_POST['php_pergunta3'];
$id_pergunta4 = $_POST['php_pergunta4'];
$id_pergunta5 = $_POST['php_pergunta5'];


/*///////////////////////////////////////////////////////////
////////////envianda os dados ao BD/////////////////////////
/////////////////////////////////////////////////////////*/
$result = mysqli_query($mysqli, "INSERT INTO VAGA_CRIADA (ID_VAGAC,DESCRICAO,QTDA_OFERTADA,STATUS,RESUMO,ID_PERGUNTA1,ID_PERGUNTA2,ID_PERGUNTA3,ID_PERGUNTA4,ID_PERGUNTA5)
VALUES(NULL,'$descricao','$qtda_ofertada','$status','$resumo','$id_pergunta1','$id_pergunta2','$id_pergunta3','$id_pergunta4','$id_pergunta5')");

/*///////////////////////////////////////////////////////////
////////////Retorna a página principal do site//////////////
/////////////////////////////////////////////////////////*/
//echo "<br/><a href='../../ADM_empresa_manter_futuro_parceiro.php'>Volte a página principal</a>";
header("Location:../../empresa_visualizar_vagas.php");
?>
