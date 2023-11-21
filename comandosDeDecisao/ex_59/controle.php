<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['n1'] = filter_input(INPUT_POST, 'n1');
        $_SESSION['n2'] = filter_input(INPUT_POST, 'n2');
        $_SESSION['operação'] = filter_input(INPUT_POST, 'operacao', FILTER_VALIDATE_INT);
        
        switch ($_SESSION['operação']) {
            case 1:
                $_SESSION['res'] = $_SESSION['n1'] + $_SESSION['n2'];
                break;
            case 2:
                $_SESSION['res'] = $_SESSION['n1'] - $_SESSION['n2'];
                break;
            case 3:
                $_SESSION['res'] = $_SESSION['n1'] * $_SESSION['n2'];
                break;
            case 4:
                $_SESSION['res'] = $_SESSION['n2'] == 0 ? 'Infinito' : $_SESSION['n1'] / $_SESSION['n2'];
        }
        
        header('Location: index.php');
        exit();
        
    }