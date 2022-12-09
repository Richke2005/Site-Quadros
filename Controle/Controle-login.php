<?php
session_start();

if(isset($_POST['Nome']) && isset($_POST['Email']) && !empty([$_POST['Senha']])){

include_once ('../Conexao/conexao.php');
require '../DAO/adm.DAO.php';

$adm = new admDAO;

$nome   = $_POST['Nome'];
$email  = $_POST['Email'];
$senha  = $_POST['Senha'];

if($adm->login($nome, $email, $senha)==true){
    if(isset($_SESSION['codadmin'])){
        $_SESSION['Nome']  = $nome;
        $_SESSION['Email'] = $email;
        $_SESSION['Senha'] = $senha;
        header('location: ../index.html');
    }
}else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
   /* header('location: ../erro.php');*/
   $_SESSION['menssagem'] ='<h1>Falha no cadastro,</h1><br><p>E-mail ou senha incorretos</p>';
   echo $_SESSION['menssagem'];

}
}


?>