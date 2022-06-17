<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | CodingLab</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Entrar</span></div>
        <form method="POST" action="loginserver.php?">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="nrbi" placeholder="Nr_BI" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="senha" placeholder="Senha" required>
          </div>
          <div class="pass"><a href="recuperarSenha.php?">Esqueceu a senha?</a></div>
          <div class="row button">
            <input type="submit" name="login" value="login">
          </div>
          <div class="signup-link"> <a href="registoPaciente.php?">Registar</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
