<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/login.css" />
    <title>Oficial TeleCall</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Entrar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="E-mail" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Senha" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Registrar</h2>

            <div class="input-field">
              <i class="name-color fas fa-user"></i>
              <input type="text" placeholder="Nome Completo*" minlength="8" maxlength="60" id="name" required/>
            </div>

            <p class="chekCPF">CPF Inválido*</p>
            <div class="input-field">
              <i class="cpf-color fas fa-id-card"></i>
              <input type="text" placeholder="CPF*" id="cpf" minlength="14" maxlength="14" class="corporate-name" required/>
            </div>

            <p class="checkDate">Digite uma data válida*</p>
            <div class="input-field" id="signupForm">
              <i class="dateColor fas fa-calendar"></i>
              <input type="text" required placeholder="Data de Nascimento*" onblur="validarData()" minlength="10" maxlength="10" class="dateInput"/>
            </div>


            <p class="invalidEmail">E-mail inválido*</p>
            <div class="input-field">
              <i class="emailColor fas fa-envelope"></i>
              <input type="text" name="email" placeholder="Email*" onblur="validacaoEmail(email)"  maxlength="60" class="emailInput">
            </div>

            <p class="duoemailcheck">Os e-mails não conferem*</p>
            <div class="input-field">
              <i class="confirmColor fas fa-envelope"></i>
              <input type="email" placeholder="Confirme o Email*" required class="email-confirm"/>
            </div>

            <p class="passwordCheck">Mínimo de 8 dígitos, caracter especial e um <br>número*</p>
            <div class="input-field">
              <i class="passwordColor fas fa-lock"></i>
              <input type="password" name="senha" placeholder="Senha*" required class="password" minlength="8" onblur="validarSenha(senha)"/>
            </div>

            <p class="confirmPasswordCheck">As senhas não conferem</p>
            <div class="input-field">
              <i class="confirmPassColor fas fa-lock"></i>
              <input type="password" name="passwordConfirm" placeholder="Confirme a Senha*" required minlength="8" class="confirmaSenha" onkeyup="validarConfirmaSenha(passwordConfirm)"/>
            </div>

            <input type="submit" class="btn" value="Cadastrar" onclick="cadastro()"/>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <a href="index.html"><img src="img/logo-white.png" alt="" class="logo-img"></a>
            <h3>Novo por aqui?</h3>
            <p>
              Cadastre-se já clicando no botão abaixo. 
              É rápido e simples.
            </p>
            <button class="btn transparent" id="sign-up-btn">Cadastre-se</button>
          </div>
          <img src="../img/cadastro.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <a href="index.html"><img src="img/logo-white.png" alt="" class="logo-img"></a>
            <h3>Já é cadastrado?</h3>
            <p>
              Acesse sua conta fácil e rápido clicando no botão abaixo. 
            </p>
            <button class="btn transparent" id="sign-in-btn">Logar</button>
          </div>
          <img src="../img/login.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="javascript/login.js"></script>
  </body>
</html>