<?php
    include('../../app/database.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficial Telecall</title>
    <!-- Fonts API -->
    <script src="https://kit.fontawesome.com/4713c304f5.js" crossorigin="anonymous"></script>
    <!-- Fonts API -->
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..46,100..700,0..1,-50..200" />
    <!-- Google Icons -->
    <link rel="stylesheet" href="../../style.css">
</head>
<body id="login-body">

<?php
session_start(); // Inicia uma nova sessão ou retoma a sessão existente

if(isset($_SESSION['login_usuario'])){
    header('Location: usuario.php');
    exit();
}

if(isset($_POST['loginValid'])){
    $login = $_POST['login-input'];
    $senha = $_POST['senha-input'];

    // Proteção contra injeção de SQL
    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE login_usuario = ?");
    $stmt->bind_param("s", $login);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            // O usuário existe, agora vamos verificar a senha
            $row = $result->fetch_assoc();
            if (password_verify($senha, $row['senha'])) {
                // A senha está correta
                $_SESSION['login_usuario'] = $login; // Armazena o 'login_usuario' na sessão
                header("location: verify.php");
                exit;
            } else {
                // A senha está incorreta
                $error = '<script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Login ou senha inválidos.",
                });
                </script>';
            }
        } else {
            // O usuário não existe
            $error = '<script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Login ou senha inválidos.",
            });
            </script>';
        }
    } else {
        // A consulta falhou
        echo "Erro na consulta: " . $mysqli->error;
    }
}
?>


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
                <a href="assets/pages/register.php" class="nav-area"><button class="nav-button"><i class="fa-solid fa-user"></i><p>Area do Cliente</p></button></a>
                <div class="nav-contact">
                <span class="material-symbols-outlined" style="color: grey; font-size: 35px;">headset_mic</span>
                    <div>
                        <p class="small-12-grey">Fale com o nosso time</p>
                        <p class="medium-16-blue">(21) xxxxx-xxxx</p>
                    </div>
                </div>
            </div>
        </nav>
    <br>
    <br>
    <br>

    <div id="login-content">
        <form method="POST" action="">
            <img id="login-logo" src="../img/logo-head.png" alt="Logo da empresa"><br><br>
            <input type="text" id="login-input" name="login-input" placeholder="Login"><br><br>
            <input type="password" id="senha-input" name="senha-input" placeholder="Senha"><br><br>
            <a href="#" id="lost-key">Esqueceu sua senha?</a><br><br>
            <input id="login-btn" type="submit" name="loginValid" value="Entrar"><br><br>
            <a href="register.php" id="register-page">Ainda não é cadastrado? Clique aqui para se cadastrar</a>
        </form>
    </div>
</body>
</html>

</body>
</html>