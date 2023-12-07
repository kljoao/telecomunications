<?php
session_start();

if ($_SESSION["role"] != "") {
    return;
}
require_once "./app/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST['cpf'];
    $nome = $_SESSION["nome"];
    $data = date('Y-m-d H:i:s');

    $db = new ConnectionDb();
    $con = $db->getCon();

    $query1 = "DELETE FROM telecall.endereco WHERE cpf = '$cpf'";
    $query2 = "DELETE FROM telecall.usuario WHERE cpf = '$cpf'";

    $con->execute_query($query1);
    $con->execute_query($query2);
    if ($con->execute_query($query1)) {
    if ($con->execute_query($query3)) {
        echo "Client deleted successfully.";
                }
            
        }
    }
    {
    $con->execute_query($logQuery);
    $con->commit();
    $con->close();
}