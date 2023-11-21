<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['temp'] = filter_input(INPUT_POST, 'temp');
        if ($_SESSION['temp'] <= 18) {
            $_SESSION['clima'] = "Frio \u{1F976}";
        } elseif ($_SESSION['temp'] <= 23) {
            $_SESSION['clima'] = "Agradável \u{1F324}";
        } elseif ($_SESSION['temp'] <= 35) {
            $_SESSION['clima'] = "Quente \u{1F975}";
        } else {
            $_SESSION['clima'] = "Muito quente \u{1F525}";
        }
        header('Location: index.php');
        exit();
        
    }