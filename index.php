<!DOCTYPE html>
<html lang="pt-BR" xmlns:id="http://www.w3.org/1999/xhtml">

<head> <!-- Inicio do cabeçalho -->

	<link rel="stylesheet"  href="_css/header.css" >
	<link rel="stylesheet"  href="_css/estilo.css" > <!-- Estilo CSS do do site -->

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8" />

	<title>Trabalhe Conosco</title> <!-- Título da página -->

</head> <!-- Fim do cabeçalho -->

<body> <!-- Começo do Body -->

     	<header>
         <h1 class="float-l">
           <a href="#" title="Trabalhe Conosco" onclick="location.href='index.html'"> Trabalhe Conosco </a>
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
<div id="site">
    <div id="conteudo" >

      <div id="conteudo-left">
				<h1 onclick="location.href='area_empresa.html'">Cara empresa</h1>
				<h2 onclick="location.href='area_empresa.html'"> Seja um parceiro nosso</h2>
      </div>

		<div id="conteudo-right">
			<h1 onclick="location.href='area_candidato.html'">Caro Candidato</h1>
			<h2 onclick="location.href='area_candidato.html'">Suas oportunidades estão aqui</h2>
		</div>

    </div>

    <footer>

      <p>Trabalhe Conosco Todos os direitos Reservados 2017</p>

    </footer>
</div>
</body>
</html>
