<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['n1'] = filter_input(INPUT_POST, 'n1');
        $_SESSION['n2'] = filter_input(INPUT_POST, 'n2');
        $_SESSION['res'] = $_SESSION['n1'] == $_SESSION['n2'] ? 'Igual a' : 'Diferente de';
        header('Location: index.php');
        exit();
    }