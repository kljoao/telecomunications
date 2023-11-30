<?php
include('../../app/database.php');
include('../../app/protection.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficial Telecall</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/4713c304f5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..46,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>
<body>


    <nav class="nav">
        <div class="nav-container">
            <a href="../../index.php"><img src="../img/logo-head.png" alt="" width="175px"></a>
            <ul class="nav-options">
                <a href="" class="medium-16-blue effect-1"><li>Internet</li></a>
                <a href="" class="medium-16-blue effect-1"><li>Telefonia</li></a>
                <a href="" class="medium-16-blue effect-1"><li>Móvel</li></a>
                <a href="" class="medium-16-blue effect-1"><li>Redes</li></a>
            </ul>
        </div>
        <div class="nav-left">
            <a href="login.php" class="nav-area"><button class="nav-button"><i class="fa-solid fa-user"></i><p>SAIR</p></button></a>
            <div class="nav-contact">
            <span class="material-symbols-outlined" style="color: grey; font-size: 35px;">headset_mic</span>
                <div>
                    <p class="small-12-grey">Fale com o nosso time</p>
                    <p class="medium-16-blue">(21) xxxxx-xxxx</p>
                </div>
            </div>
        </div>
    </nav>

    <div id="user-content">
        <form>
            <h1 style="text-align: center; font-family: Arial">Dados Cadastrais</h1><br><br>
            <p class="black-normal-20">Nome Completo</p>
            <input type="text" id="user-block-input" name="nomeCompleto" placeholder="<?php echo $_SESSION['nome'] ?>" readonly><br>

            <p class="black-normal-20">CPF</p>
            <input type="password" id="user-block-input" name="senha" placeholder="<?php echo $_SESSION['cpf'] ?>" readonly><br>

            <p class="black-normal-20">Celular Cadastrado</p>
            <input type="password" id="user-block-input" name="senha" placeholder="<?php echo $_SESSION['phone'] ?>" readonly><br>

            <a href="#" id="lost-key">Esqueceu sua senha?</a><br><br>
            <input id="login-btn" type="submit" value="Entrar"><br><br>
        </form>
    </div>
</body>
</html>