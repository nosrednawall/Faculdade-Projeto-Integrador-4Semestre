<?php

include_once("../conexao.php");


/*
$query = "SELECT PERGUNTAS_EMPRESA.ID_PERGUNTA , PERGUNTAS_EMPRESA.PERGUNTA , PROFISSAO.NOME , PROFISSAO.AREA , STATUS
  FROM PERGUNTAS_EMPRESA,PROFISSAO WHERE PERGUNTAS_EMPRESA.ID_EMPRESA = 2 AND PERGUNTAS_EMPRESA.ID_PROFISSAO = PROFISSAO.ID_PROFISSAO
  AND PERGUNTAS_EMPRESA.STATUS LIKE 'ATIVA' ORDER BY PROFISSAO.AREA";

$perguntas = mysqli_query($mysqli,$query);
while($res = mysqli_fetch_array($perguntas)){
  print_r($res);
  echo "<br>";
}


$perguntas = mysqli_query($mysqli,$query);
while($res = mysqli_fetch_array($perguntas)){
  print_r($res);
  echo "<br>";
}
$perguntas = mysqli_query($mysqli,$query);
while($res = mysqli_fetch_array($perguntas)){
  print_r($res);
  echo "<br>";
}

*/
$id_vagac = 20;
//$id_empresa = $_SESSION["id_empresa"];


$result = mysqli_query($mysqli, "SELECT * FROM `VAGA_CRIADA` WHERE `ID_VAGAC` = 20");
while($res = mysqli_fetch_array($result))
{
  $descricao = $res['DESCRICAO'];
  $qtda_ofertada =  $res['QTDA_OFERTADA'];
  $resumo =  $res['RESUMO'];
  $id_pergunta1 =  $res['ID_PERGUNTA1'];
  $id_pergunta2 =  $res['ID_PERGUNTA2'];
  $id_pergunta3 =  $res['ID_PERGUNTA3'];
  $id_pergunta4 =  $res['ID_PERGUNTA4'];
  $id_pergunta5 =  $res['ID_PERGUNTA5'];
}
echo "antes <br>";
echo "$resumo <br>";
echo "depois";
/*var_dump($dados[1]['PERGUNTA']);
function ListaPergunta($mysqli,$query)
{
  $perguntas = mysqli_query($mysqli,$query);

  while($res = mysqli_fetch_array($perguntas)){




     for($i=0; $i<count($perguntas); $i++){

      // $pergunta = [$row[$i] = ["ID" => $res[ID_PERGUNTA], "AREA"=>$res[AREA], "NOME"=>$res[NOME], "PERGUNTA"=>$res[PERGUNTA] ]];

       $pergunta = ["AREA"=>$res[AREA],"ID" => $res[ID_PERGUNTA],"NOME"=>$res[NOME],"PERGUNTA"=>$res[PERGUNTA] ];
       print_r($pergunta);

     }
          return $pergunta;

  }

}

*/
?>
