<?php

/*///////////////////////////////////////////////////////////
////////////adiciona o arquivo de conexao a esse aquivo/////
/////////////////////////////////////////////////////////*/
include_once("conexao.php");

/*///////////////////////////////////////////////////////////
////////////Verifica se as variáveis estão null/////////////
/////////////////////////////////////////////////////////*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_contato = (isset($_POST["php_nomecontatoempresa"]) && $_POST["php_nomecontatoempresa"] != null) ? $_POST["php_nomecontatoempresa"] : "";
    $nome_empresa = (isset($_POST["php_nomeempresa"]) && $_POST["php_nomeempresa"] != null) ? $_POST["php_nomeempresa"] : "";
    $email_empresa = (isset($_POST["php_emailempresa"]) && $_POST["php_emailempresa"] != null) ? $_POST["php_emailempresa"] : "";
    $motivo_contato = (isset($_POST["php_motivocontato"]) && $_POST["php_motivocontato"] != null) ? $_POST["php_motivocontato"] : "";
} 
/* 
 else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $id
    $id = NULL;
    $nome = NULL;
    $email = NULL;
    $celular = NULL;
}
*/

/*///////////////////////////////////////////////////////////
////////////area onde irá fazer o envio de dados ao banco///
/////////////////////////////////////////////////////////*/
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
    try {
        if($id !=""){
                $stmt = $conexao->prepare("UPDATE CANDIDATO SET ");
                $stmt->bindParam(4, $id);
        }else {
            $stmt = $conexao->prepare("INSERT INTO contatos (nome, email, celular) VALUES (?, ?, ?)");
        }
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $celular);

?>
