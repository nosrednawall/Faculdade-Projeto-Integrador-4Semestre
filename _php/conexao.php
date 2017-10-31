<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root")
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

/*

include conexao.php;

$php_nomecontatoempresa = $_POST ["NOME_CONTATO"];
$php_emailempresa       = $_POST ["EMAIL_EMPRESA"];
$php_nomeempresa        = $_POST ["NOME_EMPRESA"];
$php_motivocontato      = $_POST ["MOTIVO_CONTATO"];

$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("clientes",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());


*/


$databaseHost = 'localhost';
$databaseName = 'trabalhe-conosco';
$databaseUsername = 'root';
$databasePassword = '123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);



/*

class Banco
{
    private static $dbNome = 'contato';
    private static $dbHost = 'localhost:3306';
    private static $dbUsuario = 'root';
    private static $dbSenha = '123';

    private static $cont = null;

    public function __construct()
    {
        die('A função Init nao é permitido!');
    }

    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha);
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }

    public static function desconectar()
    {
        self::$cont = null;
    }
}
*/
?>
