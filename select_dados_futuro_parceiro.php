
<?php
/*
	include _php/conexao.php;
 	//include _php/manter-empresa/selecionar-futuro-parceiro.php;
	$imprimir = mysql_query($mysqli, "SELECT * FROM FUTURO_PARCEIRO");

while ($mostrar=mysqli_fetch_array($imprimir)) {
	$nomeempresa = $mostrar["NOME_EMPRESA"];
	$email = $mostrar["EMAIL_EMPRESA"];
	$contato = $mostrar["NOME_CONTATO"];
	$motivo = $mostrar["MOTIVO_CONTATO"];
}

*/
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head> <!-- Inicio do cabeçalho -->

	<link rel="stylesheet"  href="_css/header.css" >
	<link rel="stylesheet"  href="_css/estilo.css" > <!-- Estilo CSS do do site -->


	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8" />

	<title>Trabalhe Conosco</title> <!-- Título da página -->

</head> <!-- Fim do cabeçalho -->

<body> <!-- Começo do Body -->

    <header>
      <h1 class="float-l">
        <a href="#" title="Trabalhe Conosco" > Trabalhe Conosco </a>
      </h1>

      <input type="checkbox" id="control-nav" />
      <label for="control-nav" class="control-nav"></label>
      <label for="control-nav" class="control-nav-close"></label>

        <nav class="float-r">
        <ul class="list-auto">
          <li>
            <a href="#Candidato" onclick="location.href='area_candidato.html'" title="Candidado">Candidato</a>
          </li>
          <li>
            <a href="#Empresa" onclick="location.href='area_empresa.html'" title="Empresa">Empresa</a>
          </li>
          <li>
            <a href="#Sobre nós" onclick="location.href='sobre_nos.html'" title="Sobre nós">Sobre nós</a>
          </li>
          <li>
            <a href="#Contato" onclick="location.href='contato.html'" title="Contato">Contato</a>
          </li>
        </ul>
      </nav>
    </header>

    <article>
		<form name="php_selectfuturoparceiro">
    <table id="css_futuroparceiro"><legend>oi</legend>
			<tr>
				<td>Nome empresa</td><td>Nome contato</td><td>E-mail cadastrado</td>
			</tr>
			<tr>
				<td><?$nomeempresa?></td><td><?$email?></td><td><?$contato?></td><td><?$motivo?></td>
			</tr>
		</table>
	</form>
    </article>

    <footer>

      <p>Trabalhe Conosco Todos os direitos Reservados 2017</p>

    </footer>

</body>
</html>
