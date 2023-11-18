<?php 

    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['salB'] = filter_input(INPUT_POST, 'sal', FILTER_VALIDATE_FLOAT);
        $_SESSION['sal'] = $_SESSION['salB'] - ($_SESSION['salB'] * 10) / 100;
        $_SESSION['sal'] -= ($_SESSION['salB'] * 5) / 100;
        header('Location: index.php');
        exit();
    }
