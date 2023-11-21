<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['sal'] = filter_input(INPUT_POST, 'sal');
        
        if ($_SESSION['sal'] < 0) {
            $_SESSION['res'] = "O salário não pode ser negativo";
        } elseif ($_SESSION['sal'] > 1000) {
            $_SESSION['res'] = "10%";
        } else {
            $_SESSION['res'] = "5%";
        }
        header('Location: index.php');
        exit();
        
    }