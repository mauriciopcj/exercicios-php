<?php
    require_once('../database/database.php');
    $banco = new Database();
    $senha = $banco->readByNameUser($_POST['login']);
    // var_dump($senha);

    if (hash('sha256', $_POST['senha']) == $senha['password']) {
        session_start();
        $_SESSION['logado'] = true;
        header('location:../home.php');
    } else {
        header('location:../index.html');
    }
?>