<?php
    if ($_POST['login'] == 'mauricio' && $_POST['senha'] == '12345') {
        session_start();
        $_SESSION['logado'] = true;
        header('location:../home.php');
    } else {
        header('location:../index.html');
    }
?>