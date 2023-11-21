<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
         $_SESSION['num'] = filter_input(INPUT_POST, 'num', FILTER_VALIDATE_INT);
         $_SESSION['res'] = $_SESSION['num'] === 0 ? 'É Zero' : 'Não é Zero';
        header('Location: index.php');
        exit();
    }