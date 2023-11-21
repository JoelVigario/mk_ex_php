<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['gen'] = filter_input(INPUT_POST, 'gen');
        
        if ($_SESSION['gen'] === 'F') {
            $_SESSION['res'] = '10%';
        } else {
            $_SESSION['res'] = 10 + 5 . '%';
        }
        header('Location: index.php');
        exit();
        
    }