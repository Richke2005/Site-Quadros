<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../Css/catálogo.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../Assets/Logo pequeno.jpg" type="image/x-icon" />
        <title>www.HildaQuadros.com.br</title>
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

    <div class="slider">

      <div class="slides">
        <!-- slide button -->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!-- slide button -->

        <div class="slide first">
         <a href="../login/login_adm.php"><img src="../Assets/Imagem quadros.jpg" alt="img1 " ></a>
        </div>

        <div class="slide">
         <a href="../login/login_adm.php"><img src="../Assets/Imagem quadros_adobe_express.svg" alt="img2"></a>
        </div>

       <div class="slide">
        <a href=""><img src="../Assets/Vicio cel3.jpg" alt="img3"></a>
       </div>

       <div class="slide">
        <a href=""><img src="../Assets/Vicio cel3.jpg" alt="img4"></a>
       </div>
<!-- fim slides -->

<!-- navigation auto -->

         <div class="navigation-auto">

            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>

           
         </div>


      </div>

      <div class="manual-navigation">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
    
    </div>
    <script src="../Js/Script.js"></script>
  </div>
    <!-- separação de pag ========================================= -->
    <div class="body-page">
           <h1>Nossos produtos</h1>
        <div class="container2">
            <a href="1-foto.php"><img src="../Assets/Imagem quadros.jpg" alt="">1 foto</a>
            <a href="2-foto.php"><img src="../Assets/Imagem quadros.jpg" alt="">2 fotos</a>
            <a href="3-foto.php"><img src="../Assets/Imagem quadros.jpg" alt="">3 fotos</a>
            <a href="4-foto.php"><img src="../Assets/Imagem quadros.jpg" alt="">4 fotos</a>
            <a href="5-foto.php"><img src="../Assets/Imagem quadros.jpg" alt="">5 fotos</a>

            <form action="../Controle/Controle.Pedidos.php" method="post">
            <select name="quadros" class="form-select" aria-label="Default select example">
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
            </select>
            <button type="submit" class="button">Enviar</button>
            </form>
        <!-- container-R-->
      </div>
    </div>
  
</body>
</html>