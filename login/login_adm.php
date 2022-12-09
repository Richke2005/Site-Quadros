<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../Css/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>www.ChocsNoCAD.com.br</title>
</head>
<body>
 <div class="container">
    <div class="Contain-Header">
      <h1>Bem vindo ao Login</h1>
     </div><!-- Title -->
     <form action="../Controle/Controle-login.php" method="post">
        <label for="nome"><h3>Nome:</h1></label>
        <input type="text" name="Nome" id=""  class="form-control" placeholder="Insira seu nome" ><br><br>
        <label for="email"><h3>Email:</h1></label>
        <input type="email" name="Email" id="" class="form-control" placeholder="Example@gmail.com"><br><br>
        <label for="senha"><h3>Senha:</h1></label>
        <input type="password" name="Senha" id="" class="form-control" placeholder="Insira a senha" required><br><br>

        <button type="submit" class="button">Acessar</button><br><br>
      </form>
 </div><!-- container -->
</body>
</html>