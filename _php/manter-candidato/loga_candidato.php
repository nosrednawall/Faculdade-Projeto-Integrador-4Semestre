<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
session_start();
include_once("../conexao.php");
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>LoginCandidato</title>
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='../../candidato_area_logada.php'", 400);
            }
            function failed(){
                setTimeout("window.location='../../candidato_area_nao_logada.php'", 400);
            }
        </script>
    </head>
    <body>
      <?php
        /*///////////////////////////////////////////////////////////
        ////////////Pega os valores enviadas via POST e adiciona ///
        ///////////////////as novas variaveis//////////////////////
        /////////////////////////////////////////////////////////*/
        $email_candidato	=	$_POST['php_email_candidato'];
        $senha  = $_POST['php_senha'];


        /*///////////////////////////////////////////////////////////
        ////////////envianda os dados ao BD/////////////////////////
        /////////////////////////////////////////////////////////*/
        $result = mysqli_query($mysqli, "SELECT * FROM `CANDIDATO` WHERE `EMAIL` LIKE '$email_candidato' AND `SENHA_CANDIDATO` LIKE '$senha' ");
        $linhas = mysqli_num_rows($result);
          if($linhas == 0){
              echo"O login falhou. Você será redirecionado para a página de login em 4 segundos.";
              echo"<script language='javascript'>failed()</script>";
          } else {
            $_SESSION["logado"] = TRUE;
            while($res = mysqli_fetch_array($result))
            {
              $_SESSION["nome_social"] = $res['NOME_SOCIAL'];
              $_SESSION["id_candidato"]   = $res['ID_CANDIDATO'];
            }
              //$id = $_POST["ID_EMPRESA"];
              //$_SERVER["ID"]=$_POST["ID_EMPRESA"];
              echo"Você foi logado com sucesso. Redirecionando em 4 segundos.";
              echo"<script language='javascript'>sucesso()</script";
        }
        /*///////////////////////////////////////////////////////////////////
        ////////////Mensagens finais e link para voltar a pagina anterior///
        /////////////////////////////////////////////////////////////////*/
        //echo "<h1>Os dados foram enviados com sucesso!</h1><br>";
        //echo "<br/><a href='../../empresa_alterar.php'>Volte a página anterior</a>";
        //header("Location:../../empresa_alterar.php");

        /*
        while($res = mysqli_fetch_array($result)){
          $id_empresa = $res['ID_EMPRESA'];
          $razao_social = $res['RAZAO_SOCIAL'];
          }
        */
        ?>
  </body>
</html>
