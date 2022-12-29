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
    <link rel="stylesheet" href="../Css/pages.css">
    <title>www.Hildaquadros.com.br</title>
</head>
<body>
<header>
        <nav>
         <a class="logo" href="../index.php"><img src="../Assets/Logo quadros.png" alt="Logo site"></a>
         <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
         </div>
         <ul class="nav-list">
           <li><a href="../index.php">Home</a></li>
           <li><a href="Catálogo.php">Catálogo</a></li>
           <li><a href="">Carrinho</a></li>
           <li><a href="Perfil.php">Perfil</a></li>
         </ul>
        </nav>
         </header>

         <script src="../Js/mobile-navbar.js"></script>
<div class="body-page">
<h1> Olá, <?php echo $info['name']?> </h1>
</div>
</body>
</html>


