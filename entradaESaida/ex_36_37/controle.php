<?php
    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['mat'] = filter_input(INPUT_POST, 'mat');
        $_SESSION['ano'] = substr($_SESSION['mat'], 0, 2);
        $_SESSION['semestre'] = substr($_SESSION['mat'], 2, 1);
        $_SESSION['ordem'] = substr($_SESSION['mat'], 3);
        header('Location: index.php');
        exit();
    }
