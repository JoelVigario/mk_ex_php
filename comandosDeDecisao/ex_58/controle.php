<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['num'] = filter_input(INPUT_POST, 'num');
        
        switch ($_SESSION['num']) {
            case 1:
                $_SESSION['res'] = 'Domingo';
                break;
            case 2:
                $_SESSION['res'] = 'Segunda';
                break;
            case 3:
                $_SESSION['res'] = 'Terça';
                break;
            case 4:
                $_SESSION['res'] = 'Quarta';
                break;
            case 5:
                $_SESSION['res'] = 'Quinta';
                break;
            case 6:
                $_SESSION['res'] = 'sexta';
                break;
            case 7:
                $_SESSION['res'] = 'Sábado';
        }
        
        header('Location: index.php');
        exit();
        
    }