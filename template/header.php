<?php

function escreve_header(){

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

}

function escreve_footer(){
echo '<p>Trabalhe Conosco Todos os direitos Reservados 2017</p>'

}
?>
