<?php
    include('app/database.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficial Telecall</title>
    <!-- Fonts API -->
    <script src="https://kit.fontawesome.com/4713c304f5.js" crossorigin="anonymous"></script>
    <!-- Fonts API -->
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..46,100..700,0..1,-50..200" />
    <!-- Google Icons -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="nav">
        <div class="nav-container">
            <a href="index.php"><img src="assets/img/logo-head.png" alt="" width="175px"></a>
            <ul class="nav-options">
                <a href="" class="medium-16-blue effect-1"><li>Internet</li></a>
                <a href="" class="medium-16-blue effect-1"><li>Telefonia</li></a>
                <a href="" class="medium-16-blue effect-1"><li>Móvel</li></a>
                <a href="" class="medium-16-blue effect-1"><li>Redes</li></a>
            </ul>
        </div>
        <div class="nav-left">
            <a href="assets/pages/login.php" class="nav-area"><button class="nav-button"><i class="fa-solid fa-user"></i><p>Area do Cliente</p></button></a>
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
        <div class="index-main-content">
            <h1 class="hight-72-white" style="text-shadow: 1px 3px 7px rgba(0,0,0,0.68);">T E L E C A L L</h1>
        </div>
        <div class="index-main-letters">
            <p class="medium-12-white index-main-p">A solução completa você encontra aqui</p>
        </div>
        <div class="index-main-button">
            <a href=""><button class="index-main-btn">SAIBA MAIS<span></span><span></span><span></span><span></span></button></a>
        </div>
        <div class="main-img"></div>
    </main>


    <!-- ELEIÇOES -->
    <section class="index-informations-container">
        <div class="index-informations-all">
            <div class="index-informations-itens">
                <h1 class="big-white-kdam-120">+</h1>
                <div>
                    <h3 class="big-white-kdam-42">20 ANOS</h3>
                    <p class="big-white-kdam-32" style="margin-top: -20px;">NO MERCADO</p>
                </div>
            </div>

            <div class="index-informations-itens">
                <h1 class="big-white-kdam-120">+</h1>
                <div>
                    <h3 class="big-white-kdam-42">3 PAÍSES</h3>
                    <p class="big-white-kdam-32" style="margin-top: -20px;">PRESENTE</p>
                </div>
            </div>

            <div class="index-informations-itens">
                <h1 class="big-white-kdam-120">+</h1>
                <div>
                    <h3 class="big-white-kdam-42">5000</h3>
                    <p class="big-white-kdam-32" style="margin-top: -20px;">CLIENTES</p>
                </div>
            </div>

            <div class="index-informations-itens">
                <h1 class="big-white-kdam-120">+</h1>
                <div>
                    <h3 class="big-white-kdam-42">5</h3>
                    <p class="big-white-kdam-32" style="margin-top: -20px;">PREMIAÇÕES</p>
                </div>
            </div>
        </div>
    </section>


    <!-- SOLUÇÕES -->
    <section>
        <div class="solutions-all">
            <h1 class="hight-52-black solution-h1">Soluções</h1>
            <p class="small-17-grey">Aqui você encontra as melhores soluções do mercado</p>
        </div>
        <br>
        <br>
        <br>
        <div class="cards-container">
            <a class="card1" href="#">
                <h3 style="align-items: center;" class="black-normal-20"><i class="fa fa-globe" style="color: #CA1C2A"></i>  Internet</h3>
                <br>
                <br>
                <p class="medium-black-thin-15">Os melhores planos de conexão você só encontra com a gente.</p>
                <br>
                <br>
                <button class="index-button small-12-white">Saiba Mais</button>
                <div class="go-corner" href="#">
                    <div class="go-arrow">
                        →
                    </div>
                </div>
            </a>

            <a class="card1" href="#">
                <h3 style="align-items: center;" class="black-normal-20"><i class="fa fa-phone" style="color: #CA1C2A"></i>  Telefonia</h3>
                <br>
                <br>
                <p class="medium-black-thin-15">Melhore o desempenho da sua empresa com nossa telefonia.</p>
                <br>
                <br>
                <button class="index-button small-12-white">Saiba Mais</button>
                <div class="go-corner" href="#">
                    <div class="go-arrow">
                        →
                    </div>
                </div>
            </a>

            <a class="card1" href="#">
            <h3 style="align-items: center;" class="black-normal-20"><i class="fa-solid fa-mobile" style="color: #CA1C2A"></i>  Rede Móvel</h3>
                <br>
                <br>
                <p class="medium-black-thin-15">Conheça nossos serviços móveis para você se conectar o tempo todo.</p>
                <br>
                <br>
                <button class="index-button small-12-white">Saiba Mais</button>
                <div class="go-corner" href="#">
                    <div class="go-arrow">
                        →
                    </div>
                </div>
            </a>

            <a class="card1" href="#">
            <h3 style="align-items: center;" class="black-normal-20"><i class="fa fa-database" style="color: #CA1C2A"></i>  Proteção de Dados</h3>
                <br>
                <br>
                <p class="medium-black-thin-15">Proteção nunca é demais, deixe-nos cuidar disso para você.</p>
                <br>
                <br>
                <button class="index-button small-12-white">Saiba Mais</button>
                <div class="go-corner" href="#">
                    <div class="go-arrow">
                        →
                    </div>
                </div>
            </a>


        </div>

    </section>

    <!-- CONTATO -->
    <section class="contact-container">

        <div class="contact-title" id="contato">
        <h1 class="black-normal-40">Entre em <span class="blue-normal-40">Contato</span></h1>
        </div>
        <div class="contact-container-d">

        <div class="contact-form-c">
            <h1 class="black-normal-30">Fale Conosco</h1>
            <br />
            <br />
            <p class="contact-p-area contact-form-p">
            Para qualquer informação, dúvida ou comentário:
            </p>
            <p class="contact-form-p">(13) 3223-1224</p>
            <span class="contact-line"></span>

            <form class="contact-form-all">
            <h2 class="black-normal-20">Nome:</h2>
            <input type="text" class="input-large" required/>

            <h2 class="black-normal-20">Telefone:</h2>
            <input type="text" class="input-large" required/>

            <h2 class="black-normal-20">Mensagem:</h2>
            <textarea name="Message" class="textarea" required style="resize: none; padding: 10px" placeholder="Descreva sua requisição"></textarea>
            <br>
            <button class="contact-button">Enviar</button>
            </form>
        </div>

        <div class="contact-escritorios">
            <h1 class="black-normal-30">Escritório</h1>
            <br>
            <div>
            <h2 class="black-normal-20">Brasil</h2>
            <p class="contact-form-p">Centro empresarial Mario Henrique Simonsen<br>
                Av. das Américas, 3434 | Bloco 1, Sala 505<br>
                Barra da Tijuca | Rio de Janeiro, RJ</p>
            <br>
            <h2 class="black-normal-20">Portugal</h2>
            <p class="contact-form-p">Avenida da Liberdade nº 245, 4º piso, sala 402 <br>
                Lisboa, Portugal 1250-143<br></p>
            <br>
            <h2 class="black-normal-20">Estados Unidos</h2>
            <p class="contact-form-p">848 Brickell Av – Suite 1235 | Miami, Florida, USA – 33131</p>
            <br>
            <h2 class="black-normal-20">Inglaterra</h2>
            <p class="contact-form-p">8 Devonshire Squae, Londom EC2M 4YJ</p>
            <br>
            <h2 class="black-normal-20">Contatos</h2>
            <p class="contact-form-p">Email: suporte@telecall.com</p>
            <p class="contact-form-p">Tel: (21) 3030-1010</p>
            <br>
            <h2 class="black-normal-20">Carreiras</h2>
            <p class="contact-form-p"><a href="https://carreirastelecall.solides.jobs" target="_blank">Clique aqui</a> para ver as vagas disponíveis</p>
            </div>
            </div>
        </div>
    </section>

    <footer class="footer">

        <div class="footer-head">

            <img src="assets/img/logo-head.png" alt="Logo" class="footer-img">

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


    <script src="script.js"></script>
</body>

</html>