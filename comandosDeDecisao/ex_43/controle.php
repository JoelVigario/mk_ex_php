<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['n1'] = filter_input(INPUT_POST, 'n1');
        $_SESSION['n2'] = filter_input(INPUT_POST, 'n2');
        if ($_SESSION['n1'] > $_SESSION['n2']) {
            $_SESSION['res'] = $_SESSION['n1'];
        } elseif ($_SESSION['n1'] < $_SESSION['n2']) {
            $_SESSION['res'] = $_SESSION['n2'];
        } else {
            $_SESSION['res'] = "nenhum";
        }
        header('Location: index.php');
        exit();
    }