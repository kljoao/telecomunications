<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telecall - Consulta de Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="css/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />

<style>
    .login-logo{
    margin-top: 15px;
    margin-left: 3px;
    max-width: 15%;
}
</style>

</head>

<body id="pageswitch">
    <header class="login-logo">
        <section>
            <img
                class="" src="../img/logo-head.png" alt="telecall-logo" 
                />
        </section>
    </header>
    <main class="p-5">
        <h1 class="text-2xl font-bold mb-4">Lista de Clientes</h1>
        <input type="text" placeholder="Insira o nome desejado"
            class="w-full rounded-md p-2 border border-gray-300 mb-4 focus:outline-none focus:border-primary">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-md shadow-lg">
                <tbody>
                    <thead>
                        <tr>
                            <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CPF</th>

                            <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>

                            <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sexo</th>

                            <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data de Nascimento</th>

                            <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome da Mãe</th>

                            <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telefone</th>

                        </tr>
                    </thead>
                 </tbody>
                    <?php
                    include("../../app/database.php");

                    //consultando o banco de dados
                    $result_usuario = "SELECT * FROM telecall.usuarios ORDER BY cpf DESC";
                    $resultado_usuario = mysqli_query($mysqli, $result_usuario);

                    //verificar se encontrou o resultado na tabela "usuarios"
                    if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
                        while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
                            ?>
                            <tr>
                                <th class="text-left"><?php echo $row_usuario['cpf']?></th>
                                <td><?php echo $row_usuario['nome']?></td>
                                <td><?php echo $row_usuario['sexo']?></td>
                                <td class="px-10"><?php echo $row_usuario['nascimento']?></td>
                                <td><?php echo $row_usuario['nome_materno']?></td>
                                <td><?php echo $row_usuario['celular']?></td>
                            </tr>
                            <?php
                        }
                    }else{
                        echo "Nenhum usuário encontrado";
                    }
                    ?>
            </table>
        </div>
    </main>
<script> 
    $(document).ready(function () {
        $.post('listar_usuario.php', function(retorna) {
            $("#conteudo").html(retorna); 
        })

    })
</script>
</body>
</html>