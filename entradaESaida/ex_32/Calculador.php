<?php 

    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['comp'] = filter_input(INPUT_POST, 'comp', FILTER_VALIDATE_FLOAT);
        $_SESSION['larg'] = filter_input(INPUT_POST, 'larg', FILTER_VALIDATE_FLOAT);
        $_SESSION['alt']  = filter_input(INPUT_POST, 'alt', FILTER_VALIDATE_FLOAT);
        $_SESSION['volume'] = $_SESSION['comp'] * $_SESSION['larg'] * $_SESSION['alt'];
        header('Location: index.php');
        exit();
    }

?>