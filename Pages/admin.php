<?php
require '../vendor/autoload.php';


use \App\Session\User as SessionUser;
 if(SessionUser::isLogged()==false){
     echo $msg = $_SESSION['você não está logado'];
     header('location:login.php');
     
 }

 if (SessionUser::isLogged()){
    $info = \App\Session\User::getInfo();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.Hildaquadros.com.br</title>
</head>
<body>
<h1> Olá, <?php echo $info['name']?> </h1>
 
</body>
</html>


