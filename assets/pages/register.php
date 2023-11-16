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
</head>

<body>

    <nav class="nav">
        <div class="nav-container">
            <a href="index.php"><img src="../img/logo-head.png" alt="" width="175px"></a>
            <ul class="nav-options">
                <a href="" class="medium-16-blue effect-1"><li>Internet</li></a>
                <a href="" class="medium-16-blue effect-1"><li>Telefonia</li></a>
                <a href="" class="medium-16-blue effect-1"><li>Móvel</li></a>
                <a href="" class="medium-16-blue effect-1"><li>Redes</li></a>
            </ul>
        </div>
        <div class="nav-left">
            <a href="../../index.php" class="nav-area"><button class="nav-button"><i class="fa-solid fa-user"></i><p>Area do Cliente</p></button></a>
            <div class="nav-contact">
            <span class="material-symbols-outlined" style="color: grey; font-size: 35px;">headset_mic</span>
                <div>
                    <p class="small-12-grey">Fale com o nosso time</p>
                    <p class="medium-16-blue">(21) xxxxx-xxxx</p>
                </div>
            </div>
        </div>
    </nav>



    <main>
        <h1 class="black-normal-40">Crie sua conta Telecall</h1>

        <div class="register-grid">

            <div>
                <section class="register-display-1">
                    <div>
                        <p id="nome-attention">Nome Inválido.</p>
                        <label for="" class="text-label">
                            <i class="fa-solid fa-user" id="nome-icon"></i>
                            <input type="text" placeholder="Nome Completo**" class="long-input" id="name" minlength="15" maxlength="80">
                        </label>
                    </div>

                    <div>
                        <p id="cpf-attention">CPF Inválido.</p>
                        <label for="" class="short-text-label">
                            <i class="fa fa-id-badge" id="cpf-icon"></i>
                            <input type="text" placeholder="CPF**" class="short-input" id="cpf" minlength="14" maxlength="14">
                        </label>
                    </div>
                </section>
                
                <section class="register-display-2">
                    <div>
                        <p id="nome-attention">Nome Inválido.</p>
                        <label for="" class="text-label">
                            <i class="fa-solid fa-user" id="nome-icon"></i>
                            <input type="text" placeholder="Nome Materno**" class="long-input" id="name" minlength="15" maxlength="80">
                        </label>
                    </div>
                </section>
            </div>

            <img src="../img/register.svg" alt="">

        </div>

    </main>




    <footer class="footer">

        <div class="footer-head">

            <img src="../img/logo-head.png" alt="Logo" class="footer-img">

            <div class="footer-head-content">
                <p class="white-normal-21">Inicio</p>
                <p class="white-normal-21">Política de privacidade</p>
                <p class="white-normal-21">Minha Conta</p>
                <p class="white-normal-21">Contato</p>
            </div>

        </div>

        <div class="footer-rights">
            <p>Grupo 8 © Todos os direitos reservados</p>
        </div>

    </footer>


    <script src="../script/register.js"></script>
</body>

</html>