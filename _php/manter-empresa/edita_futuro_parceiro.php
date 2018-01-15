<?php
/*///////////////////////////////////////////////////////////
////////////adiciona os arquivos para conexao///////////////
/////////////////////////////////////////////////////////*/
include_once("../conexao.php");

/*///////////////////////////////////////////////////////////
////////////Pega os valores enviadas via POST e adiciona ///
///////////////////as novas variaveis//////////////////////
/////////////////////////////////////////////////////////*/
if(isset($_POST['update']))
{
  $id = mysqli_real_escape_string($mysqli, $_POST['ID']);
	$nome_empresa = mysqli_real_escape_string($mysqli, $_POST['NOME_EMPRESA']);
	$email = mysqli_real_escape_string($mysqli, $_POST['EMAIL_EMPRESA']);
	$nome_contato = mysqli_real_escape_string($mysqli, $_POST['NOME_CONTATO']);
	$motivo_contato = mysqli_real_escape_string($mysqli, $_POST['MOTIVO_CONTATO']);

  /*///////////////////////////////////////////////////////////
  ////////////CHECA SE HA CAMPOS EM BRANCO////////////////////
  /////////////////////////////////////////////////////////*/
	if(empty($nome_empresa) || empty($email) || empty($nome_contato) || empty($motivo_contato)) {

		if(empty($nome_empresa)) {
			echo "<font color='red'>O campo nome está vazio.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>O campo email está vazio.</font><br/>";
		}

		if(empty($nome_contato)) {
			echo "<font color='red'>O campo contato está vazio.</font><br/>";
		}
		if(empty($motivo_contato)) {
			echo "<font color='red'>O campo motivo está vazio.</font><br/>";
		}
	} else {

    /*///////////////////////////////////////////////////////////
    ////////////envianda os dados ao BD/////////////////////////
    /////////////////////////////////////////////////////////*/
		$result = mysqli_query($mysqli, "UPDATE `FUTURO_PARCEIRO` SET `NOME_EMPRESA` = '$nome_empresa', `EMAIL_EMPRESA` = '$email', `NOME_CONTATO` = '$nome_contato', `MOTIVO_CONTATO` = '$motivo_contato' WHERE `FUTURO_PARCEIRO`.`ID_EFP` = $id");

		echo "<script type='text/javascript'>alert('depois do update a variavel é $id');</script>";
		//redirectig to the display page. In our case, it is index.php
		//header("Location: index.php");
		header("Location:../../ADM_empresa_manter_futuro_parceiro.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['ID'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM `FUTURO_PARCEIRO` WHERE `ID_EFP` = $id ");


while($res = mysqli_fetch_array($result))
{
 //   $id = $res['ID'];
	$nome_empresa = $res['NOME_EMPRESA'];
	$email = $res['EMAIL_EMPRESA'];
	$nome_contato = $res['NOME_CONTATO'];
	$motivo_contato = $res['MOTIVO_CONTATO'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR" xmlns:id="http://www.w3.org/1999/xhtml">
<head> <!-- Inicio do cabeçalho -->
	<link rel="stylesheet"  href="../../_css/bootstrap.min.css" >
	<link rel="stylesheet"  href="../../_css/header.css" >
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8" />
	<title>Trabalhe Conosco</title> <!-- Título da página -->
</head> <!-- Fim do cabeçalho -->
<body> <!-- Começo do Body -->
	<!-- INICIO DO HEADER PERSONALIZADO, PORÉM COM A CLASSE CONTEINER DO BOOTSTRAP-->
	<header class="container">
		<h1 class="float-l">
			<a href="#" title="Trabalhe Conosco" onclick="../../location.href='index.php'"> Trabalhe Conosco </a>
		</h1>

		<input type="checkbox" id="control-nav" />
		<label for="control-nav" class="control-nav"></label>
		<label for="control-nav" class="control-nav-close"></label>

			<nav class="float-r">
			<ul class="list-auto">
				<li>
					<a href="#Candidato" onclick="location.href='../../candidato_area_nao_logada.php'" title="Candidado">Candidato</a>
				</li>
				<li>
					<a href="#Empresa" onclick="location.href='../../empresa_area_nao_logada.php'" title="Empresa">Empresa</a>
				</li>
				<li>
					<a href="#Sobre nós" onclick="location.href='../../sobre_nos.php'" title="Sobre nós">Sobre nós</a>
				</li>
				<li>
					<a href="#Contato" onclick="location.href='../../contato.php'" title="Contato">Contato</a>
				</li> <!--/li -->
			</ul> <!--/ul -->
		</nav> <!-- /nav-->
	</header> <!-- /HEADER-->
	<div class="jumbotron">
		<br>
		<div class="container">
			<h2>Editando dados futuro parceiro<?php echo "$razao_social"; ?> como parceira</h2>
		</div> <!--/container -->
	</div> <!--jumbotron -->
  <article class="container">
  	<form name="form1" method="post" action="edita_futuro_parceiro.php">
  		<table border="0">
  			<tr>
  				<td>Name</td>
  				<td><input type="text" name="NOME_EMPRESA" value="<?php echo $nome_empresa;?>"></td>
  			</tr>
  			<tr>
  				<td>E-mail</td>
  				<td><input type="text" name="EMAIL_EMPRESA" value="<?php echo $email;?>"></td>
  			</tr>
  			<tr>
  				<td>Nome contato</td>
  				<td><input type="text" name="NOME_CONTATO" value="<?php echo $nome_contato;?>"></td>
  			</tr>
  			<tr>
  				<td>Motivo contato</td>
  				<td><input type="text" name="MOTIVO_CONTATO" value="<?php echo $motivo_contato;?>"></td>
  			</tr>
  			<tr>
  				<td><input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>></td>
  				<td><input type="submit" name="update" value="Update"></td>
  			</tr>
  		</table>
  	</form>
  </article>
  <footer class="footer">
    <hr>
    <div class="container">
      <p class="text-muted">&copy; 2017 Trabalhe Conosco todos os direitos reservados</p>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script href="js/jquery.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script href="js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
