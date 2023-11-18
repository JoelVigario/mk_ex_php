<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['num'] = filter_input(INPUT_POST, 'num');
        // alg 1
        $_SESSION['res'] = ($_SESSION['num'] == 0) ? 'igual a zero' : 'diferente de zero';
        // alg2
        if ($_SESSION['num'] == 0) {
            $_SESSION['res'] = 'igual a zero';
        } else {
            $_SESSION['res'] = 'diferente de zero';
        }
        // alg3
        switch ($_SESSION['num']) {
            case 0:
                $_SESSION['res'] = 'igual a zero';
                break;
            default:
                $_SESSION['res'] = 'diferente de zero';
        }
        // alg4
        $_SESSION['res'] = ($_SESSION['num'] != 0) ? 'diferente de zero' : 'igual a zero';
        
        header('Location: index.php');
        exit();
    }