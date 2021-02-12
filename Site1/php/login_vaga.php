<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Meta Tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Icone Barra de endereço-->
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "../img/hdcagency_logo.svg"/>

  <!--Title-->
  <title>Login | hDC Agency</title>

  <!--CSS-->
  <link rel="stylesheet" href="../css/login_vaga.css">

</head>
<body>  
<div id="main-container">
    <h1>Login</h1>
    <form id="register-form" action="login_confirmation.php" method="POST">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email_login" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate autocomplete="off" required>
      </div>
      <div class="full-box ">
        <label for="senha">Senha</label>
        <input type="password" name="senha_login" id="password" placeholder="Digite sua senha" data-password-validate data-required autocomplete="off" required minlength="8">
      </div>
      <div class="half-box spacing">
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Lembrar minha senha</label>
      </div>
      <div class="half-box spacing">
        <label for="agreement" id="agreement-label"><a href="#">Esqueci minha senha</a></label>
      </div>
      <div class="full-box">
        <label for="cadastro" id="cadastro"><a href="candidatar_vaga.php">Quero me Cadastrar</a></label>
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Entrar">
      </div>
    </form>
    
  </div>
  <p class="error-validation template"></p>
 
</body>
</html>