 <?php
 /*///////////////////////////////////////////////////////////
 ////////////adiciona o arquivo de conexao a esse aquivo/////
 /////////////////////////////////////////////////////////*/
  // include_once("../conexao.php");
?>
  <!DOCTYPE html>
  <html lang="pt-BR">
  <head>
  </head>
  <body>
  <table border="1" width="100%">
  <tr>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Celular</th>
      <th>Ações</th>
  </tr>
  <?php
include_once("../conexao.php");
  $pegou = mysql_query($mysqli, "SELECT NOME,EMAIL,TEL_CELULAR FROM CANDIDATO");
  //$pegou = "SELECT NOME from CANDIDATO";
  $mostrar = mysqli_query($pegou);
  while($array_candidato = mysqli_fetch_row($mostrar)){
    echo "<p>";
    foreach ($array_candidato as $campo => $variavel) {
        echo $campo . ' => ' . $variavel . ' | ';

    }
    echo "</p>";
  }
/*
  $result = mysql_query($conexao, "SELECT NOME,EMAIL,TEL_CELULAR FROM CANDIDATO");
  //while($mostrar = mysql_fetch_array()){
while($mostrar = mysql_fetch_array ( $result, MYSQL_NUM)) {
            echo "<tr>";
               echo "<td>".$mostrar["NOME"]."</td><td>".$mostrar["EMAIL"]."</td><td>".$mostrar["TEL_CELULAR"].
               "</td><td><center><a href=\"?act=upd&id=" . "\">[Alterar]</a>"
                          ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                          ."<a href=\"?act=del&id=" . "\">[Excluir]</a></center></td>";
            echo "</tr>";
  }
  */
mysql_free_result($result);
  ?>
</table>
</body>
  </html>
