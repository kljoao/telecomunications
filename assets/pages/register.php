<?php
    include('../../app/database.php');
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

<?php
    if(isset($_POST['cadastroSubmit'])){
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $nome_materno = $_POST['materno'];
        $celular = $_POST['phone'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $casa_numero = $_POST['numero'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $login = $_POST['login'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografando a senha
        $nascimento = $_POST['nascimento'];

        $celular = preg_replace('/[^0-9\+]/', '', $_POST['phone']);
        $cpf = preg_replace('/[^0-9\+]/', '', $_POST['cpf']);
        $cep = preg_replace('/[^0-9\+]/', '', $_POST['cep']);


        // Verificação de CPF Primary Key
        $verifyCpf = $mysqli->prepare("SELECT * FROM usuarios WHERE cpf = ?");
        $verifyCpf->bind_param("s", $cpf);
        $verifyCpf->execute();
        $CpfResult = $verifyCpf->get_result();
        // Verificação de CPF Primary Key

        if(empty($nome) || empty($sexo) || empty($cpf) || empty($nome_materno) || empty($celular) || empty($cep) || empty($rua) || empty($bairro) || empty($casa_numero) || empty($cidade) || empty($estado) || empty($login) || empty($senha) || empty($nascimento)){
            echo '<script>
              Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Verifique os campos e tente novamente.",
                });
                </script>';
        } 
        elseif($CpfResult->num_rows > 0){
            echo '<script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Este CPF já foi cadastrado.",
            });
        </script>';
        }
        else {
            $stmt = $mysqli->prepare("INSERT INTO usuarios(nome,sexo,cpf,nome_materno,celular,cep,rua,bairro,casa_numero,cidade,estado,login_usuario,senha,nascimento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssssssssss", $nome, $sexo, $cpf, $nome_materno, $celular, $cep, $rua, $bairro, $casa_numero, $cidade, $estado, $login, $senha, $nascimento);

            if($stmt->execute()){
                echo '<script>
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Usuário cadastrado.",
                    showConfirmButton: false,
                    timer: 1500
                  });
                </script>';
            } else {
                echo "Erro: " . $stmt->error;
            }
        }
    }
?>

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

            <form method="POST" action="" class="register-container">
                <section class="register-display">
                    <div>
                        <p id="nome-attention">Nome Inválido.</p>
                        <label for="" class="text-label">
                            <i class="fa-solid fa-user" id="nome-icon"></i>
                            <input type="text" placeholder="Nome Completo**" class="long-input" id="name" minlength="15" maxlength="80" name="nome">
                        </label>
                    </div>

                    <div>
                        <p id="cpf-attention">CPF Inválido.</p>
                        <label for="" class="short-text-label">
                            <i class="fa fa-id-badge" id="cpf-icon"></i>
                            <input type="text" placeholder="CPF**" class="short-input" id="cpf" minlength="14" maxlength="14" name="cpf">
                        </label>
                    </div>

                    <div>
                        <p id="sexo-attention">Defina um sexo.</p>
                        <label for="" class="short-text-label">
                            <i class="fa-solid fa-person-half-dress" id="sexo-icon"></i>
                            <select id="" class="sex-selection" name="sexo">
                                <option value="" disabled selected>Defina Seu Sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Trasgenero">Transgênero</option>
                                <option value="NaoBinario">Não-binário</option>
                                <option value="Outros">Outros</option>
                                <option value="PNR">Prefiro não responder</option>
                            </select>
                        </label>
                    </div>
                </section>
                <br>
                <section class="register-display">
                    <div>
                        <p id="materno-attention">Nome Inválido.</p>
                        <label for="" class="text-label">
                            <i class="fa-solid fa-person-breastfeeding" id="materno-icon"></i>
                            <input type="text" placeholder="Nome Materno**" class="long-input" minlength="15" maxlength="80" id="nomeMaternoInput" name="materno">
                        </label>
                    </div>

                    <div>
                        <p id="number-attention">Número inválido.</p>
                        <label for="" class="short-text-label">
                            <input type="text" class="number-input" minlength="10" maxlength="80" id="phone" name="phone">
                        </label>
                    </div>

                    <div>
                        <p id="data-attention">Data inválida.</p>
                        <label for="" class="most-short-text-label">
                            <i class="fa fa-calendar-days" id="data-icon"></i>
                            <input type="text" class="ushort-input" maxlength="80" id="birthdate" placeholder="Nascimento" name="nascimento">
                        </label>
                    </div>
                </section>
                <br>
                <section class="register-display">
                    <div>
                        <p id="cep-attention">CEP Inválido.</p>
                        <label for="" class="short-text-label">
                        <i class="fa-solid fa-location-dot" id="cep-icon"></i>
                            <input type="text" placeholder="CEP**" class="short-input" id="cep" minlength="8" maxlength="8" name="cep">
                        </label>
                    </div>

                    <div>
                        <p id="cep-attention">JAPH</p>
                        <label for="" class="block-text-label">
                            <i class="fa-solid fa-road" id="rua-icon"></i>
                            <input type="text" placeholder="Rua**" class="block-input" maxlength="80" id="rua" name="rua" readonly>
                        </label>
                    </div>
                    
                    <div>
                        <p id="cep-attention">JAPH</p>
                        <label for="" class="block-text-medium-label">
                            <i class="fa-solid fa-city" id="bairro-icon"></i>
                            <input type="text" placeholder="Bairro**" class="block-medium-input" maxlength="80" id="bairro" name="bairro" readonly>
                        </label>
                    </div>
                </section>
                <br>
                <section class="register-display">
                    <div>
                        <p id="numero-attention">Número Inválido.</p>
                        <label for="" class="most-short-text-label">
                            <i class="fa-solid fa-house" id="numero-icon"></i>
                            <input type="text" class="ushort-input" maxlength="80" id="numero" placeholder="Nú da casa**" name="numero">
                        </label>
                    </div>
                    <div>
                        <p id="cep-attention">JAPH</p>
                        <label for="" class="block-text-medium-label">
                            <i class="fa-solid fa-city" id="cidade-icon"></i>
                            <input type="text" placeholder="Cidade**" class="block-medium-input" maxlength="80" id="cidade" name="cidade" readonly>
                        </label>
                    </div>
                    <div>
                        <p id="cep-attention">JAPH</p>
                        <label for="" class="block-text-medium-label">
                            <i class="fa-solid fa-city" id="estado-icon"></i>
                            <input type="text" placeholder="Estado**" class="block-medium-input" maxlength="80" id="estado" name="estado" readonly>
                        </label>
                    </div>
                </section>
                <br>
                <br>
                <br>
                <br>
                <hr>    
                <br>
                <section class="register-display">
                    <div>
                        <p id="cep-attention">Login Inválido.</p>
                        <label for="" class="short-text-label">
                        <i class="fa-solid fa-right-to-bracket" id="cep-icon"></i>
                            <input type="text" placeholder="Defina um login**" class="short-input" id="login" minlength="8" maxlength="14" name="login">
                        </label>
                    </div>
                </section>
                <br>
                <section class="register-display">
                    <div>
                        <p id="senha-attention">Senha Inválida.</p>
                        <label for="" class="short-text-label">
                        <i class="fa-solid fa-lock" id="senha-icon"></i>
                            <input type="password" placeholder="Defina uma senha**" class="short-input" id="senha" minlength="8" maxlength="14" name="senha" onkeyup="validarSenha(this)">
                        </label>
                    </div>

                    <div>
                        <p id="confirmaSenha-attention">Senhas não conferem.</p>
                        <label for="" class="short-text-label">
                        <i class="fa-solid fa-location-dot" id="confirmaSenha-icon"></i>
                            <input type="password" placeholder="Confirme sua senha**" class="short-input" id="confirmaSenha" minlength="8" maxlength="14" onkeyup="validarConfirmaSenha()">
                        </label>
                    </div>
                </section>
                <br><br>
                <div class="register-buttons">
                    <input type="submit" class="cadastroBtn small-12-white" name="cadastroSubmit" value="Cadastrar">
                    <input type="reset" class="limparBtn small-12-white" name="cadastroLimpar" value="Limpar">
                </div>
            </form>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../script/register.js"></script>
</body>

</html>