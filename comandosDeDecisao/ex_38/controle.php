<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['num'] = filter_input(INPUT_POST, 'num');
        $_SESSION['sinal'] = ($_SESSION['num'] > 0) ? 'Positivo' : 'Negativo';
        header('Location: index.php');
        exit();
    }