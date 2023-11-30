<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION["cpf"])){
    header("Location: login.php");
}
?>
 