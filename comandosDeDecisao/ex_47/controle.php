<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['x'] = filter_input(INPUT_POST, 'x');
        $_SESSION['y'] = filter_input(INPUT_POST, 'y');
        $_SESSION['z'] = filter_input(INPUT_POST, 'z');
        
        if ( ( $_SESSION['x'] <= $_SESSION['z'] && $_SESSION['z'] <= $_SESSION['y'] ) 
                || ( $_SESSION['x'] >= $_SESSION['z'] && $_SESSION['z'] >= $_SESSION['y'] ) ) {
            $_SESSION['res'] = 'Pertence';
        } else {
            $_SESSION['res'] = 'Não Pertence';
        }
        header('Location: index.php');
        exit();
    }