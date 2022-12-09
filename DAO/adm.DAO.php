<?php
include_once ("../conexao/conexao.php");

class admDAO
{
    private $nome;
    private $email;
	private $senha;


    
    //getters an setters=======================================
    public function setnome($nome){
        $this->nome = $nome;
    }

    public function getnome(){
        return $this->nome;

    }
    //========================================================

	public function setemail($email){
		$this->email= $email;
	}

    public function getemail(){
		return $this->email;
	}

    //=======================================================
    public function setsenha($senha){
        $this->senha = $senha;
    }

    public function getsenha(){
        return $this->senha;

    }

    //métodos==========================================================
    public function login($nome, $email, $senha){
        $bd = new Conexao(); //class conexão agr é $bd
		$con = $bd->getConexao();

        $sql= "SELECT * FROM ADM WHERE nome = :nome AND email = :email AND senha = :senha";
        $stm = $con->prepare($sql);
        $stm->bindValue("nome",  $nome);
        $stm->bindValue("email", $email);
        $stm->bindValue("senha", $senha);
        $stm->execute();

        if($stm->rowCount()>0){
            $dado = $stm->fetch();

            $_SESSION['codadmin'] = $dado;
            return true;
        }else{
            return false;
        }

    }
    

}

?>