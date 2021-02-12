<!DOCTYPE html>
<html lang="pt-br">
<head>

  <!--Meta Tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Icone Barra de endereço-->
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "img/hdcagency_logo.svg"/>

  <!--Title-->
  <title>Cadastrar-se | hDC Agency</title>

  <!--CSS-->
  <link rel="stylesheet" href="../css/candidatar_vaga.css">

</head>
<body>
  <div id="main-container">
    <h1>Cadastrar-se</h1>
    <form id="register-form" action="cadastro_vaga.php" method="POST">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate autocomplete="off" required>
      </div>
      <div class="full-box">
        <label for="name">Nome Completo</label>
        <input type="text" name="name" id="name" placeholder="Digite seu nome completo" data-min-length="2" data-email-validate autocomplete="off" required>
      </div>
      <div class="half-box spacing">
        <label for="senha">Senha</label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha" data-password-validate data-required autocomplete="off" required minlength="8">
      </div>
      <div class="half-box">
        <label for="passconfirmation">Confirmação de senha</label>
        <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Confirme a sua senha" data-equal="password" autocomplete="off" required>
      </div>
      <div class="half-box spacing">
        <label for="github">Github</label>
        <input type="text" name="link_github" id="github" placeholder="Cole aqui o link de seu Github" data-required autocomplete="off">
      </div>
      <div class="half-box">
        <label for="linkedin">Linkedin</label>
        <input type="text" name="link_linkedin" id="linkedin" placeholder="Cole aqui o link de seu linkedin" data-only-letters autocomplete="off">
      </div>
      <div class="full-box">
        <label for="vagas">Se candidatar a vaga de:</label>
        <br>
      </div>
      <div class="half-box spacing">
        <label for="soft_enginner">Soft Enginner</label>
        <input type="checkbox" name="soft_engineer" value="1" id="soft_enginner" autocomplete="off">
      </div>
      <div class="half-box">
        <label for="ui_designer">UI Designer</label>
        <input type="checkbox" name="ui_designer" value="1" id="ui_designer" autocomplete="off">
      </div>
      <div class="half-box spacing">
        <label for="ux_designer">UX Designer</label>
        <input type="checkbox" name="ux_designer" value="1" id="ux_designer" autocomplete="off">
      </div>
      <div class="half-box">
        <label for="project_manager">Project Manager</label>
        <input type="checkbox" name="project_manager" value="1" id="project_manager" autocomplete="off">
      </div>
      <div class="full-box">
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
      </div>
      <div class="full-box">
        <input href="login_vaga.php" id="btn-submit" type="submit" value="Cadastrar-se">
      </div>
    </form>
  </div>
  <p class="error-validation template"></p>
  <script src="js/candidatar_vaga.js"></script>
</body>
</html>