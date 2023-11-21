<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['ordenado'] = filter_input(INPUT_POST, 'ordenado');
        
        if ($_SESSION['ordenado'] > 1000) {
            $_SESSION['res'] = "Ordenado actual: " . $_SESSION['ordenado'] + ($_SESSION['ordenado'] * 5 / 100);
        } else {
            $_SESSION['res'] = "Ordenado actual: " . $_SESSION['ordenado'] + ($_SESSION['ordenado'] * 7 / 100);
        }
        header('Location: index.php');
        exit();
        
    }