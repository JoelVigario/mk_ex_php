<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['ec'] = filter_input(INPUT_POST, 'ec');
        
        if ($_SESSION['ec'] == 'casado') {
            $_SESSION['res'] = "9%";
        } else {
            $_SESSION['res'] = "10%";
        }
        
        header('Location: index.php');
        exit();
        
    }