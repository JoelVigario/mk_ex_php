<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['num'] = filter_input(INPUT_POST, 'num');
        $_SESSION['res'] = $_SESSION['num'] % 2 == 0 ? 'Par' : 'Impar';
        header('Location: index.php');
        exit();
    }