<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['data'] = filter_input(INPUT_POST, 'data');
        $dia = substr($_SESSION['data'], 0, 2);
        $mes = substr($_SESSION['data'], 2, 2);
        $ano = substr($_SESSION['data'], 4, 2);
        $_SESSION['dataF'] = "$ano$mes$dia";
        header('Location: index.php');
        exit();
    }
