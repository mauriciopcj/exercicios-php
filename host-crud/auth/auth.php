<?php
    if ($_POST['login'] == 'mauricio' && 
    hash('sha256', $_POST['senha']) == '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5') {
        session_start();
        $_SESSION['logado'] = true;
        header('location:../home.php');
    } else {
        header('location:../index.html');
    }
?>