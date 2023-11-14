<?php

// session_start();
// include("../protections/conection.php");

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $verification_code = $_POST['verification_code'];

//     if ($verification_code == $_SESSION['verification_code']) {
//         // Atualizar o campo verifiedNumber para true
//         $stmt = $mysqli->prepare("UPDATE users SET verifiedNumber = 1 WHERE email = ?");
//         $stmt->bind_param("s", $_SESSION['email']);
//         $stmt->execute();

//         // Redirecionar para a página inicial
//         header("Location: ../indexusertest.php");
//         exit;
//     } else {
//         echo '<script>
//         Swal.fire({
//           icon: "error",
//           title: "Oops...",
//           text: "Wrong verification code! Please, try again.",
//         });
//         </script>';
//     }
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verificação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
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
    <div class="container">
        <h1>Verifique o seu celular.</h1>
        <p>Enviamos para você um código de verificação, por favor, digite abaixo.</p>
        <form action="verify.php" method="post">
            <div class="form-group">
                <label for="verification_code">Código de Verificação</label>
                <input type="text" id="verification_code" name="verification_code" required>
            </div>
            <div class="form-group">
                <button type="submit">Verificar</button>
            </div>
        </form>
    </div>
</body>
</html>
