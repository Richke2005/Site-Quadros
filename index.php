<?php
require 'vendor/autoload.php';


use \App\Session\User as SessionUser;
 SessionUser::isLogged()


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="Css/pages.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="Assets/Logo pequeno.jpg" type="image/x-icon" />
        <title>www.HildaQuadros.com.br</title>
</head>

<body>
    <header>
        <nav>
         <a class="logo" href="index.html"><img src="Assets/Logo quadros.png" alt="Logo site"></a>
         <ul class="nav-list">
           <li><a href="">Início</a></li>
           <li><a href="Pages/admin.php">ADM</a></li>
           <li><a href="Pages/Produtos.html">Produtos</a></li>
           <li><a href="">Avaliação</a></li>
         </ul>
        </nav>
         </header>
    <main>
    
    </main>
    <div class="body-page">
      <h1 class="h1-index"> Bem vindo! </h1>
      <!-- <div class="container">
        <div class="header">
          
        </div>
          <div class="text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Cum laborum dolor molestias repellat quasi. Ea ullam esse laboriosam aut 
        repellendus deserunt blanditiis voluptatem, enim molestias tempore distinctio sint
         alias officia?</p>
           <br>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minus illum nihil molestias exercitationem tempora deleniti eius perferendis. Perspiciatis, voluptatem! Maiores aperiam ipsum voluptatum corrupti totam vel fugit, aliquid error.</p>
          </div>
      <div class="container-R">
        <img src="Assets/Logo quadros.png" alt="">
      </div>
    </div> -->
  </div>
<!-- separação de pag -->
  <div class="body-page2">
    <!-- <div class="container">
      <div class="header">
      </div>
        <div class="text">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Cum laborum dolor molestias repellat quasi. Ea ullam esse laboriosam aut 
      repellendus deserunt blanditiis voluptatem, enim molestias tempore distinctio sint
       alias officia?</p>
         <br>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minus illum nihil molestias exercitationem tempora deleniti eius perferendis. Perspiciatis, voluptatem! Maiores aperiam ipsum voluptatum corrupti totam vel fugit, aliquid error.</p>
        </div>
    <div class="container-R">
      <img src="Assets/Logo quadros.png" alt="">
    </div>
  </div> -->
</div>
</body>
</html>