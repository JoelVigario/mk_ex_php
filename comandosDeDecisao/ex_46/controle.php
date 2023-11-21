<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['ec'] = filter_input(INPUT_POST, 'ec');
        switch ($_SESSION['ec']) {
            case 'S':
                $_SESSION['res'] = 'Solteiro(a)';
                break;
            case 'C':
                $_SESSION['res'] = 'Casado(a)';
                break;
            case 'U':
                $_SESSION['res'] = 'União de Facto(a)';
        }
        header('Location: index.php');
        exit();
    }