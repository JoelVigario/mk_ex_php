<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['sal'] = filter_input(INPUT_POST, 'sal');
        
        if ($_SESSION['sal'] < 1000) {
            $_SESSION['res']['imp'] = '5%';
            $_SESSION['res']['liq'] = $_SESSION['sal'] - ($_SESSION['sal'] * 5 / 100);
        } elseif ($_SESSION['sal'] < 5000) {
            $_SESSION['res']['imp'] = '11%';
            $_SESSION['res']['liq'] = $_SESSION['sal'] - ($_SESSION['sal'] * 11 / 100);
        } else {
            $_SESSION['res']['imp'] = '35%';
            $_SESSION['res']['liq'] = $_SESSION['sal'] - ($_SESSION['sal'] * 35 / 100);
        }
        header('Location: index.php');
        exit();
        
    }