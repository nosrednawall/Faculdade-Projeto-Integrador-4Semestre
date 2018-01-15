<?php
include_once("conexao.php");

//echo "<script type='text/javascript'>alert('antes do post');</script>";

$nome_contato = $_POST['php_nomecontatoempresa'];
$nome_empresa =	$_POST['php_nomeempresa'];
$email_empresa	=	$_POST['php_emailempresa'];
$motivo_contato	=	$_POST['php_motivocontato'];

//echo "<script type='text/javascript'>alert('depois do post');</script>";

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
//echo "<script type='text/javascript'>alert('depois do if');</script>";
$result = mysqli_query($mysqli, "INSERT INTO FUTURO_PARCEIRO(NOME_EMPRESA,EMAIL_EMPRESA,NOME_CONTATO,MOTIVO_CONTATO)
VALUES('$nome_contato','$nome_empresa','$email_empresa','$motivo_contato')");

echo "<h1>Os dados foram enviados com sucesso!</h1><br>";
echo "<br/><a href='../index.html'>Volte a página principal</a>";

?>
