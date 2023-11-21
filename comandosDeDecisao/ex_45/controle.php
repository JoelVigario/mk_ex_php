<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['gen'] = filter_input(INPUT_POST, 'gen');
        if ($_SESSION['gen'] === 'M') {
            $_SESSION['res'] = 'Seja bem-vindo, Senhor';
        } else {
            $_SESSION['res'] = 'Seja bem-vinda, Senhora';
        }
        header('Location: index.php');
        exit();
    }