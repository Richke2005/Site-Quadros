
<?php

class Conexao
{
	private static $instancia;

	public static function getConexao()
	{
		if(!isset(self::$instancia)){
			self::$instancia = new PDO('mysql:host=localhost:3306;dbname=vendas; charset=utf8', 'root','root');
			return self::$instancia;
		}else{
			return self::$instancia;
		}	
	}
}


	$servidor = "localhost:3306";
	$usuario = "root";
	$senha = "root";
	$dbname = "vendas";
	
	//Criar a conexao
	$con = mysqli_connect($servidor, $usuario, $senha, $dbname);


?>