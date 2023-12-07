<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION["user_type"]) != 1){
    header("Location: login.php");
}
?>