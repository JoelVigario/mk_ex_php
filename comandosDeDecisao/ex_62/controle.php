<?php

session_start();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
    $_SESSION['ano'] = filter_input(INPUT_POST, 'ano');
   
     if (($_SESSION['ano'] % 400 == 0) || ($_SESSION['ano'] % 4 == 0 && $_SESSION['ano'] % 100 != 0)) {
        $_SESSION['res'] =  'é Bissexto';
    } else {
        $_SESSION['res'] =  'não é Bissexto';
    }
    
    header('Location: index.php');
    exit();
}