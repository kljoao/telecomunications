<?php

session_start();

require_once '../../vendor/autoload.php'; // Caminho para o autoload do Composer

use Twilio\Rest\Client;

// Credenciais do Twilio
$account_sid = 'AC44bf65cd9f5fe250dec11dafe304757a';
$auth_token = '51d553227bc1811a4926248be9723608';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../../style.css">
    <script src="https://kit.fontawesome.com/4713c304f5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <style>
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 10px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-group button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Código de verificação inserido pelo usuário
    $userCode = $_POST['verification_code'];

    // Código de verificação armazenado na sessão
    $sessionCode = $_SESSION['verification_code'];

    if (strval($userCode) === strval($sessionCode)) {
        $_SESSION['status'] = 'verificado';
        // Redirecionar para a página 'usuario.php'
        header('Location: usuario.php');
        exit();
    } else {
        echo '<script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Código de verificação incorreto. Tente novamente.",
        });
        </script>';
    }
} else {
    // Número de telefone do usuário
    $phoneNumber = $_SESSION['phone'];

    // Gerar um código de verificação aleatório
    $verificationCode = rand(100000, 999999);

    // Armazenar o código de verificação na sessão
    $_SESSION['verification_code'] = $verificationCode;

    // Inicializar o cliente do Twilio
    $client = new Client($account_sid, $auth_token);

    // Enviar o código de verificação via SMS
    $message = $client->messages->create(
        $phoneNumber,
        array(
            'from' => '+14159407373',
            'body' => "Seu código de verificação é: $verificationCode"
        )
    );
}
?>

    <div class="container">
        <h1>Verifique o seu celular.</h1>
        <p>Enviamos para você um código de verificação, por favor, digite abaixo.</p>
        <form action="" method="POST">
            <div class="form-group">
                <label for="verification_code">Código de Verificação</label>
                <input type="text" id="verification_code" name="verification_code" required>
            </div>
            <div class="form-group">
                <button type="submit" name="verificationSms">Verificar</button>
            </div>
        </form>
    </div>
</body>
</html>