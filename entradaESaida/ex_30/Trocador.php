<?php 

    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['v2'] = filter_input(INPUT_POST, 'v1');
        $_SESSION['v1'] = filter_input(INPUT_POST, 'v2');
        header('Location: index.php');
        exit();
    }

?>