<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['sal'] = filter_input(INPUT_POST, 'sal');
        if ($_SESSION['sal'] <= 23500) {
            $_SESSION['res'] = "Até 1 salário mínimo";
        } elseif ($_SESSION['sal'] <= 70500) {
            $_SESSION['res'] = "Até 3 salário mínimo";
        } elseif ($_SESSION['sal'] <= 117500) {
            $_SESSION['res'] = "Até 5 salário mínimo";
        } else {
            $_SESSION['res'] = "Acima de 5 salários mínimo";
        }
        header('Location: index.php');
        exit();
        
    }