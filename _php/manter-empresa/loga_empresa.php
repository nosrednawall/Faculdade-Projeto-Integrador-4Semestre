<?php
session_start();
ini_set('default_charset','UTF-8');
include_once("../conexao.php");
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>LoginEmpresa</title>
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='../../empresa_area_logada.php'", 400);
            }
            function failed(){
                setTimeout("window.location='../../empresa_area_nao_logada.php'", 400);
            }
        </script>
    </head>
    <body>
      <?php
        /*///////////////////////////////////////////////////////////
        ////////////Pega os valores enviadas via POST e adiciona ///
        ///////////////////as novas variaveis//////////////////////
        /////////////////////////////////////////////////////////*/
        $email_empresa	=	$_POST['php_email_empresa'];
        $senha  = $_POST['php_senha'];


        /*///////////////////////////////////////////////////////////
        ////////////envianda os dados ao BD/////////////////////////
        /////////////////////////////////////////////////////////*/
        $result = mysqli_query($mysqli, "SELECT * FROM `EMPRESA` WHERE `EMAIL` LIKE '$email_empresa' AND `SENHA_EMPRESA` LIKE '$senha' ");
        $linhas = mysqli_num_rows($result);
          if($linhas == 0){
              echo"O login falhou. Você será redirecionado para a página de login em 4 milesegundos.";
              echo"<script language='javascript'>failed()</script>";
              session_destroy();
          } else {
            $_SESSION["logado"] = TRUE;
            while($res = mysqli_fetch_array($result))
            {
              $_SESSION["razao_social"] = $res['RAZAO_SOCIAL'];
              $_SESSION["id_empresa"]   = $res['ID_EMPRESA'];
            }
              //$id = $_POST["ID_EMPRESA"];
              //$_SERVER["ID"]=$_POST["ID_EMPRESA"];
              echo"Você foi logado com sucesso. Redirecionando em 4 milesegundos.";
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
